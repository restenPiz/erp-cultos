
@extends('Layout.PrincipalMember')
@section('content')

        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('storePrayer') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Dados do Pedido de Oracao</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Titulo</label>
                                            <input type="text" class="form-control" id="basiInput" name="Title"
                                                placeholder="Digite o titulo do pedido" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Horario</label>
                                            <input type="time" class="form-control" id="labelInput" name="Hour" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Dia</label>
                                            <input type="date" class="form-control" id="labelInput" name="Date" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Usuario</label>
                                            <select class="form-control" name="Username" required>
                                                <option>...</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Motivo</label>
                                            <textarea cols="7"  rows="5" class="form-control" name="Description" required></textarea>
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


@endsection