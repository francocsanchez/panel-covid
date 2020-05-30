<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		return view('welcome');
	}

	public function parteSalud()
	{
		return "Parte-Salud";
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
