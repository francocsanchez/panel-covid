<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Seguimiento;
use Illuminate\Http\Request;

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
		return view('panel.pacientes');
	}
}
