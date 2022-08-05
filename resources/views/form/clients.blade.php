@section('title', 'CLIENTS')
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.clients_side_bar')
@endsection
@section('content')
    <div id="main">
        @include('headers.header')
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>CLIENTS</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CLIENTS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
@include('form.components.clients_register.modal')

            {{-- message --}}
            {!! Toastr::message() !!}
            <section class="section">
                <div class="card">
                    <br>
                    <div class="card-header col-12 d-flex justify-content-left">
                        <button type="" class="btn btn-primary me-1 mb-1" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-plus-square-dotted"> New Client</i></button>
                    </div>
                    {{-- <div class="card-header">
                        User Datatable
                    </div> --}}
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Year+Month+Sales</th>
                                    <th>Company Name</th>
                                    <th>Old ID</th>
                                    <th>Sales Pax</th>
                                    <th>Class</th>
                                    <th>Industry</th>
                                    <th>Old/ New</th>
                                    <th>First Engagement</th>
                                    <th>Second Engagement</th>
                                    <th class="text-center">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $client)
                                    <tr>
                                        <td class="id">{{ ++$key }}</td>
                                        <td class="name">{{ $client->yr_mnth_sales }}</td>
                                        <td class="name">
                                            {{$client->company_name}}
                                        </td>
                                        <td class="name">
                                            {{$client->old_id}}
                                        </td>
                                        <td class="name">
                                            {{$client->sales_pax}}
                                        </td>
                                        <td class="name">
                                            {{$client->client_class}}
                                        </td>
                                        <td class="status">{{$client->industry}}</td>
                                        <td class="status">{{$client->old_new}}</td>
                                        <td class="status">{{$client->first_eng}}</td>
                                        <td class="status">{{$client->second_eng}}</td>
                                        <td class="text-center">
                                            <a href="">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a href="{{ url('deleteClients/' . $client->id) }}"
                                                onclick="return confirm('Are you sure to want to delete it?')"><span
                                                    class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


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
    <script type="text/javascript" src="/js/MultiStep.js"></script>
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
@endsection
