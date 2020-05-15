@extends('layouts.app')

@section('content')
<section class="panel-container">
	<div class="container">
		<div class="title">
			<h1 class="display-4">PACIENTES</h1>
			<p>CON DATOS COMPLETOS</p>
		</div>
		<div class="row">
			<div class="col">
				<div class="title-charts">
					<h4>EDAD</h4>
					<p>Cantidad de pacientes según edad <br> <span>{{$cant}} Pacientes</span></p>
				</div>
				<div style="width: 100%">
					{!! $edadChart->container() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="title-charts">
					<h4>DISTRIBUCIÓN</h4>
					<p>Cantidad de pacientes por localidad <br> <span>{{$cant}} Pacientes</span></p>
				</div>
				<div style="width: 100%">
					{!! $localidadChart->container() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="title-charts">
					<h4>FUENTE</h4>
					<p>Origen del dato <br> <span>{{$cant}} Pacientes</span></p>
				</div>
				<div style="width: 100%">
					{!! $fuenteChart->container() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="title-charts">
					<h4>MOTIVOS DEL CONTACTO</h4>
					<p>Razón por la que se realiza el seguimiento <br> <span>{{$cant}} Pacientes</span></p>
				</div>
				<div style="width: 100%">
					{!! $motivoChart->container() !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('script')
<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
{!! $edadChart->script() !!}
{!! $localidadChart->script() !!}
{!! $motivoChart->script() !!}
{!! $fuenteChart->script() !!}
@endsection