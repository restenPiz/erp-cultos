@extends('Layout.Index')
@section('content')
     <!-- start page title -->
     
     <div class="row">
        <div class="col-lg-12">
            <div class="card {{--mt-n4 mx-n4--}}">
                <div class="{{---bg-soft-warning--}}bg-primary">
                    <div class="card-body pb-0 px-4">
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="row align-items-center g-3">
                                    <div class="col-md-auto">
                                        <div class="avatar-md">
                                            <div class="avatar-title bg-white rounded-circle">
                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xs">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div>
                                            <h4 class="fw-bold" style="color:white">ERP - Cultos</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div style="color:white"><i class="ri-building-line align-bottom me-1" style="color:white"></i> MICEC</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#project-overview" role="tab">
                                    Inicio
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content text-muted">
                <div class="tab-pane fade show active" id="project-overview" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted">
                                        <h6 class="mb-3 fw-semibold text-uppercase">Sobre nos
                                        </h6>
                                        <p>
                                            Somos cooperadores de Deus, isto e, socios de Deus(1 Cr.3:9);(Col.4:11).</p>
                                        <ul class="ps-4 vstack gap-2">
                                            <li>A nossa visao: </li>
                                            <p>
                                                Proclamar o evangelio eterno do reino de Deus, em todas as nacoes, lingua, tribos e povos; edificando igrejas fortes, onde cada membro e um 
                                                ministro do evangelio e cada ministro uma igreja forte(Apocalipse 14:6-7);(Rm.8:37, Tm.2:2)</p>
                                            <li>A nossa missao:</li>
                                            <p>1.Evangelizar aos nao alcancados ou perdidos(Rm.15:20)<br>
                                                2.Ensinar a guardar e obdecer todas as coisas que jesus ordenou(Mt.28:19-20)<br>
                                                3.Treinar e capacitar lideres para obra(2 Tm.2:2)<br>
                                                4.Fazer discipulos de cristo em todas as nacoes</p>
                                            <li>O nosso proposito: MT.22:37-40; MT.28:19-20</li>
                                            <p>
                                                1.Adorar a Deus<br>
                                                2.Ministrar a graca de Deus uns aos outros<br>
                                                3.Evangelizar<br>
                                                4.Baptizar os convertidos<br>
                                                5.Fazer discipulos de cristo,isto e, ensinar a guardar todas as coisas;</p>
                                            <li>
                                                a nossa estrategia:</li>
                                                <p>
                                                    1.Fazer tudo e para todos(Usar todos os meios e metodos para alcancar os perdidos) 1 Cor.9:22<br>
                                                    2.Visao Celular(Comecar a partir de uma celula ou grupo familiar usando casas e outros lugrares) Atos 20:20<br>
                                                    3.Capacitar e treinar lideres para tambem ensinar os outros 2 Tm.2:2
                                                </p>
                                            <li>
                                                Caracteristica:</li>
                                                <p>
                                                    1.Somos uma igreja forte e com bom fundamento. 1 TM.6:12, 1 Cor.3:10-12<br>
                                                    2.Somos uma igreja de boa lideranca. 1 TM.3:1-13, TITO.1:5-6<br>
                                                    3.Somos uma igreja de boa doutrina. Prov.4:2, 1 TM.4:6<br>
                                                    4.Somos uma igreja de vida pura. TITOS.3:14, 2 CRONICA.32:32, MT.5:16, MT.6:1, EF.2:10, 5:10</p>
                                        </ul>

                                        <div class="pt-3 border-top border-top-dashed mt-4">
                                            <div class="row">

                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Elaborado Por :</p>
                                                        <h5 class="fs-15 mb-0">Apostolo Luis Chimbia e Sua esposa.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                        </div>
                        <!-- ene col -->
                        <div class="col-xl-3 col-lg-4">
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header align-items-center d-flex border-bottom-dashed">
                                    <h4 class="card-title mb-0 flex-grow-1">Todos Membros</h4>
                                </div>

                                <div class="card-body">
                                    <div data-simplebar style="height: 235px;" class="mx-n3 px-3">
                                        <div class="vstack gap-3">
                                            @foreach ($users as $user)
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <img src="{{$user->File}}" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">{{$user->name}} {{$user->surname}}</a></h5>
                                                </div>
                                            </div>
                                            @endforeach
                                           <!-- end member item -->
                                        </div>
                                        <!-- end list -->
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection