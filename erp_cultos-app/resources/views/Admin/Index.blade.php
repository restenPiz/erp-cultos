@extends('Layout.Index')
@section('content')
     <!-- start page title -->
     <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Erp-Cultos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paginas</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    {{--Inicio do conteudo do meu sistema--}}

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Invoices Sent</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +89.24 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k</h4>
                            <span class="badge bg-warning me-1">2,258</span> <span class="text-muted">Invoices sent</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="file-text" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Paid Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +8.09 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="409.66">0</span>k</h4>
                            <span class="badge bg-warning me-1">1,958</span> <span class="text-muted">Paid by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="check-square" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Unpaid Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +9.01 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="136.98">0</span>k</h4>
                            <span class="badge bg-warning me-1">338</span> <span class="text-muted">Unpaid by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="clock" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Cancelled Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +7.55 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="84.20">0</span>k</h4>
                            <span class="badge bg-warning me-1">502</span> <span class="text-muted">Cancelled by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="x-octagon" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Todas Igrejas Filhas</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <a href="{{ route('addBranches') }}" class="btn btn-success add-btn"><i
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
                                        <th class="sort" data-sort="customer_nam"></th>
                                        <th class="sort" data-sort="customer_name">Nome da Filial</th>
                                        <th class="sort" data-sort="email">Ano de Criacao</th>
                                        <th class="sort" data-sort="phone">Endereco</th>
                                        <th class="sort" data-sort="date">Numero de Membros</th>
                                        <th class="sort" data-sort="status">Nome do Responsavel</th>
                                        <th class="sort" data-sort="actio"></th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach ($branches as $branche)
                                        <tr>
                                            <td class="customer_nam">{{ $branche->id }}</td>
                                            <td class="customer_name">{{ $branche->Name }}</td>
                                            <td class="email">{{ $branche->Creation_year }}</td>
                                            <td class="phone">{{ $branche->Address }}</td>
                                            <td class="date">{{ $branche->Number_of_members }}</td>
                                            <td class="dat">{{ $branche->name($branche->Id_user) }}</td>
                                            <td class="actio">
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <button class="btn btn-sm btn-success edit-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#showModal{{ $branche->id }}">Editar</button>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteRecordModal{{ $branche->id }}">Eliminar</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- Inicio do modal para editar o pastor --}}
                                        <div class="modal fade" id="showModal{{ $branche->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-light p-3">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close" id="close-modal"></button>
                                                    </div>
                                                    <form class="tablelist-form" autocomplete="off"
                                                        action="{{ route('updateBranches', ['id' => $branche->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="mb-3" id="modal-id">
                                                                <label for="customername-field"
                                                                    class="form-label">Nome da Filial</label>
                                                                <input type="text" id="id-field" name="Name"
                                                                    class="form-control" value="{{ $branche->Name }}"
                                                                    required />
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="customername-field"
                                                                    class="form-label">Ano de Criacao</label>
                                                                <input type="date" id="customername-field"
                                                                    class="form-control" value="{{ $branche->Creation_year }}"
                                                                    name="Creation_year" required />
                                                                <div class="invalid-feedback">Por favor escreva bem o seu
                                                                    nome
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="email-field" class="form-label">Endereco</label>
                                                                <input type="text" id="email-field"
                                                                    class="form-control" value="{{ $branche->Address }}"
                                                                    name="Address" required />
                                                                <div class="invalid-feedback">Digite o seu email de forma
                                                                    correcta.</div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="phone-field"
                                                                    class="form-label">Numero de Membros</label>
                                                                <input type="text" id="phone-field"
                                                                    class="form-control" value="{{ $branche->Number_of_members }}"
                                                                    name="Number_of_members" required />
                                                                <div class="invalid-feedback">Please enter a phone.</div>
                                                            </div>

                                                            <div>
                                                                <label for="status-field" class="form-label">Nome do Responsavel</label>
                                                                <select class="form-control" name="Id_user" id="status-field" required>
                                                                    <option value="{{$branche->Id_user}}">{{$branche->name($branche->Id_user)}}</option>
                                                                    @foreach ($users as $user)
                                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-success" id="add-btn">Actualizar
                                                                    Filial</button>
                                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Fim do modal para editar pastor --}}

                                        <!-- Modal -->
                                        <div class="modal fade zoomIn" id="deleteRecordModal{{ $branche->id }}"
                                            tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <form action="{{route('deleteBranches',['id'=>$branche->id])}}" method="get">
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
                                                                        {{ $branche->Name }} ?</p>
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

    {{--Fim do conteudo do sistema--}}

@endsection