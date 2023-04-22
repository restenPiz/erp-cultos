
@extends('Layout.Principal')
@section('content')

    @role('admin')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('storeDepartment') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-xxl-12 col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados do Departamento</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Nome do Departamento</label>
                                            <input type="text" class="form-control" id="basiInput" name="Name"
                                                placeholder="Nome do Departamento">
                                        </div>
                                    </div>

                                </div>

                                <!--end row-->
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card">

                            {{-- Inicio da parte de butoes --}}

                            <button type="submit" name="submit" class="form-control bg-primary"
                                style="color:white">Adicionar</button>

                            {{-- Fim da parte de butoes --}}

                        </div>
                    </div>
                </div>

            </div>

        </form>
        {{-- Fim do conteudo do sistema --}}
    @endrole

@endsection
