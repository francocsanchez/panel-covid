@extends('layouts.app')

@section('content')
<section class="panel-container">
	<div class="container">
		<h1 class="display-4">PACIENTES</h1>
		<div class="row">
			<div class="col">
				<h4><em>EDAD</em></h4>
				<div style="width: 100%">
					{!! $edadChart->container() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h4><em>LOCALIDAD</em></h4>
				<div style="width: 100%">
					{!! $localidadChart->container() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h4 class="text-center"><em>MOTIVOS DE CONTAGIO</em></h4>
				<div style="width: 100%">
					{!! $motivoChart->container() !!}
				</div>
			</div>
			<div class="col-6">
				<h4 class="text-center"><em>FUENTE</em></h4>
				<div style="width: 100%">
					{!! $fuenteChart->container() !!}
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