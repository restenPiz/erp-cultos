@extends('Layout.Principal')
@section('content')
    @role('admin')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('storeWorship_leader') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-xxl-3" style="margin-top:3rem;">
                    <div class="card mt-n5">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <img src="../assets/images/users/avatar-1.jpg"
                                        class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                        alt="user-profile-image">
                                    <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <input id="profile-img-file-input" type="file" class="profile-img-file-input"
                                            name="File">
                                        <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                <i class="ri-camera-fill"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <h5 class="fs-16 mb-1">Upload da sua foto</h5>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <div class="col-xxl-9">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados do Lider de Louvor</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="basiInput"
                                                placeholder="Digite o seu nome" name="name">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="labelInput"
                                                placeholder="Digite o seu email" name="email">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Senha</label>
                                            <input type="password" class="form-control" id="labelInput"
                                                placeholder="Digite a sua senha" name="password">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Senha de Confirmacao</label>
                                            <input type="password" class="form-control" id="labelInput"
                                                placeholder="Digite a sua senha" name="password_confirmation">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Apelido</label>
                                            <input type="text" class="form-control" id="basiInput"
                                                placeholder="Digite o seu nome" name="surname">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Contacto</label>
                                            <input type="text" class="form-control" id="basiInput"
                                                placeholder="Digite o seu contacto" name="contact">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Funcao</label>
                                            <input type="text" class="form-control" id="labelInput"
                                                placeholder="Escreva a sua funcao" name="function">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <label for="exampleDataList" class="form-label">Nivel Teologico</label>
                                        <select class="form-control" name="theological_level">
                                            <option>...</option>
                                            <option value="Curso Basico em Teologia">Curso Basico em Teologia</option>
                                            <option value="Curso Medio em Teologia">Curso Medio em Teologia</option>
                                            <option value="Curso Superior em Teologia">Curso Superior em Teologia</option>
                                            <option value="Capacitacao de Lideres">Capacitacao de Lideres</option>
                                            <option value="Capacitacao de Obreiros">Capacitacao de Obreiros</option>
                                            <option value="Capacitacao de Professores Criancas">Capacitacao de Professores
                                                Criancas</option>
                                            <option value="Nenhum">Nenhum</option>
                                        </select>
                                    </div>
                                    <!--end col-->
                                    <input type="hidden" class="form-control" id="labelInput" name="userType"
                                        value="lider_louvor">

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
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- Fim do conteudo do sistema --}}
    @endrole
@endsection
