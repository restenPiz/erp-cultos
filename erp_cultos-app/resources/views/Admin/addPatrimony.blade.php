
@extends('Layout.Principal')
@section('content')

    @role('admin')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('storePatrimony') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados do Patrimonio</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Nome do Objecto</label>
                                            <input type="text" class="form-control" id="basiInput" name="Name" placeholder="Nome do Objecto" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Quantidade</label>
                                            <input type="text" class="form-control" id="basiInput" name="Quantity" placeholder="Quantidade" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Situacao</label>
                                            <select class="form-control" name="Status" required>
                                                <option>...</option>
                                                <option value="Danificado">Danificado</option>
                                                <option value="Em Boas Condicoes">Em Boas Condicoes</option>
                                                <option value="Em condicoes Razoaveis">Em condicoes Razoaveis</option>
                                            </select>
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
    @endrole
@endsection
