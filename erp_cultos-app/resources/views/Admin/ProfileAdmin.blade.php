
@extends('Layout.Principal')
@section('content')

    @role('admin')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('updateProfileAdmin',['id'=>$userss->id]) }}" method="post">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados de Sistema</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="basiInput"
                                                value="{{$userss->name}}" name="name" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="labelInput"
                                            value="{{$userss->email}}" name="email" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Senha</label>
                                            <input type="password" class="form-control" id="labelInput"
                                            value="{{$userss->password}}" name="password" controls required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Senha de Confirmacao</label>
                                            <input type="password" class="form-control" id="labelInput"
                                            value="{{$userss->password}}" name="password_confirmation" controls required>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados do Pastor</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Apelido</label>
                                            <input type="text" class="form-control" id="basiInput"
                                            value="{{$userss->surname}}" name="surname" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Contacto</label>
                                            <input type="text" class="form-control" id="basiInput"
                                            value="{{$userss->contact}}" name="contact" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Funcao</label>
                                            <input type="text" class="form-control" id="labelInput"
                                            value="{{$userss->function}}" name="function" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Genero</label>
                                            <select class="form-control" name="gender">
                                                <option value="{{$userss->gender}}">{{$userss->gender}}</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--<div class="col-xxl-6 col-md-6">
                                        <label for="exampleDataList" class="form-label">Nivel Teologico</label>
                                        <select class="form-control" name="theological_level" required>
                                            <option value="{{$userss->theological_level}}">{{$users->theological_level}}</option>
                                            <option value="Curso Basico em Teologia">Curso Basico em Teologia</option>
                                            <option value="Curso Medio em Teologia">Curso Medio em Teologia</option>
                                            <option value="Curso Superior em Teologia">Curso Superior em Teologia</option>
                                            <option value="Capacitacao de Lideres">Capacitacao de Lideres</option>
                                            <option value="Capacitacao de Obreiros">Capacitacao de Obreiros</option>
                                            <option value="Capacitacao de Professores Criancas">Capacitacao de Professores Criancas</option>
                                            <option value="Nenhum">Nenhum</option>
                                        </select>
                                    </div>--}}
                                    <input type="hidden" class="form-control" id="labelInput" name="id" value="{{$userss->id}}">
                                    <!--end col-->
                                    <input type="hidden" class="form-control" id="labelInput" name="userType" value="admin">
                                </div>
                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <div class="card">

                        {{-- Inicio da parte de butoes --}}

                        <button type="submit" name="submit" class="form-control bg-primary"
                            style="color:white">Actualizar</button>

                        {{-- Fim da parte de butoes --}}

                    </div>
                </div>
            </div>
        </form>
        {{-- Fim do conteudo do sistema --}}
    @endrole
@endsection
