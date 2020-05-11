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
						<p class="card-text">Registros ingresados: </p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card border-success">
					<div class="card-header text-white bg-success text-center">COMPLETOS</div>
					<div class="card-body">
						<p class="card-text">Registros completos: </p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card border-danger">
					<div class="card-header text-white bg-danger text-center">INCOMPLETOS</div>
					<div class="card-body">
						<p class="card-text">Registros descartados: </p>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div>
</section>
@endsection