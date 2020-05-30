<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		return "Seguimiento-Cuarentena";
	}

	public function internacionesPlazas()
	{
		return "Internaciones-Plazas";
	}

	public function numerosGlobales()
	{
		return "Numeros-Globales";
	}
}
