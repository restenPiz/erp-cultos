@extends('Layout.Index')
@section('content')
      <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Erp-Cultos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paginas</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                <img src=" alt="" class="profile-wid-img" />
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        @if(Auth::user()->gender=='Masculino')
                        <img class="img-thumbnail rounded-circle" alt="user-img"
                            src="../Ficheiros/homem.jpg">
                        @elseif(Auth::user()->gender=='Femenino')
                        <img class="img-thumbnail rounded-circle" alt="user-img"
                            src="../Ficheiros/mulher.jpg">
                        @else
                        <img class="img-thumbnail rounded-circle" alt="user-img"
                        src="../Ficheiros/dif.jpg">
                        @endif
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ Auth::user()->name }}</h3>
                        <p class="text-white-75">{{ Auth::user()->userType }}</p>
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Inicio</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-3">

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Info</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Nome Completo :</th>
                                                            <td class="text-muted">{{Auth::user()->name}} {{Auth::user()->surname}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Contacto :</th>
                                                            <td class="text-muted">{{Auth::user()->contact}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                            <td class="text-muted">{{Auth::user()->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Funcao :</th>
                                                            <td class="text-muted">{{Auth::user()->function}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Data de Inicio</th>
                                                            <td class="text-muted">{{Auth::user()->created_at}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                    <!--end card-->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Sobre Nos</h5>
                                            <p>
                                                <ul>
                                                <li>A nossa identidade: Quem somos nos?</li><br>
                                                
                                                Somos cooperadores de Deus, isto e, socios de Deus(1 Cr.3:9);(Col.4:11).<br><br>
                                                
                                                <li>A nossa visao: </li><br>
                                                
                                                Proclamar o evangelio eterno do reino de Deus, em todas as nacoes, lingua, tribos e povos; edificando igrejas fortes, onde cada membro e um 
                                                ministro do evangelio e cada ministro uma igreja forte(Apocalipse 14:6-7);(Rm.8:37, Tm.2:2)<br>
                                                
                                                <li>A nossa missao:</li><br>
                                                
                                                    1.Evangelizar aos nao alcancados ou perdidos(Rm.15:20)<br>
                                                    2.Ensinar a guardar e obdecer todas as coisas que jesus ordenou(Mt.28:19-20)<br>
                                                    3.Treinar e capacitar lideres para obra(2 Tm.2:2)<br>
                                                    4.Fazer discipulos de cristo em todas as nacoes<br>
                                                
                                                <li>O nosso proposito: MT.22:37-40; MT.28:19-20</li><br>
                                                    
                                                    1.Adorar a Deus<br>
                                                    2.Ministrar a graca de Deus uns aos outros<br>
                                                    3.Evangelizar<br>
                                                    4.Baptizar os convertidos<br>
                                                    5.Fazer discipulos de cristo,isto e, ensinar a guardar todas as coisas;<br><br>
                                                
                                                <b>Elaborado por apostolo Luis Chimbia e Sua esposa.</b>
                                            </ul>
                                        </p>
                                            
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->
                                </div>
                            </div>
                        </div>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection