<?php

namespace App\Http\Controllers;

use App\Charts\EdadChart;
use App\Charts\PacienteLocalidadChart;

use App\Paciente;
use App\Seguimiento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PanelController extends Controller
{
	public function index()
	{
		$cant_pacientes = Paciente::count();
		$cant_pacientes_completos = Paciente::Completos()->count();
		$cant_pacientes_incompletos = $cant_pacientes - $cant_pacientes_completos;
		$ultimo_paciente = Paciente::UltimaCarga();

		$cant_seguimientos = Seguimiento::count();
		$cant_seguimientos_completos = Seguimiento::Completos()->count();
		$cant_seguimientos_incompletos = $cant_seguimientos - $cant_seguimientos_completos;
		$ultimo_seguimiento = Seguimiento::UltimaCarga();

		return view('panel.index'
			,compact(
				'cant_pacientes',
				'cant_pacientes_completos',
				'cant_pacientes_incompletos',
				'ultimo_paciente',
				'cant_seguimientos',
				'cant_seguimientos_completos',
				'cant_seguimientos_incompletos',
				'ultimo_seguimiento'
			));
	}

	public function pacientes()
	{
		$edadPacientes = Paciente::Completos()->cantidadEdad();

		$labels = Arr::pluck($edadPacientes,'edades');
		$dataset = Arr::pluck($edadPacientes,'edad_cantidad');

		$edadChart = new EdadChart;
		$edadChart->labels($labels);
		$edadChart->dataset('Cantidad', 'line', $dataset)->options([
			'pointStyle' => 'rectRot',
			'pointRadius'=> 5,
			'pointBorderColor'=> 'green',
			'borderColor'=>'rgba(80,155,40, 0.7)',
			'backgroundColor' => 'rgba(80,155,40, 0.1)',
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
				]],
				'xAxes'=> [[
					'display'=>true,
					'categoryPercentage'=> 0.55,
					'barPercentage' => 0.5,
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
			'borderColor'=>'rgba(255,77,0, 0.7)',
			'backgroundColor' => 'rgba(255,77,0, 0.1)',
			'datalabels' => [
				'color' => 'black',
				'align' => 'center',
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
				]],
				'xAxes'=> [[
					'display'=>true,
					'categoryPercentage'=> 0.9,
					'barPercentage' => 1,
					'gridLines' => ['display' => false],
					'ticks'=> [
						'fontSize'=> 12,
						'minRotation'=> 90,
						'maxRotation'=> 90
					]
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

		return view('panel.pacientes',compact('edadChart','localidadChart'));

	}
}
