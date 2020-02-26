<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>.:: Admin ::.</title>

    <link type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{asset('vendor/site/images/favicon.ico')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('vendor/argon-dash/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('vendor/argon-dash/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">

    @yield('css')
    @yield('style')
</head>

<body >

<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{route('osc.index')}}">
            <img src="{{asset('vendor/site/images/coopvidapreta_logo.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->


        <ul class="nav align-items-center d-md-none">


        </ul>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">

            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{route('osc.index')}}">
                        <img src="{{asset('vendor/site/images/coopvidapreta_logo.png')}}" class="navbar-brand-img" alt="...">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>


            <!-- Navigation -->

            @include('admin.partes.menu')

        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->




            <!-- User -->
			<ul class="navbar-nav align-items-center d-none d-md-flex">



            </ul>



        </div>

    </nav>

    <!-- Header -->
    @yield('cabecalho')


    <!-- Page content -->
    <div class="container-fluid mt--7">
        @yield('conteudo')





        <!-- Footer -->
        <footer class="footer">
            <!-- <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2019 <a href="" class="font-weight-bold ml-1 text-success font-weight-bold 900" >COOPVIVA</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
							<a href="http://simeuquero.org/" class="nav-link" target="_blank">SIM EU QUERO</a>

                        </li>
                        <li class="nav-item">
                            <a href="http://www.redeconexao.com.br/" class="nav-link" target="_blank">Rede de Conexão</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://www.agenda2030.com.br/" class="nav-link" target="_blank">Agenda 2030</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/termo-de-uso')}}" class="nav-link" >Termo de Uso</a>
                        </li>
                    </ul>
                </div>
            </div> -->
        </footer>
    </div>
</div>

<script src="{{ asset('vendor/argon-dash/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/argon-dash/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
<!-- Argon JS -->
<script src="{{ asset('vendor/argon-dash/assets/js/argon.js?v=1.0.0') }}"></script>
<script src="{{ asset('js/dropzone.js') }}"></script>
<script src="{{asset('js/jquery.mask.min.js')}}"> </script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
    </script>

<script>
    $(document).ready(function() {
        $('#telefone').mask('(99) 9 9999-9999');
        $("#cpf").mask('000.000.000-00');
        $("#cnpj").mask('00.000.000/0000-00');
        $("#cep").mask('00.000-000');
        $("#ano").mask('0000');
        $("#num").mask('0000');
        $("#op").mask('000');




    });
</script>

<script>
    $('.js-checkbox').on('click', function(e) {
        var route = $(this).data('route');
        $.ajax({
                url: route,
                type: 'get',
            })
            .done(function(msg) {
                return true;
            })
    });
</script>

<script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>
@include('sweet::alert')
@yield('js')
</body>

</html>
