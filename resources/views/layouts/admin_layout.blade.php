<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App Url -->
    <meta name="app-url" content="{{ url('/') }}">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/back-end/img/favicon.png')}}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/plugins/fontawesome-free/css/all.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTable-->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/plugins/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/plugins/select2/css/select2.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/plugins/summernote/summernote-bs4.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/css/adminlte.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('/')}}assets/back-end/css/custom.css">
    {{--    <link rel="stylesheet" href="{{asset('/')}}asset/css/custom-media.css">--}}
    @yield('style')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
@include('includes.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('includes.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Main Footer -->
    @include('includes.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/')}}assets/back-end/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}assets/back-end/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Datepicker -->
<script src="{{asset('/')}}assets/back-end/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- jquery-validation -->
<script src="{{asset('/')}}assets/back-end/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('/')}}assets/back-end/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{asset('/')}}assets/back-end/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTables -->
<script src="{{asset('/')}}assets/back-end/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}assets/back-end/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/')}}assets/back-end/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}assets/back-end/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('/')}}assets/back-end/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- Select2 -->
<script src="{{asset('/')}}assets/back-end/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="{{asset('/')}}assets/back-end/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}assets/back-end/js/adminlte.min.js"></script>
{{--Ajax csrf token--}}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    <!-- Navbar Active -->
    /* add active class and stay opened when selected */
    var url = window.location;

    // For sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function () {
        return this.href == url;
    }).addClass('active');

    // for treeview
    $('ul.nav-treeview a').filter(function () {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

    /* Bootstrap switch */
    $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

</script>
<!-- Sweetalert 2 config -->
<script type="text/javascript">
    $(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: "right",
            showConfirmButton: false,
            timer: 5000
        });
        @if(Session::has('success'))
        Toast.fire({icon: 'success', title: `{{Session::get('success')}}`})
        @elseif(Session::has('warning'))
        Toast.fire({icon: 'warning', title: `{{Session::get('warning')}}`})
        @elseif(Session::has('error'))
        Toast.fire({icon: 'error', title: `{{Session::get('error')}}`})
        @elseif(Session::has('info'))
        Toast.fire({icon: 'info', title: `{{Session::get('info')}}`})
        @endif
    });
</script>
<!-- Bootstrap Switch config -->
<script>
    $(function () {
        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    });
</script>


<script>
    $(function () {
        // Summernote
        $('.textarea').summernote({
            height: 140,
        })
    })
</script>

@yield('script')
</body>
</html>
