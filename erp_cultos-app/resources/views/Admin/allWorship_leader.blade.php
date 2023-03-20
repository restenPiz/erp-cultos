@extends('Layout.Index')

@section('content')
    @role('admin')
        {{-- Inicio da view que possui todo o codigo fonte --}}

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Erp-Cultos</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Todos Lideres de Louvor</li>
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
                        <h4 class="card-title mb-0">Todos Lideres de Louvor</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="{{ route('addWorship_leader') }}" class="btn btn-success add-btn"><i
                                                class="ri-add-line align-bottom me-1"></i> Adicionar</a>
                                    </div>
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
                                            <th class="sort" data-sort="actio"></th>
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
                                                <td class="actio">
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#showModal{{ $user->id }}">Editar</button>
                                                        </div>
                                                        <div class="remove">
                                                            <button class="btn btn-sm btn-danger remove-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteRecordModal{{ $user->id }}">Eliminar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            {{-- Inicio do modal para editar o pastor --}}
                                            <div class="modal fade" id="showModal{{ $user->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-light p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close" id="close-modal"></button>
                                                        </div>
                                                        <form class="tablelist-form" autocomplete="off"
                                                            action="{{ route('updateWorship_leader', ['id' => $user->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3" id="modal-id">
                                                                    <label for="customername-field"
                                                                        class="form-label">Nome</label>
                                                                    <input type="text" id="id-field" name="name"
                                                                        class="form-control" value="{{ $user->name }}"
                                                                        required />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="customername-field"
                                                                        class="form-label">Apelido</label>
                                                                    <input type="text" id="customername-field"
                                                                        class="form-control" value="{{ $user->surname }}"
                                                                        name="surname" required />
                                                                    <div class="invalid-feedback">Por favor escreva bem o seu
                                                                        nome
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="email-field" class="form-label">Email</label>
                                                                    <input type="email" id="email-field"
                                                                        class="form-control" value="{{ $user->email }}"
                                                                        name="email" required />
                                                                    <div class="invalid-feedback">Digite o seu email de forma
                                                                        correcta.</div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="phone-field"
                                                                        class="form-label">Contact</label>
                                                                    <input type="text" id="phone-field"
                                                                        class="form-control" value="{{ $user->contact }}"
                                                                        name="contact" required />
                                                                    <div class="invalid-feedback">Please enter a phone.</div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="date-field" class="form-label">Funcao</label>
                                                                    <input type="text" id="date-field" name="function"
                                                                        class="form-control" value="{{ $user->function }}"
                                                                        required />
                                                                    <div class="invalid-feedback">Digite a sua funcao de forma
                                                                        correcta.</div>
                                                                </div>

                                                                <div>
                                                                    <label for="status-field" class="form-label">Nivel
                                                                        Teologico</label>
                                                                    <select class="form-control" name="theological_level"
                                                                        id="status-field" required>
                                                                        <option value="{{ $user->theological_level }}">
                                                                            {{ $user->theological_level }}</option>

                                                                        <option value="Curso Basico em Teologia">Curso Basico
                                                                            em Teologia</option>
                                                                        <option value="Curso Medio em Teologia">Curso Medio em
                                                                            Teologia</option>
                                                                        <option value="Curso Superior em Teologia">Curso
                                                                            Superior em Teologia</option>
                                                                        <option value="Capacitacao de Lideres">Capacitacao de
                                                                            Lideres</option>
                                                                        <option value="Capacitacao de Obreiros">Capacitacao de
                                                                            Obreiros</option>
                                                                        <option value="Capacitacao de Professores Criancas">
                                                                            Capacitacao de Professores Criancas</option>
                                                                        <option value="Nenhum">Nenhum</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Fechar</button>
                                                                    <button type="submit" name="submit"
                                                                        class="btn btn-success" id="add-btn">Actualizar
                                                                        Pastor</button>
                                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Fim do modal para editar pastor --}}

                                            <!-- Modal -->
                                            <div class="modal fade zoomIn" id="deleteRecordModal{{ $user->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close" id="btn-close"></button>
                                                        </div>
                                                        <form action="{{ route('deleteWorship_leader', ['id' => $user->id]) }}"
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
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                        </lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                            orders for you search.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Anterior
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Proximo
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
