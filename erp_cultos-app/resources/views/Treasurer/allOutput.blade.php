@extends('Layout.Index')

@section('content')
    @role('treasurer')
        {{-- Inicio da view que possui todo o codigo fonte --}}

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Erp-Cultos</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Todas as Saidas</li>
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
                                <h5 class="card-title mb-0">Todas as Saidas</h5>
                            </div>
                            <div class="col-sm-auto">
                                <div>
                                    <a href="{{ route('addOutput') }}" class="btn btn-success add-btn"><i
                                            class="ri-add-line align-bottom me-1"></i> Adicionar</a>
                                
                                    <a href="{{ route('dowloandPDF') }}" class="btn btn-primary add-btn"><i
                                            class="ri-add-line align-bottom me-1"></i> Baixar Relatorio</a>
                                </div></div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="customerList">
                            <div class="card-body border border-dashed border-end-0 border-start-0">
                                <form action="{{route('search')}}" method="post">
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
                                                <select class="form-control" data-choices data-choices-search-false name="Department" id="idStatus">
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div>
                                                <select class="form-control" data-choices data-choices-search-false name="Day" id="idPayment">
                                                    <option>...</option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-1 col-sm-4">
                                            <div>
                                                <button type="button" name="submit" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-1 align-bottom"></i>
                                                    Filtrar
                                                </button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                @if(count($outputs)>0)
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="sort" data-sort="customer_nam"></th>
                                            <th class="sort" data-sort="customer_name">Valor</th>
                                            <th class="sort" data-sort="email">Data de Saida</th>
                                            <th class="sort" data-sort="phone">Nome do Usuario</th>
                                            <th class="sort" data-sort="date">Horario</th>
                                            <th class="sort" data-sort="date">Descricacao</th>
                                            {{---<th class="sort" data-sort="status">Descricacao</th>--}}
                                            <th class="sort" data-sort="actio"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($outputs as $output)
                                            <tr>
                                                <td class="customer_nam">{{ $output->id }}</td>
                                                <td class="customer_name">{{ $output->Value }}</td>
                                                <td class="email">{{ $output->Day }}</td>
                                                <td class="phone">{{ $output->users->name }}</td>
                                                <td class="phone">{{ $output->Hour }}</td>
                                                <td class="date">{{ $output->Description }}</td>
                                                <td class="actio">
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#showModal{{ $output->id }}">Editar</button>
                                                        </div>
                                                        <div class="remove">
                                                            <button class="btn btn-sm btn-danger remove-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteRecordModal{{ $output->id }}">Eliminar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            {{-- Inicio do modal para editar o pastor --}}
                                            <div class="modal fade" id="showModal{{ $output->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-light p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close" id="close-modal"></button>
                                                        </div>
                                                        <form class="tablelist-form" autocomplete="off"
                                                            action="{{ route('updateOutput', ['id' => $output->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3" id="modal-id">
                                                                    <label for="customername-field"
                                                                        class="form-label">Valor</label>
                                                                    <input type="text" id="id-field" name="Value"
                                                                        class="form-control" value="{{ $output->Value }}"
                                                                        required />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="customername-field"
                                                                        class="form-label">Dia</label>
                                                                    <input type="date" id="customername-field"
                                                                        class="form-control" value="{{ $output->Day }}"
                                                                        name="Day" required />
                                                                    <div class="invalid-feedback">Por favor escreva bem o seu
                                                                        nome
                                                                    </div>
                                                                </div>

                                                                <div>
                                                                    <label for="status-field" class="form-label">Nome do Usuario</label>
                                                                    <select class="form-control" name="Id_user"
                                                                        id="status-field" required>
                                                                        <option value="{{ $output->Id_user }}">
                                                                            {{ $output->users->name }}</option>
                                                                        @foreach ($users as $user)
                                                                            <option value="{{ $user->id }}">
                                                                                {{ $user->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div>
                                                                    <label for="basiInput" class="form-label">Horario</label>
                                                                    <input value="{{$output->Hour}}" type="time" class="form-control" id="basiInput" name="Hour">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="customername-field"
                                                                        class="form-label">Descricacao</label>
                                                                    <input type="text" id="customername-field"
                                                                        class="form-control" value="{{ $output->Description }}"
                                                                        name="Description" required />
                                                                    <div class="invalid-feedback">Por favor escreva bem o seu
                                                                        nome
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Fechar</button>
                                                                    <button type="submit" name="submit"
                                                                        class="btn btn-success" id="add-btn">Actualizar
                                                                        Actividade</button>
                                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Fim do modal para editar pastor --}}

                                            <!-- Modal -->
                                            <div class="modal fade zoomIn" id="deleteRecordModal{{ $output->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close" id="btn-close"></button>
                                                        </div>
                                                        <form action="{{ route('deleteOutput', ['id' => $output->id]) }}"
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
                                                                            a actividade de
                                                                            {{ $output->Title }} ?</p>
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
                                        {{---<p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                            orders for you search.</p>---}}
                                    </div>
                                </div>
                                @endif
                                
                            </div>
                            {{--Inicio da parte contendo o valor total--}}
                            <h4>Valor Total: {{$count}}</h4>
                            
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
    @endrole
@endsection
