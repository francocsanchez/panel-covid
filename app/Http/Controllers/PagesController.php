<?php

namespace App\Http\Controllers;

use App\Charts\PacienteEdadChart;
use App\Charts\PacienteLocalidadChart;
use App\Charts\PacienteMotivoChart;
use App\Paciente;
use App\Seguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PagesController extends Controller
{
	public function home()
	{
		return view('pages.parte-prensa');
	}

	public function parteSalud()
	{
		return view('pages.parte-salud');
	}

	public function seguimientoCuarentena()
	{
		$cant_pacientes = Paciente::count();
		$cant_pacientes_completos = Paciente::Completos()->count();
		$cant_pacientes_incompletos = $cant_pacientes - $cant_pacientes_completos;
		$ultima_carga = Paciente::UltimaCarga();
		$seguimientos = Seguimiento::count();
		$seguimientos_respuesta = Seguimiento::Atendio()->count();
		$seguimientos_sin_respuesta = $seguimientos - $seguimientos_respuesta;

		$edadPacientes = Paciente::Completos()->cantidadEdad();

		$labels = Arr::pluck($edadPacientes,'edades');
		$dataset = Arr::pluck($edadPacientes,'edad_cantidad');

		$edadChart = new PacienteEdadChart;
		$edadChart->labels($labels);
		$edadChart->dataset('Cantidad', 'line', $dataset)->options([
			'pointStyle' => 'rectRot',
			'pointRadius'=> 5,
			'pointBorderColor'=> 'green',
			'borderColor'=>'rgba(169,208,80, 0.7)',
			'backgroundColor' => 'rgba(169,208,80, 0.1)',
			'datalabels' => ['display'=> false]
		]);
		$edadChart->options([
			'responsive' => true,
			'rotation'	=> 0,
			'tooltips' => ['enabled'=>true],
			'legend' => ['display' => false],
			'scales' => [
				'yAxes'=> [[
					'display'=>true,
					'ticks'=> ['beginAtZero'=> true],
					'gridLines'=> ['display'=> true],
					'scaleLabel' => [
						'display'=> true,
						'labelString' =>'Cantidades'
					]
				]],
				'xAxes'=> [[
					'display'=>true,
					'categoryPercentage'=> 0.55,
					'barPercentage' => 0.5,
					'scaleLabel' => [
						'display'=> true,
						'labelString' =>'Edades'
					],
					'ticks' => [
						'beginAtZero' => true,
						'fontSize'=> 12],
						'gridLines' => ['display' => false],
					]],
				],
				'layout' => [
					'padding'=> [
						'left' => 0,
						'right'=> 0,
						'top'=> 0,
						'bottom'=> 0
					]
				]
			]);

		$localidadPaciente = Paciente::Completos()->cantidadLocalidad();

		$labels2 = Arr::pluck($localidadPaciente,'nombre');
		$dataset2 = Arr::pluck($localidadPaciente,'localidad_cantidad');

		$localidadChart = new PacienteLocalidadChart;
		$localidadChart->labels($labels2);
		$localidadChart->dataset('Cantidad', 'bar', $dataset2)->options([
			'borderColor'=>'rgba(12,106,88, 0.7)',
			'backgroundColor' => 'rgba(12,106,88, 0.1)',
			'datalabels' => [
				'color' => 'black',
				'anchor' => 'end',
				'align' => 'top',
				'labels' => [
					'title' => [
						'font'=> [
							'weight'=> 'bold'
						]
					]
				]
			]
		]);

		$localidadChart->options([
			'responsive' => true,
			'rotation'	=> 0,
			'tooltips' => ['enabled'=>true],
			'legend' => ['display' => false],
			'scales' => [
				'yAxes'=> [[
					'display'=>true,
					'ticks'=> ['beginAtZero'=> true],
					'gridLines'=> ['display'=> false],
					'scaleLabel' => [
						'display'=> true,
						'labelString' =>'Cantidad'
					]
				]],
				'xAxes'=> [[
					'display'=>true,
					'categoryPercentage'=> 0.7,
					'barPercentage' => 1,
					'gridLines' => ['display' => false],
					'ticks'=> [
						'fontSize'=> 12,
						'minRotation'=> 80,
						'maxRotation'=> 80
					],
					'scaleLabel' => [
						'display'=> true,
						'labelString' =>'Localidades'
					]
				]],
			],
			'layout' => [
				'padding'=> [
					'left' => 0,
					'right'=> 10,
					'top'=> 19,
					'bottom'=> 0
				]
			]
		]);

		$motivoPaciente = Paciente::Completos()->cantidadMotivo();

		$labels3 = Arr::pluck($motivoPaciente,'nombre');
		$dataset3 = Arr::pluck($motivoPaciente,'motivo_cantidad');

		$motivoChart = new PacienteMotivoChart;
		$motivoChart->labels($labels3);
		$motivoChart->dataset('Cantidad', 'polarArea', $dataset3)->options([
			'pointStyle' => 'rectRot',
			'pointRadius'=> 5,
			'pointBorderColor'=> 'green',
			'backgroundColor' => [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
			],
			'borderColor' => [
				'rgba(255, 99, 132, 1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
			],
			'datalabels' => [
				'color' => 'black',
				'labels' => [
					'title' => [
						'font'=> [
							'weight'=> 'bold'
						]
					]
				]
			]
		]);;

		$motivoChart->options([
			'responsive' => true,
			'rotation'	=> 0,
			'tooltips' => ['enabled'=>true],
			'legend' => [
				'display' => true,
				'position' => 'bottom',
				'Align' =>	'end',
			],
			'scales' => [
				'yAxes'=> [[
					'display'=>false,
					'gridLines'=> ['display'=> false],
				]],
				'xAxes'=> [[
					'display'=>false,
					'gridLines' => ['display' => false],
				]],

			],
			'layout' => [
				'padding'=> [
					'left' => 0,
					'right'=> 0,
					'top'=> 5,
					'bottom'=> 0
				]
			]
		]);

		$fuentePaciente = Paciente::Completos()->cantidadFuente();

		$labels4 = Arr::pluck($fuentePaciente,'nombre');
		$dataset4 = Arr::pluck($fuentePaciente,'fuente_cantidad');

		$fuenteChart = new PacienteLocalidadChart;
		$fuenteChart->labels($labels4);
		$fuenteChart->dataset('Cantidad', 'bar', $dataset4)->options([
			'borderColor'=>'rgba(169,208,80, 0.7)',
			'backgroundColor' => 'rgba(169,208,80, 0.1)',
			'datalabels' => [
				'color' => 'black',
				'anchor' => 'end',
				'align' => 'top',
				'labels' => [
					'title' => [
						'font'=> [
							'weight'=> 'bold'
						]
					]
				]
			]
		]);

		$fuenteChart->options([
			'responsive' => true,
			'rotation'	=> 0,
			'tooltips' => ['enabled'=>true],
			'legend' => ['display' => false],
			'scales' => [
				'yAxes'=> [[
					'display'=>true,
					'ticks'=> ['beginAtZero'=> true],
					'gridLines'=> ['display'=> false],
					'scaleLabel' => [
						'display'=> true,
						'labelString' =>'Cantidades'
					]
				]],
				'xAxes'=> [[
					'display'=>true,
					'categoryPercentage'=> 0.5,
					'barPercentage' => 1,
					'gridLines' => ['display' => false],
					'scaleLabel' => [
						'display'=> true,
						'labelString' =>'Fuentes de ingreso'
					],
					'ticks'=> [
						'fontSize'=> 12,
					]
				]],
			],
			'layout' => [
				'padding'=> [
					'left' => 0,
					'right'=> 10,
					'top'=>0,
					'bottom'=> 0,
				]
			]
		]);

		$cant = Paciente::Completos()->count();

		return view('pages.seguimiento-cuarentena',compact(
			'cant_pacientes',
			'cant_pacientes_completos',
			'cant_pacientes_incompletos',
			'ultima_carga',
			'seguimientos',
			'seguimientos_respuesta',
			'seguimientos_sin_respuesta',
			'edadChart',
			'localidadChart',
			'motivoChart',
			'fuenteChart',
			'cant'
		));
	}

	public function internacionesPlazas()
	{
		return view('pages.internaciones-plazas');
	}

	public function numerosGlobales()
	{
		return view('pages.numeros-globales');
	}
}
