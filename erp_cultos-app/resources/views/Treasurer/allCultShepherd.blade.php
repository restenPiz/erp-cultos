@extends('Layout.Index')

@section('content')
    @role('shepherd')
        {{-- Inicio da parte contendo todo o conteudo da parte de cultos --}}

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

        <div class="container">


            <div>

                @if (count($cults) > 0)
                    @foreach ($cults as $cult)
                        <div class="row">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">{{ $cult->Name_cult }}</h4>
                                    <div class="flex-shrink-0">
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
                                                <div id="accor_borderedExamplecollapse1"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="accordionborderedExample1"
                                                    data-bs-parent="#accordionBordered">
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
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accor_borderedExamplecollapse2" aria-expanded="false"
                                                        aria-controls="accor_borderedExamplecollapse2">
                                                        Dados do Culto?
                                                    </button>
                                                </h2>
                                                <div id="accor_borderedExamplecollapse2" class="accordion-collapse collapse"
                                                    aria-labelledby="accordionborderedExample2"
                                                    data-bs-parent="#accordionBordered">
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
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accor_borderedExamplecollapse3" aria-expanded="false"
                                                        aria-controls="accor_borderedExamplecollapse3">
                                                        Dados Adicionais ?
                                                    </button>
                                                </h2>
                                                <div id="accor_borderedExamplecollapse3" class="accordion-collapse collapse"
                                                    aria-labelledby="accordionborderedExample3"
                                                    data-bs-parent="#accordionBordered">
                                                    <div class="accordion-body">
                                                        {{ $cult->Description }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        {{-- Fim da parte contendo todo o conteudo da parte de cultos --}}
    @endrole
@endsection
