@extends('Layout.PrincipalMember')
@section('content')
    <!-- start page title -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Erp-Cultos</h4>
                    <br><br>
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
    </div>
    <!-- end page title -->
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="../assets/images/users/avatar-1.jpg" alt="user-img"
                            class="img-thumbnail rounded-circle" />
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ Auth::user()->name }}</h3>
                        <p class="text-white-75">{{ Auth::user()->userType }}</p>
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Inicio</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Videos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                    <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Imagens</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#audio" role="tab">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Audio</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Documentos</span>
                                </a>
                            </li>
                        </ul>
                        {{--<div class="flex-shrink-0">
                            <a href="{{ route('addFile') }}" class="btn btn-success"><i
                                    class="ri-edit-box-line align-bottom"></i> Adicionar Ficheiro</a>
                        </div>---}}
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-3">

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Info</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Nome Completo :</th>
                                                            <td class="text-muted">{{Auth::user()->name}} {{Auth::user()->surname}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Contacto :</th>
                                                            <td class="text-muted">{{Auth::user()->contact}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                            <td class="text-muted">{{Auth::user()->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Funcao :</th>
                                                            <td class="text-muted">{{Auth::user()->function}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Data de Inicio</th>
                                                            <td class="text-muted">{{Auth::user()->created_at}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                    <!--end card-->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Sobre Nos</h5>
                                            <p>
                                                <ul>
                                                <li>A nossa identidade: Quem somos nos?</li><br>
                                                
                                                Somos cooperadores de Deus, isto e, socios de Deus(1 Cr.3:9);(Col.4:11).<br><br>
                                                
                                                <li>A nossa visao: </li><br>
                                                
                                                Proclamar o evangelio eterno do reino de Deus, em todas as nacoes, lingua, tribos e povos; edificando igrejas fortes, onde cada membro e um 
                                                ministro do evangelio e cada ministro uma igreja forte(Apocalipse 14:6-7);(Rm.8:37, Tm.2:2)<br>
                                                
                                                <li>A nossa missao:</li><br>
                                                
                                                    1.Evangelizar aos nao alcancados ou perdidos(Rm.15:20)<br>
                                                    2.Ensinar a guardar e obdecer todas as coisas que jesus ordenou(Mt.28:19-20)<br>
                                                    3.Treinar e capacitar lideres para obra(2 Tm.2:2)<br>
                                                    4.Fazer discipulos de cristo em todas as nacoes<br>
                                                
                                                <li>O nosso proposito: MT.22:37-40; MT.28:19-20</li><br>
                                                    
                                                    1.Adorar a Deus<br>
                                                    2.Ministrar a graca de Deus uns aos outros<br>
                                                    3.Evangelizar<br>
                                                    4.Baptizar os convertidos<br>
                                                    5.Fazer discipulos de cristo,isto e, ensinar a guardar todas as coisas;<br><br>
                                                
                                                <b>Elaborado por apostolo Luis Chimbia e Sua esposa.</b>
                                            </ul>
                                        </p>
                                            
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activities" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    
                                    {{--Inicio da parte contendo os videos--}}

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                @if(count($videos)>0)
                                                <table class="table table-borderless align-middle mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col">Nome do Video</th>
                                                            <th scope="col">Data de Carregamento</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($videos as $video)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title bg-soft-secondary text-secondary rounded fs-20">
                                                                                <i class="ri-video-line"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-3 flex-grow-1">
                                                                            <h6 class="fs-15 mb-0"><a
                                                                                    href="javascript:void(0)">{{$video->Name_file }}</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $video->created_at }}</td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-light btn-icon"
                                                                            id="show"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ri-equalizer-fill"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                                            aria-labelledby="dropdownMenuLink15">
                                                                            <li><a class="dropdown-item"
                                                                                class="image-popup" href="../{{$video->File}}"><i
                                                                                        class="ri-eye-fill me-2 align-middle text-muted"></i>Reproduzir</a>
                                                                            </li>
                                                                            <li><a href="#" class="dropdown-item" download="{{$video->File}}"><i
                                                                                        class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
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
                                        </div>
                                    </div>

                                    {{--Fim da parte contendo os videos--}}

                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end tab-pane-->

                        {{-- Inicio da div responsavel por exibir o conteudo da imagem --}}
                        <div class="tab-pane fade" id="projects" role="tabpanel">
                            <div class="card">
                                <div class="card-body">

                                    @if(count($images)>0)
                                    <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
                                        {{-- Inicio das imagens do sistema --}}

                                        @foreach ($images as $image)
                                        

                                        <div class="col-sm-6 ">
                                                
                                                <div class="element-item col-xxl-12 col-xl-4 col-sm-6 photography" data-category="photography">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a class="image-popup" href="../{{$image->File}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="../{{$image->File}}" alt="" />
                                                                
                                                            </a>
        
                                                        </div>
        
                                                        <div class="box-content">
                                                            <div class="d-flex align-items-center mt-1">
                                                                <div class="flex-grow-1 text-muted"> <a class="image-popup" href="../{{$image->File}}" class="text-body text-truncate">{{$image->Name_file}}</a></div>
                                                                {{--<div class="flex-shrink-0">
                                                                    <div class="d-flex gap-3">
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.2K
                                                                        </button>
                                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                            <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.1K
                                                                        </button>
                                                                    </div>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        @endforeach
                                        {{-- Fim das imagens do sistema --}}
                                        
                                    </div>
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
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end tab-pane-->
                        <div class="tab-pane fade" id="documents" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    {{---<div class="d-flex align-items-center mb-4">
                                        <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                        <div class="flex-shrink-0">
                                            <input class="form-control d-none" type="file" id="formFile">
                                            <label for="formFile" class="btn btn-danger"><i
                                                    class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                        </div>
                                    </div>---}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                @if(count($files)>0)
                                                <table class="table table-borderless align-middle mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col">Nome do Ficheiro</th>
                                                            <th scope="col">Tipo de Ficheiro</th>
                                                            <th scope="col">Data de Carregamento</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($files as $file)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm">
                                                                            <div
                                                                                class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                                <i class="ri-file-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-3 flex-grow-1">
                                                                            <h6 class="fs-15 mb-0"><a
                                                                                    href="javascript:void(0)">{{ $file->Name_file }}</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $file->Type_file }}</td>
                                                                <td>{{ $file->created_at }}</td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-light btn-icon"
                                                                            id="dropdownMenuLink15"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ri-equalizer-fill"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                                            aria-labelledby="dropdownMenuLink15">
                                                                            {{---<li><a class="dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="ri-eye-fill me-2 align-middle text-muted"></i>Ver</a>
                                                                            </li>--}}
                                                                            <li><a class="dropdown-item" href="#"
                                                                                    download="{{ $file->File }}"><i
                                                                                        class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>

                                                            </tr>
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
                                             {{--<div class="text-center mt-3">
                                                <a href="javascript:void(0);" class="text-success"><i
                                                        class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load
                                                    more </a>
                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tab-pane-->

                        <div class="tab-pane fade" id="audio" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    
                                    {{--Inicio da parte contendo os Audios--}}

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                @if(count($audios)>0)
                                                <table class="table table-borderless align-middle mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col">Nome do Audio</th>
                                                            <th scope="col">Data de Carregamento</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($audios as $audio)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title bg-soft-secondary text-secondary rounded fs-20">
                                                                                <i class="ri-file-line"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-3 flex-grow-1">
                                                                            <h6 class="fs-15 mb-0"><a
                                                                                    href="javascript:void(0)">{{$audio->Name_file }}</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $audio->created_at }}</td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-light btn-icon"
                                                                            id="show"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ri-equalizer-fill"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                                            aria-labelledby="dropdownMenuLink15">
                                                                            {{---<li><a class="dropdown-item"
                                                                                class="image-popup" href="../{{$audio->File}}"><i
                                                                                        class="ri-eye-fill me-2 align-middle text-muted"></i>Reproduzir</a>
                                                                            </li>---}}
                                                                            <li><a href="#" class="dropdown-item" download="{{$audio->File}}"><i
                                                                                        class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
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
                                        </div>
                                    </div>

                                    {{--Fim da parte contendo os videos--}}

                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end tab-pane-->

                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->

@endsection