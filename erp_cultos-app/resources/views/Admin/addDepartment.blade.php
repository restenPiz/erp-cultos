@extends('Layout.Index')

@section('content')
    @role('admin')
        {{-- Inicio do conteudo do meu sistem --}}
        <form action="{{ route('storeDepartment') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-lg-12">
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
                                    <div class="col-xxl-6 col-md-6">
                                        <label for="tasks-progress" class="form-label">Membros</label>
                                        <div data-simplebar style="height: 95px;">
                                            <ul class="list-unstyled vstack gap-2 mb-0">
                                                @foreach ($users as $user)
                                                <li>
                                                    <div class="form-check d-flex align-items-center">
                                                        <input class="form-check-input me-3" type="checkbox" name="Id_user[]" value="{{ $user->id }}"  id="anna-adame">
                                                        <label class="form-check-label d-flex align-items-center" for="anna-adame">
                                                            <span class="flex-shrink-0">
                                                                <img src="../assets/images/users/avatar-1.jpg" alt="" class="avatar-xxs rounded-circle" />
                                                            </span>
                                                            <span class="flex-grow-1 ms-2">
                                                                {{ $user->name }}
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ul>
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
