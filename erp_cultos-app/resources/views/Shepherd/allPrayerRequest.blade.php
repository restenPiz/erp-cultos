@extends('Layout.Index')

@section('content')
    @role('shepherd')
        {{-- Inicio da view que possui todo o codigo fonte --}}

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Erp-Cultos</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Todas Actividades</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Todas Pedidos de Oracao</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    {{--<div>
                                        <a href="{{ route('addPrayer') }}" class="btn btn-success add-btn"><i
                                                class="ri-add-line align-bottom me-1"></i> Adicionar</a>
                                    </div>--}}
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                @if(count($prayers)>0)
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            {{-- <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div>
                                            </th> --}}
                                            <th class="sort" data-sort="customer_nam"></th>
                                            <th class="sort" data-sort="customer_name">Titulo</th>
                                            <th class="sort" data-sort="email">Horario</th>
                                            <th class="sort" data-sort="phone">Dia</th>
                                            <th class="sort" data-sort="status">Nome do Usuario</th>
                                            <th class="sort" data-sort="status">Descricao</th>
                                            <th class="sort" data-sort="actio"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($prayers as $prayer)
                                            <tr>
                                                <td class="customer_nam">{{ $prayer->id }}</td>
                                                <td class="customer_name">{{ $prayer->Title }}</td>
                                                <td class="email">{{ $prayer->Hour }}</td>
                                                <td class="phone">{{ $prayer->Date }}</td>
                                                <td class="dat">{{ $prayer->users->name }}</td>
                                                <td class="actio">
                                                    <div class="d-flex gap-2">
                                                        <div class="remove">

                                                            {{--Inicio dos butoes para aprovar ou recusar o pedido de oracao--}}
                                                            @if($prayer->status==1)
                                                            <a href="{{ route('updateStatusRequest', ['id' => $prayer->id, 'status' => 0]) }}" class="btn btn-sm btn-primary remove-item-btn">Aprovar</a>
                                                            @elseif($prayer->status==0)
                                                            <a href="{{ route('updateStatusRequest', ['id' => $prayer->id, 'status' => 1]) }}" class="btn btn-sm btn-secondary remove-item-btn">Reprovar</a>
                                                            @endif
                                                            {{--Fim dos butoes para aprovar ou recusar os pedidos de oracao--}}

                                                            <button class="btn btn-sm btn-danger remove-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteRecordModal{{ $prayer->id }}">Eliminar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal -->
                                            <div class="modal fade zoomIn" id="deleteRecordModal{{ $prayer->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close" id="btn-close"></button>
                                                        </div>
                                                        <form action="{{ route('deletePrayer', ['id' => $prayer->id]) }}"
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
                                                                            {{ $prayer->Title }} ?</p>
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