@section('title', 'Webinar Record')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
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
                                    <th>BUDGET NUMBER</th>
                                    <th>STATUS</th>
                                    <th>COMPANY NAME</th>
                                    <th width="10%">ENGAGEMENT TYPE</th>
                                    <th width="15%">WEBINAR TITLE</th>
                                    <th>NUMBER OF PAX</th>
                                    <th>SCHEDULED DATES</th>
                                    <th>SCHEDULED TIME</th>
                                    <th>DATE ADDED</th>
                                    <th class="text-center">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td hidden class="ids">{{ $item->id }}</td>
                                        <td hidden class="estimate_number">{{ $item->cstmzd_eng_form_id }}</td>
                                        {{-- <input type="hidden" name="id" data-id="{{ $item->id }}">
                                        <input type="hidden" name="cstmzd_eng_form_id" cstmzd-id="{{ $item->cstmzd_eng_form_id }}"> --}}
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
                                        <td class="fw-bold">{{ Str::limit(str_replace (array('[', '"', ']'), ' ' , $item->program_dates),'14') }}</td>
                                        <td class="fw-bold">{{ Str::limit(str_replace (array('[', '"', ']'), ' ' , $item->program_start_time),'10') }}</td>
                                        {{-- <td class="fw-bold">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td> --}}
                                        <td class="fw-bold">{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString()}}</td>
                                        <td class="text-center fw-bold">
                                            <a href="">
                                                <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                            </a>
                                            <a href="{{ url('form/customizedEngagement/detail/' . $item->cstmzd_eng_form_id) }}">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            {{-- <a href="{{ url('delete/' . $item->id) }}"
                                                onclick="return confirm('Are you sure to want to delete it?')"><span
                                                    class="badge bg-danger"><i class="bi bi-trash"></i></span>
                                            </a> --}}
                                            <a href="#" class="delete"  data-toggle="modal" data-target="#delete_estimate">
                                                <span class="badge bg-danger">
                                                    <i class="bi bi-trash"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Delete Estimate Modal -->
                                    <div class="modal custom-modal fade" id="delete_estimate" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="mb-3 text-center">Delete Customized Engagement</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-header">
                                                        <h5 class="text-center mx-5">Are you sure want to delete <br><b>{{$item->client}}</b>?</h5>
                                                    </div>
                                                    <form action="{{ route('deleteRecord') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" class="e_id" value="">
                                                        <input type="hidden" name="cstmzd_eng_form_id" class="estimate_number" value="">
                                                        <div class="row modal-footer">
                                                            <div class="col-2">
                                                                <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>    
                                                            </div>
                                                            <div class="col-2">
                                                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</a>    
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Delete Estimate Modal -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            {{-- <!-- Delete Estimate Modal -->
            <div class="modal custom-modal fade" id="delete_estimate" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3 class="text-center">Delete Customized Engagement</h3>
                                <p class="text-center">Are you sure want to delete?</p>
                            </div>
                            <form action="{{ route('deleteRecord') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" class="e_id" value="">
                                <input type="hidden" name="cstmzd_eng_form_id" class="estimate_number" value="">
                                <div class="row justify-content-center justify-content-around">
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                    </div>
                                    <div class="col-2">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Estimate Modal --> --}}
        </div>
        <!------------ FOOTER ------------>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-end">
                    <p><script>document.write(new Date().getFullYear());</script> Copyright &copy MGT-STRAT</p>
                </div>
            </div>
        </footer>
    <!------------ END OF FOOTER ------------>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).on('click','.delete',function()
    {
        var _this = $(this).parents('tr');
        $('.e_id').val(_this.find('.ids').text());
        $('.estimate_number').val(_this.find('.estimate_number').text());
    });
</script>

{{-- <script>
    $(".delete").on("click", function(e){
        var id = $(this).attr("data-id");
        var cstmzdId = $(this).attr("cstmzd-id");
        $.ajax({ 
            url: "{{ route('deleteRecord') }}",
            data: {"id": id,"cstmzd_eng_form_id": cstmzdId, "_token": "{{ csrf_token() }}"},
            type: 'post',
            success: function(result){
            toastr.warning('Data deleted successfully','Success');
            }
        });
    });
</script> --}}

