<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
	protected $table = 'seguimientos';
	protected $primaryKey = 'seguimientos_id';

	public function scopeCompletos($query)
	{
		return $this
		->whereNotNull('paciente')
		->whereNotNull('efector')
		->whereNotNull('estado_clinico')
		->whereNotNull('fecha_seguimiento')
		->whereNotNull('tos')
		->whereNotNull('fiebre')
		->whereNotNull('temperatura')
		->whereNotNull('dolor')
		->whereNotNull('dificultad_respiratoria')
		->whereNotNull('olfato')
		->whereNotNull('atendio_contacto');
	}

	public function scopeAtendio($query)
	{
		return $this
		->where('atendio_contacto',1);
	}

	public function scopeUltimaCarga($query)
	{
		$ultimo_seguimiento = $this->all();
		$ultimo_seguimiento = $ultimo_seguimiento->last()->created_at;

		return $ultimo_seguimiento;
	}
}
