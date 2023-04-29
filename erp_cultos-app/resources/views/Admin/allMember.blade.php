
@extends('Layout.Principal')
@section('content')

        {{-- Inicio da view que possui todo o codigo fonte --}}

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Erp-Cultos</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Todos Membros</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <h5 class="card-title mb-0">Todos Membros</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="customerList">
                            <div class="card-body border border-dashed border-end-0 border-start-0">
                                <form action="{{route('searchMember')}}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <!--end col-->
                                        {{--<div class="col-xxl-2 col-sm-6">
                                            <div>
                                                <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date">
                                            </div>
                                        </div>--}}
                                        <!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div>
                                                <select class="form-control" data-choices data-choices-search-false name="theological_level" id="idStatus" required>
                                                    <option>...</option>

                                                    {{--Inicio da parte contendo os niveis teologicos--}}
                                                    
                                                    @foreach ($users as $user)
                                                        <option value="{{$user->theological_level}}">{{$user->theological_level}}</option>    
                                                    @endforeach

                                                    {{--Fim da parte contendo os niveis teologicos--}}

                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div>
                                                <select class="form-control" data-choices data-choices-search-false name="surname" id="idPayment" required>
                                                    <option>...</option>

                                                    {{--Inicio da parte contendo o papel de cada um--}}

                                                    @foreach ($users as $user)
                                                        <option value="{{$user->surname}}">{{$user->surname}}</option>    
                                                    @endforeach

                                                    {{--Fim da parte contendo o papel de cada um--}}

                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-1 col-sm-4">
                                            <div>
                                                <button type="submit" name="submit" class="btn btn-primary w-100"> <i class="ri-equalizer-fill me-1 align-bottom"></i>
                                                    Filtrar
                                                </button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>                            <div class="table-responsive table-card mt-3 mb-1">
                                @if(count($users)>0)
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            {{-- <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div>
                                            </th> --}}
                                            <th class="sort" data-sort="customer_name">Nome</th>
                                            <th class="sort" data-sort="email">Email</th>
                                            <th class="sort" data-sort="phone">Apelido</th>
                                            <th class="sort" data-sort="date">Papel</th>
                                            <th class="sort" data-sort="status">Nivel teologico</th>
                                            <th class="sort" data-sort="action">Contacto</th>
                                            @role('admin')
                                            <th class="sort" data-sort="actio"></th>
                                            @endrole
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="customer_name">{{ $user->name }}</td>
                                                <td class="email">{{ $user->email }}</td>
                                                <td class="phone">{{ $user->surname }}</td>
                                                <td class="date">{{ $user->function }}</td>
                                                <td class="date">{{ $user->theological_level }}</td>
                                                <td class="status">{{ $user->contact }}</td>
                                                @role('admin')
                                                <td class="actio">
                                                    <div class="d-flex gap-2">
                                                        <div class="remove">
                                                            @if($user->status==1)
                                                            <a href="{{ route('updateStatus', ['id' => $user->id, 'status' => 0]) }}" class="btn btn-sm btn-danger remove-item-btn" >Bloquear</a>
                                                            @else
                                                            <a href="{{ route('updateStatus', ['id' => $user->id, 'status' => 1]) }}" class="btn btn-sm btn-primary remove-item-btn" >Desbloquear</a>
                                                            @endif
                                                            <button class="btn btn-sm btn-danger remove-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteRecordModal{{ $user->id }}">Eliminar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                                @endrole
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade zoomIn" id="deleteRecordModal{{ $user->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close" id="btn-close"></button>
                                                        </div>
                                                        <form action="{{ route('deleteShepherd', ['id' => $user->id]) }}"
                                                            method="get">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-body">
                                                                <div class="mt-2 text-center">
                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                        trigger="loop"
                                                                        colors="primary:#f7b84b,secondary:#f06548"
                                                                        style="width:100px;height:100px">
                                                                    </lord-icon>
                                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                        <h4>Voce tem certeza ?</h4>
                                                                        <p class="text-muted mx-4 mb-0">Voce pretende eliminar
                                                                            {{ $user->name }} ?</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                    <button type="button" class="btn w-sm btn-light"
                                                                        data-bs-dismiss="modal">Fechar</button>
                                                                    <button type="submit" name="submit"
                                                                        class="btn w-sm btn-danger " id="delete-record">Sim,
                                                                        elimine!</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Fim dos dois modais --}}
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="noresult">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                        </lord-icon>
                                        <h5 class="mt-2">Desculpe! Nenhum resultado encontrado</h5>
                                        {{-- -<p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                orders for you search.</p>- --}}
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        {{-- Fim da view que possui o codigo fonte --}}
@endsection
