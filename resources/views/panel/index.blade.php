@extends('layouts.app')

@section('content')
<section class="panel-container">
	<div class="container">
		<h1 class="display-4">RESUMEN DE DATOS</h1>
		<h3><strong><em>PACIENTES</em></strong></h3>
		<div class="row">
			<div class="col">
				<div class="card border-info">
					<div class="card-header text-white bg-info text-center">TOTAL</div>
					<div class="card-body">
						<p class="card-text">Pacientes ingresados: <strong>{{$cant_pacientes}}</strong></p>
					</div>
				</div>
				<p class="text-right"><small><em>Ultima carga <strong>{{ $ultimo_paciente }}</strong></em></small></p>
			</div>
			<div class="col">
				<div class="card border-success">
					<div class="card-header text-white bg-success text-center">COMPLETOS</div>
					<div class="card-body">
						<p class="card-text">Pacientes completos: <strong>{{$cant_pacientes_completos}}</strong></p>
					</div>
				</div>
				<p class="text-right"><small><em>Efectividad de carga <strong>(%)</strong></em></small></p>
			</div>
			<div class="col">
				<div class="card border-danger">
					<div class="card-header text-white bg-danger text-center">INCOMPLETOS</div>
					<div class="card-body">
						<p class="card-text">Pacientes descartados: <strong>{{$cant_pacientes_incompletos}}</strong></p>
					</div>
				</div>
				<p class="text-right"><small><em>Porcentaje de error <strong>(%)</strong></em></small></p>
			</div>
		</div>
		<hr>
	</div>
</section>
<section class="panel-container">
	<div class="container">

		<h3><strong><em>REGISTROS</em></strong></h3>
		<div class="row">
			<div class="col">
				<div class="card border-info">
					<div class="card-header text-white bg-info text-center">TOTAL</div>
					<div class="card-body">
						<p class="card-text">Seguimientos cargados: <strong>{{ $cant_seguimientos }}</strong></p>
					</div>
				</div>
				<p class="text-right"><small><em>Ultima carga <strong>{{ $ultimo_seguimiento }}</strong></em></small></p>
			</div>
			<div class="col">
				<div class="card border-success">
					<div class="card-header text-white bg-success text-center">COMPLETOS</div>
					<div class="card-body">
						<p class="card-text">Seguimientos completos: <strong>{{ $cant_seguimientos_completos }}</strong></p>
					</div>
				</div>
				<p class="text-right"><small><em>Efectividad de carga <strong>(%)</strong></em></small></p>
			</div>
			<div class="col">
				<div class="card border-danger">
					<div class="card-header text-white bg-danger text-center">INCOMPLETOS</div>
					<div class="card-body">
						<p class="card-text">Seguimientos descartados: <strong>{{ $cant_seguimientos_incompletos }}</strong></p>
					</div>
				</div>
				<p class="text-right"><small><em>Porcentaje de error <strong>(%)</strong></em></small></p>
			</div>
		</div>
	</div>
</section>
@endsection