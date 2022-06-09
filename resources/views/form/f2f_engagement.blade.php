@section('title', 'F2F Engagement Form')
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.form_staff')
@endsection
@section('content')
    <div id="main">
        @include('headers.header')
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>F2F Engagement</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">F2F Engagement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <ul class="nav nav-pills mb-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">Information</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Engagement Fees</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">Engagement Cost</button>
            </li>
        </ul>
        <form class="form form-horizontal" action="{{ route('form/save') }}" method="POST">
            @csrf
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    {{-- message --}}
                    {!! Toastr::message() !!}

                    {{-- card body --}}
                    <div class="col-12">
                        {{-- card --}}
                        <div class="card">
                            {{-- card content --}}
                            <div class="card-content">
                                {{-- card body --}}
                                <div class="card-body">

                                    {{-- INFORMATION --}}
                                    @include('form.components.f2f_engagement.f2f_information')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    {{-- card body --}}
                    <div class="col-12">
                        {{-- card --}}
                        <div class="card">
                            {{-- card content --}}
                            <div class="card-content">
                                {{-- card body --}}
                                <div class="card-body">

                                    {{-- ENGAGEMENT FEES --}}
                                    @include('form.components.f2f_engagement.f2f_engagementFees')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    {{-- card body --}}
                    <div class="col-12">
                        {{-- card --}}
                        <div class="card">
                            {{-- card content --}}
                            <div class="card-content">
                                {{-- card body --}}
                                <div class="card-body">

                                    {{-- ENGAGEMENT FEES --}}
                                    @include('form.components.f2f_engagement.f2f_engagementCost')


                                    {{-- <div class="col-12 d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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

    {{-- F2F ENGAGEMENT SCRIPT --}}
    <script type="text/javascript" src="/js/f2fform.js"></script>
@endsection
