@extends('Layout.PrincipalMember')

@section('content')
    @role('member')

    {{--Inicio do conteudo da parte de todos comunicados--}}

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Erp-Cultos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Todos Comunicados</li>
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
                    <h4 class="card-title mb-0">Todos Comunicados</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <a href="{{ route('addAnnouncement') }}" class="btn btn-success add-btn"><i
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
                            @if(count($announcements)>0)
                            <table class="table align-middle table-nowrap" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="sort" data-sort="customer_nam"></th>
                                        <th class="sort" data-sort="customer_name">Comunicador</th>
                                        <th class="sort" data-sort="email">Horario</th>
                                        <th class="sort" data-sort="actio"></th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach ($announcements as $announcement)
                                        <tr>
                                            <td class="customer_nam">{{ $announcement->id }}</td>
                                            <td class="customer_name">{{ $announcement->name($announcement->Id_user) }}</td>
                                            <td class="email">{{ $announcement->Hour }}</td>
                                            <td class="actio">
                                                <div class="dropdown">
                                                    <a href="#dropdownMenuLink15"
                                                        class="btn btn-light btn-icon"
                                                        id="dropdownMenuLink15"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-equalizer-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink15" id="dropdownMenuLink15">
                                                        <li><a class="dropdown-item"
                                                                href="{{route('showAnnouncement',['id'=>$announcement->id])}}"><i
                                                                    class="ri-eye-fill me-2 align-middle text-muted"></i>Ver</a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deletRecordModal{{$announcement->id }}"><i
                                                                    class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Eliminar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade zoomIn" id="deleteRecordModal{{ $announcement->id }}"
                                            tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <form action="{{ route('deleteAnnouncement', ['id' => $announcement->id]) }}"
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
                                                                     este comunicado ?</p>
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
    {{--Fim do conteudo da minha parte de todos comunicados--}}

    @endrole
@endsection
