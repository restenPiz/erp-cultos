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
                            <li class="breadcrumb-item active">Todos Pastores</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Todos Pastores</h4>
                    </div><!-- end card header -->


                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Accordions Bordered</h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                        <label for="accordion-bordered-showcode" class="form-label text-muted">Show Code</label>
                                        <input class="form-check-input code-switcher" type="checkbox"
                                            id="accordion-bordered-showcode">
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <p class="text-muted">Use <code>custom-accordion-border</code> class to create the border at the
                                    accordion.</p>
                                <div class="live-preview">
                                    <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-success"
                                        id="accordionBordered">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="accordionborderedExample1">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#accor_borderedExamplecollapse1" aria-expanded="true"
                                                    aria-controls="accor_borderedExamplecollapse1">
                                                    What is User Interface Design?
                                                </button>
                                            </h2>
                                            <div id="accor_borderedExamplecollapse1" class="accordion-collapse collapse show"
                                                aria-labelledby="accordionborderedExample1" data-bs-parent="#accordionBordered">
                                                <div class="accordion-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                    dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                    tempor, sunt aliqua nulla assumenda shoreditch et.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="accordionborderedExample2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse2"
                                                    aria-expanded="false" aria-controls="accor_borderedExamplecollapse2">
                                                    What is Digital Marketing?
                                                </button>
                                            </h2>
                                            <div id="accor_borderedExamplecollapse2" class="accordion-collapse collapse"
                                                aria-labelledby="accordionborderedExample2" data-bs-parent="#accordionBordered">
                                                <div class="accordion-body">
                                                    Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis
                                                    leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed
                                                    consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                                                    magna mi a libero. Fusce vulputate eleifend sapien.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="accordionborderedExample3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse3"
                                                    aria-expanded="false" aria-controls="accor_borderedExamplecollapse3">
                                                    Where does it come from ?
                                                </button>
                                            </h2>
                                            <div id="accor_borderedExamplecollapse3" class="accordion-collapse collapse"
                                                aria-labelledby="accordionborderedExample3" data-bs-parent="#accordionBordered">
                                                <div class="accordion-body">
                                                    Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum
                                                    primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui
                                                    quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor,
                                                    suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none code-view">
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>

                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
        </div>
        <!-- end row -->

        {{-- Fim da view que possui o codigo fonte --}}
    @endrole
@endsection
