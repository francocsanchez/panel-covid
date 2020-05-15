<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Paciente extends Model
{
	protected $table = 'pacientes';
	protected $primaryKey = 'pacientes_id';

	public function localidades()
	{
		return $this->belongsTo('App\Localidad', 'localidad', 'localidades_id');
	}

	public function scopeCompletos($query)
	{
		return $this
		->whereNotNull('apellidos')
		->whereNotNull('nombres')
		->whereNotNull('documento')
		->whereNotNull('direccion')
		->whereNotNull('fecha_nacimiento')
		->whereNotNull('sexo')
		->whereNotNull('localidad')
		->whereNotNull('telefono')
		->whereNotNull('efector')
		->whereNotNull('financiador')
		->whereNotNull('fuente')
		->whereNotNull('motivo');
	}

	public function scopeUltimaCarga($query)
	{
		$ultimo_paciente = $this->all();
		$ultimo_paciente = $ultimo_paciente->last()->created_at;

		return $ultimo_paciente;
	}

	public function scopeCantidadEdad($query)
	{
		$data = $query
		->select(DB::raw('count(*) as edad_cantidad, YEAR(CURDATE())-YEAR(fecha_nacimiento) as edades'))
		->groupBy('edades')
		->get();

		return $data;
	}

	public function scopeCantidadLocalidad($query)
	{
		$data = $query
		->leftJoin('localidades', 'localidades.localidades_id', '=', 'pacientes.localidad')
		->select('localidades.nombre',DB::raw('count(*) as localidad_cantidad, pacientes.localidad'))
		->orderBy('localidades.nombre')
		->whereNotNull('localidades.nombre')
		->groupBy('localidad')
		->get();

		return $data;
	}

	public function scopeCantidadMotivo($query)
	{
		$data = $query
		->leftJoin('motivos', 'motivos.motivos_id', '=', 'pacientes.motivo')
		->select('motivos.nombre',DB::raw('count(*) as motivo_cantidad, pacientes.motivo'))
		->orderBy('motivo_cantidad')
		->whereNotNull('motivos.nombre')
		->groupBy('motivo')
		->get();

		return $data;
	}

	public function scopeCantidadFuente($query)
	{
		$data = $query
		->leftJoin('fuentes', 'fuentes.fuentes_id', '=', 'pacientes.fuente')
		->select('fuentes.nombre',DB::raw('count(*) as fuente_cantidad, pacientes.fuente'))
		->orderBy('fuente_cantidad')
		->whereNotNull('fuentes.nombre')
		->groupBy('fuente')
		->get();

		return $data;
	}
}
