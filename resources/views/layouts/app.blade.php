<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Buku Tamu</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ url('sb-admin/assets/favicon.ico') }}">
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('sb-admin/css/styles.css') }}" rel="stylesheet" />

    {{-- jQuery search Name --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <style>
        .select2-container .select2-selection--single {
            height: calc(1.5em + .75rem + 2px) !important;
            padding: .375rem .75rem !important;
            font-size: 1rem !important;
            line-height: 1.5 !important;
            color: #000000 !important;
            background-color: #fff !important;
            background-clip: padding-box !important;
            border: 1px solid #ced4da !important;
            border-radius: .25rem !important;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 1.5 !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: calc(1.5em + .75rem + 2px) !important;
            right: 10px !important;
        }
    </style>
    
    
    
    
</head>

<body class="d-flex flex-column min-vh-100">

    @include('layouts.navbar')
    @yield('body')

    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; IT Development 2024</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('sb-adminjs/scripts.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
