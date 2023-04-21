@extends('Layout.PrincipalMember')

@section('content')
    @role('member')
        {{-- Inicio do conteudo da parte de comunicado --}}
        <!-- start page title -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Adicionar Pedido de Oracao</h4>
    
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pedido de Oracao</a></li>
                                <li class="breadcrumb-item active">Adicionar Pedido de Oracao</li>
                            </ol>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <div class="col-xxl-9">
                <div class="card">
                    <form class="needs-validation" novalidate id="invoice_form" action="{{route('storeAnnouncementMember')}}" method="post">
                        @csrf
                        <div class="card-body border-bottom border-bottom-dashed p-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="profile-user mx-auto  mb-3">
                                        <label for="profile-img-file-input" class="d-block" tabindex="0">
                                            <span 
                                                class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded"
                                                style="height: 60px; width: 256px;">
                                                <img  src="../assets/images/logo-dark.png"
                                                    class="card-logo card-logo-dark user-profile-image img-fluid"
                                                    alt="logo dark">
                                                <img src="../assets/images/logo-light.png"
                                                    class="card-logo card-logo-light user-profile-image img-fluid"
                                                    alt="logo light">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4 ms-auto">
                                    
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-lg-6 col-sm-6">
                                    <label for="invoicenoInput">Comunicador</label>
                                    <div class="input-light">
                                        <select class="form-control bg-light border-0" data-choices data-choices-search-false
                                            id="choices-payment-status" name="Id_user" required>
                                            <option>...</option>
                                            @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 col-sm-6">
                                    <div>
                                        <label for="date-field">Horario</label>
                                        <input type="time" class="form-control bg-light border-0" id="date-field"
                                            data-provider="flatpickr" data-time="true" name="Hour">
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <div class="card-body p-4 border-top border-top-dashed">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <div>
                                        <label for="billingName" class="text-muted text-uppercase fw-semibold">Descricao</label>
                                    </div>
                                    <div class="mb-2">
                                        <textarea class="form-control bg-light border-0" name="Description" id="billingAddress" rows="10" placeholder="Digite o conteudo do seu comunicado..." required></textarea>
                                        <div class="invalid-feedback">
                                            Por favor digite uma descricao valida
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <input type="hidden" class="form-control bg-light border-0" value="member" name="Type">
                            
                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                <button name="submit" type="submit" class="btn btn-success"><i
                                    class="ri-check-double-line align-bottom me-1"></i> Adicionar</button>
                                {{---<a href="javascript:void(0);" class="btn btn-primary"><i
                                        class="ri-download-2-line align-bottom me-1"></i> Download Comunicado</a>--}}
                                {{---<a href="javascript:void(0);" class="btn btn-danger"><i
                                        class="ri-send-plane-fill align-bottom me-1"></i> Send Invoice</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        {{-- Fim do conteudo da parte de comunicado --}}
    @endrole
@endsection
