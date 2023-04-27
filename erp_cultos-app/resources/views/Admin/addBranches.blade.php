
@extends('Layout.Principal')
@section('content')

    @role('admin')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{route('storeBranches')}}" method="post">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados da Igreja Filha</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Nome da Filial</label>
                                            <input type="text" class="form-control" id="basiInput"
                                                placeholder="Digite o nome da Filial" name="Name" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Ano de Criacao</label>
                                            <input type="date" class="form-control" id="labelInput"
                                             name="Creation_year" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Endereco</label>
                                            <input type="text" class="form-control" id="labelInput"
                                                placeholder="Digite o seu endereco" name="Address" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Numero de Membros</label>
                                            <input type="number" class="form-control" id="labelInput"
                                                placeholder="Numero de Membros" name="Number_of_members" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <label for="exampleDataList" class="form-label">Nome do Responsavel</label>
                                        <select class="form-control" name="Id_user" required>
                                            <option>...</option>
                                            @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
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
