@extends('Layout.Principal')
@section('content')

    {{--Inicio da seccao contendo o conteudo do meu help us--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-0 bg-soft-success mx-n4 mt-n4 border-top">
                <div class="px-4">
                    <div class="row">
                        <div class="col-xxl-5 align-self-center">
                            <div class="py-4">
                                <h4 class="display-6 coming-soon-text">Perguntas Frequentes</h4>
                                <p class="text-success fs-15 mt-3">Aqui voce encontrar a resposta para a sua pergunta, caso nao encontre contacte o administrador!</p>
                                <div class="hstack flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> admin@gmail.com</button>
                                    <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-whatsapp-line label-icon align-middle rounded-pill fs-16 me-2"></i> 867336817</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 ms-auto">
                            <div class="mb-n5 pb-1 faq-img d-none d-xxl-block">
                                <img src="../assets/images/faq-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="row justify-content-evenly">
                <div class="col-lg-12">
                    <div class="mt-3">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-16 mb-0 fw-semibold">Sobre Nos</h5>
                            </div>
                        </div>

                        <div class="accordion accordion-border-box" id="genques-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                                        O que e o sistema de gestao de cultos ?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple their most common words.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->.
    </div>
    <!--end row-->

    {{--Fim da seccao contendo o conteudo do meu help--}}

@endsection