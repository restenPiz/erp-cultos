@extends('Layout.Index')

@section('content')
    {{-- Inicio do conteudo do meu sistem --}}

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
                                    <input type="text" class="form-control" id="basiInput" placeholder="Digite o seu nome">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="labelInput" placeholder="Digite o seu email">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Password</label>
                                    <input type="passowrd" class="form-control" id="labelInput" placeholder="Digite a sua senha">
                                </div>
                            </div>
                            <!--end col-->
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
                                    <label for="basiInput" class="form-label">Contacto</label>
                                    <input type="password" class="form-control" id="basiInput" placeholder="Digite o seu contacto">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Funcao</label>
                                    <input type="password" class="form-control" id="labelInput" placeholder="Escreva a sua funcao">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 col-md-6">
                                <label for="exampleDataList" class="form-label">Nivel Teologico</label>
                                <select class="form-control">
                                    <option>...</option>
                                    <option>Caminho de Deus</option>
                                    <option>Caminho de Jesus</option>
                                </select>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">

                {{--Inicio da parte de butoes--}}

                <button class="form-control bg-primary" style="color:white">Adicionar</button>

                {{--Fim da parte de butoes--}}
                
            </div>
        </div>
    </div>

    {{-- Fim do conteudo do sistema --}}
@endsection
