@extends('Layout.Index')

@section('content')
    @role('admin')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('storeActivity') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados da Actividade</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Titulo</label>
                                            <input type="text" class="form-control" id="basiInput" name="Title"
                                                placeholder="Digite o titulo da actividade">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Horario</label>
                                            <input type="time" class="form-control" id="labelInput" name="Hour">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Dia</label>
                                            <input type="date" class="form-control" id="labelInput" name="Day">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Grupo</label>
                                            <select class="form-control" name="Group">
                                                <option>...</option>
                                                <option value="Departamento dos jovens">Departamento dos Jovens</option>
                                                <option value="Departamento dos Pais">Departamento dos Pais</option>
                                                <option value="Departamento dos Maes">Departamento dos Maes</option>
                                                <option value="Departamento dos Criancas">Departamento dos Criancas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Responsavel</label>
                                            <select class="form-control" name="Id_user">
                                                <option>...</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
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

    @role('shepherd')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('storeActivity') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados da Actividade</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Titulo</label>
                                            <input type="text" class="form-control" id="basiInput" name="Title"
                                                placeholder="Digite o titulo da actividade">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Horario</label>
                                            <input type="time" class="form-control" id="labelInput" name="Hour">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Dia</label>
                                            <input type="date" class="form-control" id="labelInput" name="Day">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Grupo</label>
                                            <select class="form-control" name="Group">
                                                <option>...</option>
                                                <option value="Departamento dos jovens">Departamento dos Jovens</option>
                                                <option value="Departamento dos Pais">Departamento dos Pais</option>
                                                <option value="Departamento dos Maes">Departamento dos Maes</option>
                                                <option value="Departamento dos Criancas">Departamento dos Criancas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Responsavel</label>
                                            <select class="form-control" name="Id_user">
                                                <option>...</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
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
    @endrole

@endsection
