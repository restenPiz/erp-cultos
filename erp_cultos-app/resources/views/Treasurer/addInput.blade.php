@extends('Layout.Index')

@section('content')
    @role('treasurer')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('storeInput') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados da Entrada</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Valor</label>
                                            <input type="text" class="form-control" id="basiInput" name="Offert_value"
                                                placeholder="Valor de ofertorio">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Valor de Confirmacao</label>
                                            <input type="text" class="form-control" id="basiInput" name="Offert_value_confirmation"
                                                placeholder="Digite novamente o valor para confirmar">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Metodo de Pagamento</label>
                                            <select class="form-control" name="Input_type">
                                                <option>...</option>
                                                <option value="Cash">Cash</option>
                                                <option value="M-pesa">M-pesa</option>
                                                <option value="E-mola">E-mola</option>
                                                <option value="M-kesh">M-kesh</option>
                                                <option value="Conta-bancaria">Conta-bancaria</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Nome do Usuario</label>
                                            <select class="form-control" name="Id_user">
                                                <option>...</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Dia</label>
                                            <input type="date" class="form-control" id="labelInput" name="Day">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <label for="labelInput" class="form-label">Tipo de Entrada</label>

                                            <select class="form-control" name="Description">
                                                <option>...</option>
                                                <option value="Ofertorio">Ofertorio</option>
                                                <option value="Dizimo">Dizimo</option>
                                                <option value="Contribuicao">Contribuicao</option>
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
