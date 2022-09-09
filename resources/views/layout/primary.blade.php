<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>POS</title>

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom fonts for this template-->
    <link href=" {{ asset('assets/vendor/fontawesome-free/css/all.min.css'); }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

        <!-- Custom styles for datatable jquery plugin -->
        <link href=" {{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


</head>

<body id="page-top">

    @yield('page_body')

    <!-- Bootstrap core JavaScript-->
    <script src=" {{ asset('assets/vendor/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

    <!-- Core plugin JavaScript-->
    <script src=" {{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }} "></script>

        <!-- datatable jquery plugin -->
    <script src=" {{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- datatable jquery plugin -->
    <script src=" {{ asset('assets/js/demo/datatables-demo.js') }}"></script>

    

</body>

</html>