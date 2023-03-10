@extends('Layout.Index')

@section('content')
    @role('admin')
        {{-- Inicio da view que possui todo o codigo fonte --}}

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Erp-Cultos</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Detalhes do Culto</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            @foreach ($cults as $cult)
                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">{{ $cult->Title }}</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <label for="accordion-bordered-showcode" class="form-label text-muted">Accoes</label>
                                    <input class="form-check-input code-switcher" type="checkbox"
                                        id="accordion-bordered-showcode">
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-success"
                                    id="accordionBordered">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="accordionborderedExample1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#accor_borderedExamplecollapse1" aria-expanded="true"
                                                aria-controls="accor_borderedExamplecollapse1">
                                                Dados Temporarios?
                                            </button>
                                        </h2>
                                        <div id="accor_borderedExamplecollapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="accordionborderedExample1" data-bs-parent="#accordionBordered">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Dia: <b>{{ $cult->Day_of_cult }}</b></li>
                                                    <li>Horario: <b>{{ $cult->Hour }}</b></li>
                                                    <li>Duracao: <b>{{ $cult->Duration }}</b></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="accordionborderedExample2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#accor_borderedExamplecollapse2" aria-expanded="false"
                                                aria-controls="accor_borderedExamplecollapse2">
                                                Dados do Culto?
                                            </button>
                                        </h2>
                                        <div id="accor_borderedExamplecollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="accordionborderedExample2" data-bs-parent="#accordionBordered">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Dirigente: <b>{{ $cult->Leader }}</b></li>
                                                    <li>Pregador: <b>{{ $cult->Preacher }}</b></li>
                                                    <li>Titulo: <b>{{ $cult->Title }}</b></li>
                                                    <li>Livro: <b>{{ $cult->Book }}</b></li>
                                                    <li>Capitulo: <b>{{ $cult->Chapter }}</b></li>
                                                    <li>Versiculo: <b>{{ $cult->Verse }}</b></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="accordionborderedExample3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#accor_borderedExamplecollapse3" aria-expanded="false"
                                                aria-controls="accor_borderedExamplecollapse3">
                                                Dados Adicionais ?
                                            </button>
                                        </h2>
                                        <div id="accor_borderedExamplecollapse3" class="accordion-collapse collapse"
                                            aria-labelledby="accordionborderedExample3" data-bs-parent="#accordionBordered">
                                            <div class="accordion-body">
                                                {{ $cult->Description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none code-view">

                                {{-- Inicio da parte contendo os butoes para editar e eliminar --}}

                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal"
                                    data-bs-target="#showModal{{ $cult->id }}">Editar</button>
                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal"
                                    data-bs-target="#deleteRecordModal{{ $cult->id }}">Eliminar</button>

                                {{-- Fim da parte contendo os butoes de editar e eliminar --}}

                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>

                {{-- Inicio da parte contendo o modal para editar o culto --}}

                <div class="modal fade" id="showModal{{ $cult->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                            </div>
                            <form class="tablelist-form" autocomplete="off"
                                action="{{ route('updateShepherd', ['id' => $user->id]) }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3" id="modal-id">
                                        <label for="customername-field" class="form-label">Nome</label>
                                        <input type="text" id="id-field" name="name" class="form-control"
                                            value="{{ $user->name }}" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Apelido</label>
                                        <input type="text" id="customername-field" class="form-control"
                                            value="{{ $user->surname }}" name="surname" required />
                                        <div class="invalid-feedback">Por favor escreva bem o seu
                                            nome
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Email</label>
                                        <input type="email" id="email-field" class="form-control"
                                            value="{{ $user->email }}" name="email" required />
                                        <div class="invalid-feedback">Digite o seu email de forma
                                            correcta.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Contact</label>
                                        <input type="text" id="phone-field" class="form-control"
                                            value="{{ $user->contact }}" name="contact" required />
                                        <div class="invalid-feedback">Please enter a phone.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Funcao</label>
                                        <input type="text" id="date-field" name="function" class="form-control"
                                            value="{{ $user->function }}" required />
                                        <div class="invalid-feedback">Digite a sua funcao de forma
                                            correcta.</div>
                                    </div>

                                    <div>
                                        <label for="status-field" class="form-label">Nivel
                                            Teologico</label>
                                        <select class="form-control" name="theological_level" id="status-field" required>
                                            <option value="{{ $user->theological_level }}">
                                                {{ $user->theological_level }}</option>
                                            <option value="Caminho de Deus">Caminho de Deus
                                            </option>
                                            <option value="Caminho de Joao">Caminho de Joao
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" class="btn btn-success"
                                            id="add-btn">Actualizar
                                            Pastor</button>
                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Fim da parte contendo o modal para editar o culto --}}

                {{-- Inicio do modal da parte de eliminar o culto --}}



                {{-- Fim do modal da parte de eliminar o culto --}}
            @endforeach

        </div><!-- end card -->

        {{-- Fim da view que possui o codigo fonte --}}
    @endrole
@endsection
