@section('title', 'Webinar Record')
@extends('layouts.master')
@section('menu')
    @extends('sidebar.viewrecord')
@endsection
@section('content')
    <div id="main">
        @include('headers.header')
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Customized Engagement Record</h3>
                        {{-- <p class="text-subtitle text-muted">Budget information list</p> --}}
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            
            {{-- message --}}
            {!! Toastr::message() !!}

            <section class="section">
                <div class="card">
                    {{-- <div class="card-header">
                        Customized Engagement Record
                    </div> --}}
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr class="text-dark">
                                    <th>ID NUMBER</th>
                                    <th>STATUS</th>
                                    <th>COMPANY NAME</th>
                                    <th width="10%">ENGAGEMENT TYPE</th>
                                    <th width="15%">WEBINAR TITLE</th>
                                    <th>NUMBER OF PAX</th>
                                    <th>SCHEDULED DATES</th>
                                    <th>SCHEDULED TIME</th>
                                    <th class="text-center">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        {{-- <td class="id fw-bold">{{ ++$key }}</td> --}}
                                        <td class="id fw-bold">{{ $item->cstmzd_eng_form_id }}</td>
                                        <td>
                                            <span id="status" class="badge">{{ $item->status }}</span>
                                            {{-- Automatic change the status color --}}
                                            <script>
                                                $( ".badge" ).each(function() {
                                                    if($(this).html() === 'Trial'){
                                                        $(this).addClass( "bg-info" );                                                    
                                                    }
                                                    else if($(this).html() === 'Confirmed'){
                                                        $(this).addClass( "bg-primary" );                                                    
                                                    }
                                                    else if($(this).html() === 'In-progress'){
                                                        $(this).addClass( "bg-warning" );                                                    
                                                    }
                                                    else if($(this).html() === 'Completed'){
                                                        $(this).addClass( "bg-success" );                                                    
                                                    }
                                                    else if($(this).html() === 'Lost'){
                                                        $(this).addClass( "bg-danger" );                                                    
                                                    }
                                                });
                                            </script>
                                        </td>
                                        <td class="name fw-bold">{{ $item->client }}</td>
                                        <td class="name fw-bold">{{ $item->customized_type }}</td>
                                        <td class="email fw-bold">{{ $item->engagement_title }}</td>
                                        <td class="fw-bold">{{ $item->pax_number }}</td>
                                        <td class="fw-bold">{{ Str::limit(str_replace (array('[', '"', ']'), ' ' , $item->program_dates), '15'); }}</td>
                                        <td class="fw-bold">{{ date('h:i a',strtotime($item->program_start_time)) }}</td>
                                        <td class="text-center fw-bold">
                                            <a href="">
                                                <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                            </a>
                                            <a href="">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a href="{{ url('delete/' . $item->id) }}"
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
        </div>
        <!------------ FOOTER ------------>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-end">
                    <p><script>document.write(new Date().getFullYear());</script> Copyright &copy MGT-STRAT</p>
                </div>
                {{-- <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="#">MGT-STRAT</a></p>
                </div> --}}
            </div>
        </footer>
    <!------------ END OF FOOTER ------------>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

