@extends('layouts.app')

@section('content')
<section class="panel-container">
	<div class="container">
		<div class="title">
			<h1 class="display-4">RESUMEN DE DATOS</h1>
			<p>ÚLTIMA CARGA: <strong>{{ fechaCarga($ultima_carga) }}</strong></p>
		</div>
		<div class="row" id="card-chart">
			<div class="col card-total">
				<h1 class="display-4">{{$cant_pacientes}}</h1>
				<p>Pacientes ingresados</p>
			</div>
			<div class="col card-completos">
				<h1 class="display-4">{{$cant_pacientes_completos}}</h1>
				<p>Pacientes con datos completos</p>
			</div>
			<div class="col card-incompletos">
				<h1 class="display-4">{{$cant_pacientes_incompletos}}</h1>
				<p>Pacientes con datos insuficientes</p>
			</div>
		</div>
		<br>
		<div class="row" id="card-estadistica">
			<div class="col-3 offset-md-3 card-estadistica">
				<h1 class="display-4">{{efectidad($cant_pacientes,$cant_pacientes_completos)}}</h1>
				<p>EFECTIVIDAD DE CARGA</p>
			</div>
			<div class="col-3 card-estadistica">
				<h1 class="display-4">{{efectidad($cant_pacientes,$cant_pacientes_incompletos)}}</h1>
				<p>PORCENTAJE DE ERROR</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-6 offset-md-3 border border-success">
				<h1 class="display-4"><a href="{{route('pacientes-panel')}}">Visualizar datos</a></h1>
			</div>
		</div>
	</div>
</div>
</section>
<section class="panel-container">
	<div class="container">
		<div class="row card-seguimientos">
			<div class="col-3 card-seguimiento-guia">
				Seguimiento de llamados sobre {{$cant_pacientes_completos}} pacientes
			</div>
			<div class="col card-tipos">
				<h1 class="display-4">{{$seguimientos}}</h1>
				<p>LLAMADOS REGISTRADOS</p>
			</div>
			<div class="col card-tipos">
				<h1 class="display-4">{{$seguimientos_respuesta}}</h1>
				<p>RESPUESTAS REGISTRADOS</p>
			</div>
			<div class="col card-tipos">
				<h1 class="display-4">{{$seguimientos_sin_respuesta}}</h1>
				<p>LLAMADOS SIN RESPUESTAS</p>
			</div>
		</div>
	</div>
</section>
@endsection