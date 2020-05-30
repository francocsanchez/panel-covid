<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>Centro de Datos - Provincia de Río Negro</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}"/>

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
	<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />
	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
	<link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" class="dashboard-analytics" />
	<link href="{{ asset('css/components/custom-counter.css') }}" rel="stylesheet" type="text/css">
	<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

	<!--  BEGIN CUSTOM STYLE FILE  -->
	<link href="{{ asset('css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/components/custom-carousel.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/components/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/components/tabs-accordian/custom-accordions.css') }}" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body class="dashboard-analytics">

	@include('layouts.navbar')

	<div class="main-container" id="container">

		@include('layouts.sidebar')

		@yield('content')

	</div>

	<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
	<script src="{{ asset('js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	<script src="{{ asset('js/custom.js') }}"></script>
	<!-- END GLOBAL MANDATORY SCRIPTS -->

	<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
	<script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
	<script src="{{ asset('js/dashboard/dash_1.js') }}"></script>
	<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ asset('plugins/counter/jquery.countTo.js') }}"></script>
	<!-- END PAGE LEVEL SCRIPTS -->

	<!--  BEGIN CUSTOM SCRIPTS FILE  -->
	<script src="{{ asset('js/components/custom-counter.js') }}"></script>
	<!--  END CUSTOM SCRIPTS FILE  -->

	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels" charset="utf-8"></script>
	@yield('script')
</body>
</html>