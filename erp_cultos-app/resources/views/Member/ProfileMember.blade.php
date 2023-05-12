
@extends('Layout.Another')
@section('content')

    @role('member')
        {{-- Inicio do conteudo do meu sistem --}}
        <br><br><br><br><div class="container-fluid">
        
            <form action="{{ route('updateProfileAdmin',['id'=>$userss->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card mt-n5">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                        <img src="/{{$userss->File}}"
                                            class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                            alt="user-profile-image">
                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                            <input id="profile-img-file-input" type="file" class="profile-img-file-input"
                                                name="File" required>
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
                    <!--end col-->
                    <div class="col-xxl-9">
                        <div class="card mt-xxl-n5">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab"
                                            href="#personalDetails">
                                            <i class="fas fa-home"></i> Detalhes de Acesso
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                            <i class="far fa-user"></i> Detalhes Pessoais
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#experience" role="tab">
                                            <i class="far fa-envelope"></i> Detalhes Adicionais
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-4">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Primeiro Nome</label>
                                                    <input type="text" class="form-control" id="firstnameInput"
                                                        value="{{$userss->name}}" name="name" required>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="lastnameInput" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="lastnameInput"
                                                    value="{{$userss->email}}" name="email" required>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="phonenumberInput"
                                                        placeholder="Digite a sua senha" name="password" required>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Password de
                                                        Confirmacao</label>
                                                    <input type="password" class="form-control" id="phonenumberInput"
                                                        placeholder="Digite a sua senha" name="password_confirmation" required>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="changePassword" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Apelido</label>
                                                    <input type="text" class="form-control" id="firstnameInput"
                                                    value="{{$userss->surname}}" name="surname" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Numero de BI</label>
                                                    <input type="text" class="form-control" id="firstnameInput"
                                                    value="{{$userss->number_bi}}" name="number_bi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Profissao</label>
                                                    <input type="text" class="form-control" id="firstnameInput"
                                                    value="{{$userss->profission}}" name="profission" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Filiacao</label>
                                                    <input type="text" class="form-control" id="firstnameInput"
                                                    value="{{$userss->affiliation}}" name="affiliation" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Genero</label>
                                                    <select class="form-control" name="gender" required>
                                                        <option value="{{$userss->gender}}">{{$userss->gender}}</option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Femenino">Femenino</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Morada</label>
                                                    <input type="text" class="form-control" id="firstnameInput"
                                                    value="{{$userss->household}}" name="household" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Data de
                                                        Nascimento</label>
                                                    <input type="date" class="form-control" id="firstnameInput"
                                                    value="{{$userss->date_of_birth}}" name="date_of_birth" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Estado Civil</label>
                                                    <input type="text" class="form-control" id="firstnameInput"
                                                    value="{{$userss->marital_status}}" name="marital_status" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Contacto</label>
                                                    <input type="text" class="form-control" id="firstnameInput"
                                                    value="{{$userss->contact}}" name="contact" required>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            {{-- <div class="col-lg-12">
                                                <div class="text-end">
                                                    <a href="#experience" data-bs-toggle="tab" role="tab" class="btn btn-success add-btn"><i
                                                        class="ri-add-line align-bottom me-1"></i> Seguinte</a>
                                                </div>
                                            </div> --}}
                                            <!--end col-->
                                        </div>
    
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="experience" role="tabpanel">
                                        <div id="newlink">
                                            <div id="1">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput"
                                                                class="form-label">Baptismo</label>
                                                            <select class="form-control" name="baptism" required>
                                                                <option value="{{$userss->baptism}}">{{$userss->baptism}}</option>
                                                                <option value="Baptizado">Baptizado</option>
                                                                <option value="Nao Baptizado">Nao Baptizado</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Tempo na
                                                                Igreja</label>
                                                            <input type="text" class="form-control"
                                                                id="firstnameInput" value="{{$userss->time_of_church}}"
                                                                name="time_of_church" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Nivel
                                                                Teologico</label>
                                                            <select class="form-control" name="theological_level" required>
                                                                <option value="{{$userss->theological_level}}">{{$userss->theological_level}}</option>
                                                                <option value="Curso Basico em Teologia">Curso Basico em
                                                                    Teologia</option>
                                                                <option value="Curso Medio em Teologia">Curso Medio em
                                                                    Teologia</option>
                                                                <option value="Curso Superior em Teologia">Curso Superior
                                                                    em Teologia</option>
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
                                                    <input type="hidden" value="membro" name="function">
                                                    <input type="hidden" value="member" name="userType">
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="hstack gap-2 justify-content-end">
                            <a href="{{route('dashboard')}}" class="btn btn-success">Voltar</a>
                            <button type="submit" name="submit" class="btn btn-primary">Actualizar</a>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </form>
    
        </div>
    
    {{-- Fim do conteudo do sistema --}}
    @endrole
@endsection
