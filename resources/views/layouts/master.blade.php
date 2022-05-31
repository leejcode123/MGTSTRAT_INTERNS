<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGT-STRAT | @yield('title')</title>
    {{-- <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.png') }}"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
    {{-- <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.svg') }}" type="image/x-icon"> --}}
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/simple-datatables/style.css') }}">

    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/3557c72a00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- Select2 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



</head>
<style>
    .form-group[class*=has-icon-].has-icon-left .form-select {
        padding-left: 2.5rem;
    }

    .form-group[class*=has-icon-] .form-control-icon {
    position: absolute;
    top: 5%;
    transform: translateY(35%);
    padding: 0 0.6rem;
    }

    .required:after {
    content:" *";
    color: red;
    }

    label {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display:block;
    }

    .input-table {
        border:0;
        border-bottom: 2px solid #808080; 
        border-radius:0px;
    }

    .title-th:nth-child(1),
    .title-th:nth-child(6),
    .title-th:nth-child(7)
    {
        border:3px solid black;
    }

    .title-middle:nth-child(2),
    .title-middle:nth-child(3),
    .title-middle:nth-child(4),
    .title-middle:nth-child(5)
    {
        border:3px solid black;
        border-right: none;
        border-left: none; 
    }

    .title:nth-child(1),
    .title:nth-child(3),
    .title:nth-child(4)
    {
        border:3px solid black;
        border-top:none;
        border-bottom: none;
    }

    .total-td:nth-child(6),
    .total-td:nth-child(7), 
    .total-td:nth-child(8) 
    {
        border:3px solid black;
        border-top:none;
        border-bottom: none;
    }

    .overall-total-start:nth-child(1)
    {
        border:3px solid black;
    }

    .overall-total-middle:nth-child(2),
    .overall-total-middle:nth-child(3),
    .overall-total-middle:nth-child(4),
    .overall-total-middle:nth-child(5)
    {
        border:3px solid black;
        border-right:none;
        border-left:none;
    }

    .overall-total-end:nth-child(6),
    .overall-total-end:nth-child(7)
    {
        border:3px solid black;
    }

    .profit-forecast-start:nth-child(1)
    {
        border:3px solid black;
        border-right: none;
    }

    .profit-forecast-middle:nth-child(2),
    .profit-forecast-middle:nth-child(3),
    .profit-forecast-middle:nth-child(4),
    .profit-forecast-middle:nth-child(5),
    .profit-forecast-middle:nth-child(6)
    {
        border:3px solid black;
        border-right: none;
        border-left: none;
    }

    .profit-forecast-end:nth-child(7)
    {
        border:3px solid black;
        border-left: none;
    }

    td.tbl-engmt-cost{
        background-color: rgba(146, 146, 146, 0.727)
    }
    input.text-center {
        text-align: center;
    }

    input.yellow-input[type="number"], textarea {

    background-color : #FFFED0; 

    }
    
</style>

<body id="body">
    <div id="app">
        @yield('menu')
        {{-- content main page --}}
        @yield('content')

    </div>

    <script src="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ URL::to('assets/js/main.js') }}"></script>
    <script src="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    {{-- sweet alert popup message --}}
    @include('sweetalert::alert')



</body>

</html>
