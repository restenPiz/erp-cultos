@extends('Layout.Index')
@section('content')
    @role('worship_leader')
        {{-- Inicio do conteudo do sistema --}}
        <div class="position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg profile-setting-img">
                <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                <div class="overlay-content">
                    <div class="text-end p-3">
                        <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                            <input id="profile-foreground-img-file-input" type="file"
                                class="profile-foreground-img-file-input">
                            <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                <i class="ri-image-edit-line align-bottom me-1"></i> <a href="{{ route('allFile') }}">Voltar</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-3">
                <div class="card mt-n5">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                <img src="../assets/images/users/avatar-1.jpg"
                                    class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-camera-fill"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-1">{{Auth::user()->name}}</h5>
                            <p class="text-muted mb-0">{{Auth::user()->userType}}</p>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-xxl-9">
                <div class="card mt-xxl-n5">
                    <div class="card-header">
                        <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                    <i class="fas fa-home"></i> Inserir Ficheiro
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                <form enctype="multipart/form-data" action="{{route('storeFile')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="firstnameInput" class="form-label">Nome do Ficheiro</label>
                                                <input type="text" class="form-control" id="firstnameInput" name="Name_file"
                                                    placeholder="Nome do Ficheiro">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="lastnameInput" class="form-label">Tipo de Ficheiro</label>

                                                <select class="form-control" name="Type_file">
                                                    <select>...</select>
                                                    <option value="Arquivo_texto">Texto</option>
                                                    <option value="Arquivo_imagem">Imagem</option>
                                                    <option value="Arquivo_audio">Audio</option>
                                                    <option value="Arquivo_video">Video</option>
                                                    <option value="Arquivo_planilha">Planilha</option>
                                                    <option value="Arquivo_apresentacao">Apresentacao</option>
                                                    <option value="Arquivo_programa">Programa</option>
                                                    <option value="Arquivo_arquivo">Arquivo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Descricao</label>
                                                <input type="text" class="form-control" name="Description"
                                                    placeholder="Digite a descricao">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <div class="dropzone">
                                                    <div class="fallback">
                                                        <input name="File" type="file" multiple="multiple"
                                                            class="form-control">
                                                    </div>
                                                    <div class="dz-message needsclick" style="text-align: center">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                        </div>

                                                        <h4>Faca o upload do seu ficheiro aqui.</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="card">
                        
                                                {{-- Inicio da parte de butoes --}}
                        
                                                <button type="submit" name="submit" class="form-control bg-primary"
                                                    style="color:white">Adicionar</button>
                        
                                                {{-- Fim da parte de butoes --}}
                        
                                            </div>
                                        </div>
                                    </div>

                                    <!--end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        {{-- Fim do conteudo do sistema --}}
    @endrole
@endsection
