@extends('Layout.PrincipalMember')
@section('content')

    {{--Inicio da seccao contendo o conteudo do meu help us--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-0 bg-soft-success mx-n4 mt-n4 border-top">
                <div class="px-4">
                    <div class="row">
                        <div class="col-xxl-5 align-self-center">
                            <div class="py-4">
                                <h4 class="display-6 coming-soon-text">Informações</h4>
                                <p class="text-success fs-15 mt-3">Nesta seccao tem algumas informacoes sobre o sistema!</p>
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
                                        Sistema de Gestao de Cultos
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        Este é um sistema de gestão de cultos, que tem como objetivo fazer a gestão de:
                                        <ul>
                                            <li>Cultos</li>
                                            <li>Património da igreja</li>
                                            <li>Membros</li>
                                            <li>Ficheiros</li>
                                            <li>Departamentos</li>
                                            <li>Filiais</li>
                                        </ul> 
                                         O sistema possui links na parte lateral esquerda que permitem a rápida navegação pelo sistema.

                                        O sistema possui alguns links que estão ocultos, que vão aparecer quando clicares sobre a parte da tua foto!

                                        Caso isso não tenha te ajudado, contacte o administrador para que ele possa te esclarecer a dúvida com mais precisão!<br><br>

                                        Obrigado...</div>
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