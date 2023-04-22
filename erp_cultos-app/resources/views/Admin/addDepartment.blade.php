
@extends('Layout.Principal')
@section('content')
    @role('admin')
        <div class="row">


            <div class="col-xxl-6 col-xl-6">

                {{-- Inicio do conteudo do meu sistem --}}
                <form action="{{ route('storeDepartment') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados do Departamento</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Nome do Departamento</label>
                                            <input type="text" class="form-control" id="basiInput" name="Name"
                                                placeholder="Nome do Departamento">
                                        </div>
                                    </div>
                                </div>

                                <!--end row-->
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card">

                            {{-- Inicio da parte de butoes --}}

                            <button type="submit" name="submit" class="form-control bg-primary"
                                style="color:white">Adicionar</button>

                            {{-- Fim da parte de butoes --}}

                        </div>
                    </div>
                </form>
            </div>

            {{-- Fim do conteudo do sistema --}}

            {{-- Inicio da parte contendo todos os departamentos --}}
            <div class="col-xxl-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Todos Departamentos</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">

                            <div class="table-responsive table-card mt-3 mb-1">
                                @if (count($departments) > 0)
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                {{-- -<th class="sort" data-sort="customer_nam"></th>- --}}
                                                <th class="sort" data-sort="customer_name">Nome do Departamento</th>
                                                <th class="sort" data-sort="actio"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($departments as $department)
                                                @if (isset($department))
                                                    <tr>
                                                        {{-- -<td class="customer_nam">{{ $department->id }}</td>- --}}
                                                        <td class="customer_name">{{ $department->Name }}</td>
                                                        <td class="actio">
                                                            <div class="d-flex gap-2">
                                                                {{-- -<div class="remove">
                                                            <button class="btn btn-sm btn-primary remove-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#showRecordModal{{ $department->id }}">Ver</button>
                                                        </div>- --}}
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showModal{{ $department->id }}">Editar</button>
                                                                </div>
                                                                <div class="remove">
                                                                    <button class="btn btn-sm btn-danger remove-item-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#deleteRecordModal{{ $department->id }}">Eliminar</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    {{-- Inicio do modal para editar o pastor --}}
                                                    <div class="modal fade" id="showModal{{ $department->id }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-light p-3">
                                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="close-modal"></button>
                                                                </div>
                                                                <form class="tablelist-form" autocomplete="off"
                                                                    action="{{ route('updateDepartment', ['id' => $department->id]) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="mb-3" id="modal-id">
                                                                            <label for="customername-field"
                                                                                class="form-label">Titulo</label>
                                                                            <input type="text" id="id-field" name="Name"
                                                                                class="form-control"
                                                                                value="{{ $department->Name }}" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="hstack gap-2 justify-content-end">
                                                                            <button type="button" class="btn btn-light"
                                                                                data-bs-dismiss="modal">Fechar</button>
                                                                            <button type="submit" name="submit"
                                                                                class="btn btn-success"
                                                                                id="add-btn">Actualizar
                                                                                Departamento</button>
                                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Fim do modal para editar pastor --}}

                                                    {{-- Inicio do modal para fazer o show das informacoes dos departamentos --}}

                                                    <div class="modal fade" id="showRecordModal{{ $department->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-light p-3">
                                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="close-modal"></button>
                                                                </div>
                                                                <div class="modal-body">


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Fim do modal para fazer o show dos departamentos --}}

                                                    <!-- Modal -->
                                                    <div class="modal fade zoomIn" id="deleteRecordModal{{ $department->id }}"
                                                        tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="btn-close"></button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('deleteDepartment', ['id' => $department->id]) }}"
                                                                    method="get">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-body">
                                                                        <div class="mt-2 text-center">
                                                                            <lord-icon
                                                                                src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                                trigger="loop"
                                                                                colors="primary:#f7b84b,secondary:#f06548"
                                                                                style="width:100px;height:100px">
                                                                            </lord-icon>
                                                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                                <h4>Voce tem certeza ?</h4>
                                                                                <p class="text-muted mx-4 mb-0">Voce pretende
                                                                                    eliminar
                                                                                    a actividade de
                                                                                    {{ $department->Name }} ?</p>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                            <button type="button" class="btn w-sm btn-light"
                                                                                data-bs-dismiss="modal">Fechar</button>
                                                                            <button type="submit" name="submit"
                                                                                class="btn w-sm btn-danger "
                                                                                id="delete-record">Sim,
                                                                                elimine!</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Fim dos dois modais --}}
                                                @endif
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
                {{-- Fim da parte contendo todos os departamentos --}}

            </div>
        @endrole
    @endsection
