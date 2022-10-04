@section('title', 'Sales Report')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
@extends('layouts.master')
<style>
    .pbi-iframe {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
    }

    .pbi-iframe > button {
        position:relative;
        float: right;
        /* right:10px;
        bottom:35px; */
        transition: 0.5s;
        margin: 0px 15px 0px;
    }

    .responsive-iframe {
        position: absolute;
        /* position: relative; */
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
</style>
@section('menu')
    @extends('sidebar.report')
@endsection
@section('content')
    <div id="main">
        {{-- <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header> --}}
        @include('headers.header')
        <div class="page-heading">
            @if ('sales-report' == request()->path())
            <h3 class="text-uppercase">Sales Report Dashboard</h3>
            @elseif ('people-and-culture' == request()->path())
            <h3 class="text-uppercase">People and Culture Dashboard</h3>
            @elseif ('cash-position-report' == request()->path())
            <h3 class="text-uppercase">Cash Position Report Dashboard</h3>
            @elseif ('consultant-revenue-report' == request()->path())
            <h3 class="text-uppercase">Consultant Revenue Report Dashboard</h3>
            @elseif ('peer-dope-report' == request()->path())
            <h3 class="text-uppercase">Peer Dope Report Dashboard</h3>
            @endif
        </div>
        {{-- message --}}
        {!! Toastr::message() !!}
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    @if ('sales-report' == request()->path())
                    {{-- POWERBI REPORT 1 --}}
                    {{-- <div class="col-12 col-lg-12 bg-white">
                        <div class="d-flex justify-content-start">
                            <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport1'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                        </div>
                    </div> --}}

                    <div class="pbi-iframe">
                        <iframe title="MgtStrat Sales Report Dashboard" id="embededReport1" class="responsive-iframe" src="https://app.powerbi.com/reportEmbed?reportId=91c53520-da62-4365-9271-9e43e3fe0375&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWVhc3QtYXNpYS1iLXByaW1hcnktcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D" frameborder="0" allowFullScreen="true"></iframe>
                        <button class="btn btn-dark btn-sm px-1 mx-3" onclick="goFullscreen('embededReport1'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                    </div>
                    <br>
                    @endif

                    @if ('people-and-culture' == request()->path())
                    {{-- POWERBI REPORT 2 --}}
                    {{-- <div class="col-12 col-lg-12 bg-white">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport2'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                        </div>
                    </div> --}}

                    <div class="pbi-iframe">
                        <iframe title="MgtStrat Sales Report Dashboard" id="embededReport2" class="responsive-iframe" src="https://app.powerbi.com/reportEmbed?reportId=bd4078f0-709b-42a6-aecb-a0e2cab04a76&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f" frameborder="0" allowFullScreen="true"></iframe>
                        {{-- FULLSCREEN BUTTON --}}
                        <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport2'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                    </div>
                    @endif

                    @if ('cash-position-report' == request()->path())
                    {{-- POWERBI REPORT 3 --}}
                    {{-- <div class="col-12 col-lg-12 bg-white">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport3'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                        </div>
                    </div> --}}

                    <div class="pbi-iframe">
                        <iframe title="MgtStrat Sales Report Dashboard" id="embededReport3" class="responsive-iframe" src="https://app.powerbi.com/reportEmbed?reportId=62cab871-abe5-4f53-b6ff-b1ac48d59871&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f" frameborder="0" allowFullScreen="true"></iframe>

                        {{-- FULLSCREEN BUTTON --}}
                        <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport3'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                    </div>
                    @endif

                    @if ('consultant-revenue-report' == request()->path())
                    {{-- POWERBI REPORT 4 --}}
                    {{-- <div class="col-12 col-lg-12 bg-white">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport4'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                        </div>
                    </div> --}}

                    <div class="pbi-iframe">
                        <iframe title="MgtStrat Sales Report Dashboard" id="embededReport4" class="responsive-iframe" src="https://app.powerbi.com/reportEmbed?reportId=d507cf40-4da4-4edc-80fc-fb942de12ca2&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f" frameborder="0" allowFullScreen="true"></iframe>

                        {{-- FULLSCREEN BUTTON --}}
                        <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport4'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                    </div>
                    @endif

                    @if ('peer-dope-report' == request()->path())
                    {{-- POWERBI REPORT 5 --}}
                    {{-- <div class="col-12 col-lg-12 bg-white">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport5'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                        </div>
                    </div> --}}
                    <div class="pbi-iframe">
                        <iframe title="MgtStrat Sales Report Dashboard" id="embededReport5" class="responsive-iframe" src="https://app.powerbi.com/reportEmbed?reportId=fccd1bb6-1bfe-47f4-b31c-5200a18145db&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f" frameborder="0" allowFullScreen="true"></iframe>

                        {{-- FULLSCREEN BUTTON --}}
                        <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embededReport4'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                    </div>
                    @endif
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card-body">
                        <!--Basic Modal -->
                        <div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel1">User Profile</h5>
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Full Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" name="fullName"
                                                                value="{{ Auth::user()->name }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-person"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Email Address</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="email" class="form-control" name="email"
                                                                value="{{ Auth::user()->email }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-envelope"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Mobile Number</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="number" class="form-control"
                                                                value="{{ Auth::user()->phone_number }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-phone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Status</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                                value="{{ Auth::user()->status }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-bag-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Role Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                                value="{{ Auth::user()->role_name }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-exclude"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end user profile modal --}}
                </div>
            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; MGT-STRAT</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="#">MGT-STRAT</a></p>
                </div>
            </div>
        </footer>
    </div>

    <script>
    // var input = document.getElementById("main");
    // input.addEventListener("keypress", function(event) {
    // if (event.key === "Enter") {
    //     event.preventDefault();
    //     document.getElementById("embededReport1").click();
    // }
    // });
    // function myFunction() {
    //     alert("You pressed a key inside the input field");
    // }
    function goFullscreen(id) {
        var element = document.getElementById(id);
        if (element.mozRequestFullScreen) {
          element.mozRequestFullScreen();
        } else if (element.webkitRequestFullScreen) {
          element.webkitRequestFullScreen();
        }
    }
    </script>
@endsection
