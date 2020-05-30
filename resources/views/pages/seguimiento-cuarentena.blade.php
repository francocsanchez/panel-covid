@extends('layouts.app-2')

@section('content')
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="row layout-top-spacing">

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-account-invoice-two">
					<div class="widget-content">
						<div class="account-box">
							<div class="info">
								<h2 class="verde-oscuro font-weight-bold">Seguimiento de Cuarentena</h2>
								<h3 class="verde-oscuro font-weight-light">Última Carga: {{ fechaCarga($ultima_carga) }}</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="row widget-statistic">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="widget widget-one_hybrid widget-seguimiento">
							<div class="widget-heading">
								<div class="simple--counter-container mt-3">

									<div class="counter-container">
										<div class="counter-content-4">
											<h1 class="s-counter121 s-counter-6">{{$cant_pacientes}}</h1>
										</div>
										<p class="s-counter-text-7 mayus white">PACIENTES INGRESADOS</p>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="widget widget-one_hybrid widget-seguimiento">
							<div class="widget-heading">
								<div class="simple--counter-container mt-3">

									<div class="counter-container">
										<div class="counter-content-4">
											<h1 class="s-counter122 s-counter-6">{{$cant_pacientes_completos}}</h1>
										</div>
										<p class="s-counter-text-7 mayus white">PACIENTES CON DATOS COMPLETOS</p>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="widget widget-one_hybrid widget-seguimiento">
							<div class="widget-heading">
								<div class="simple--counter-container mt-3">

									<div class="counter-container">
										<div class="counter-content-4">
											<h1 class="s-counter123 s-counter-6">{{$cant_pacientes_incompletos}}</h1>
										</div>
										<p class="s-counter-text-7 mayus white">PACIENTES CON DATOS INSUFICIENTES</p>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-one bg-dark">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing nopadding">
						<div class="simple--counter-container">

							<div class="counter-container">
								<div class="counter-content-4">
									<h1 class="s-counter121 s-counter-7">{{efectidad($cant_pacientes,$cant_pacientes_completos)}}</h1><h6 class="white">%</h6>
								</div>
								<p class="s-counter-text-4 mayus white">EFECTIVIDAD DE CARGA</p>
							</div>

							<div class="counter-container">
								<div class="counter-content-4">
									<h1 class="s-counter121 s-counter-7">{{efectidad($cant_pacientes,$cant_pacientes_incompletos)}}</h1>
									<h6 class="white">%</h6>
								</div>
								<p class="s-counter-text-4 mayus white">PORCENTAJE DE ERROR</p>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-one bg-verde">
					<div class="widget-heading mb-4">
						<h3 class="white font-weight-bold">Seguimiento de llamados sobre 80 pacientes</h3>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing nopadding">
						<div class="row widget-statistic">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="widget widget-one_hybrid widget-seguimiento2">
									<div class="widget-heading">
										<div class="simple--counter-container mt-3">

											<div class="counter-container">
												<div class="counter-content-4">
													<h1 class="s-counter121 s-counter-8">{{$seguimientos}}</h1>
												</div>
												<p class="s-counter-text-7 mayus verde-oscuro">LLAMADOS REGISTRADOS</p>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="widget widget-one_hybrid widget-seguimiento2">
									<div class="widget-heading">
										<div class="simple--counter-container mt-3">

											<div class="counter-container">
												<div class="counter-content-4">
													<h1 class="s-counter121 s-counter-8">{{$seguimientos_respuesta}}</h1>
												</div>
												<p class="s-counter-text-7 mayus verde-oscuro">RESPUESTAS REGISTRADOS</p>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="widget widget-one_hybrid widget-seguimiento2">
									<div class="widget-heading">
										<div class="simple--counter-container mt-3">

											<div class="counter-container">
												<div class="counter-content-4">
													<h1 class="s-counter121 s-counter-8">{{$seguimientos_sin_respuesta}}</h1>
												</div>
												<p class="s-counter-text-7 mayus verde-oscuro">LLAMADOS SIN RESPUESTAS</p>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-account-invoice-two">
					<div class="widget-content">
						<div class="account-box">
							<div class="info">
								<h2 class="verde-oscuro font-weight-bold">Pacientes con datos completos</h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-one">
					<div class="widget-heading mb-4">
						<h3 class="verde-oscuro font-weight-bold">EDAD</h3>
						<h5 class="verde-oscuro font-weight-light">Cantidad de pacientes según edad | {{$cant}} Pacientes</h5>
					</div>
					<div style="width: 100%">
						{!! $edadChart->container() !!}
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-one">
					<div class="widget-heading mb-4">
						<h3 class="verde-oscuro font-weight-bold">DISTRIBUCIÓN</h3>
						<h5 class="verde-oscuro font-weight-light">Cantidad de pacientes por localidad | {{$cant}} Pacientes</h5>
					</div>
					<div style="width: 100%">
						{!! $localidadChart->container() !!}
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-one">
					<div class="widget-heading mb-4">
						<h3 class="verde-oscuro font-weight-bold">FUENTE</h3>
						<h5 class="verde-oscuro font-weight-light">Origen del dato | {{$cant}} Pacientes</h5>
					</div>
					<div style="width: 100%">
					{!! $fuenteChart->container() !!}
				</div>
				</div>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-one">
					<div class="widget-heading mb-4">
						<h3 class="verde-oscuro font-weight-bold">MOTIVOS DEL CONTACTO</h3>
						<h5 class="verde-oscuro font-weight-light">Razón por la que se realiza el seguimiento | {{$cant}} Pacientes</h5>
					</div>
					<div style="width: 100%">
					{!! $motivoChart->container() !!}
				</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection

@section('script')
<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
{!! $edadChart->script() !!}
{!! $localidadChart->script() !!}
{!! $motivoChart->script() !!}
{!! $fuenteChart->script() !!}
@endsection