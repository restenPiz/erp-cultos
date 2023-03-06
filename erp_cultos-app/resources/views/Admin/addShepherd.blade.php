@extends('Layout.Index')

@section('content')
    {{-- Inicio do conteudo do meu sistem --}}
    <form action="{{ route('storeShepherd') }}" method="post">
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
                                        <option value="Caminho de Deus">Caminho de Deus</option>
                                        <option value="Caminho de Jesus">Caminho de Jesus</option>
                                    </select>
                                </div>
                                <!--end col-->
                                <input type="hidden" class="form-control" id="labelInput" name="userType" value="pastor">
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
                        style="color:white">Adicionar</button>

                    {{-- Fim da parte de butoes --}}

                </div>
            </div>
        </div>
    </form>
    {{-- Fim do conteudo do sistema --}}
@endsection
