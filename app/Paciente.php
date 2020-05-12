<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	protected $table = 'pacientes';
	protected $primaryKey = 'pacientes_id';

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
		->whereNotNull('financiador');
	}

	public function scopeUltimaCarga($query)
	{
		$ultimo_paciente = $this->all();
		$ultimo_paciente = $ultimo_paciente->last()->created_at;

		return $ultimo_paciente;
	}
}
