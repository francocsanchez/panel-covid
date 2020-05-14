<?php

use Carbon\Carbon;

function efectidad($total,$valor){
	$efectividad = ($valor / $total) *100;
	$efectividad = number_format($efectividad, 0, '.', '') . '%';

	return $efectividad;
}

function tipoSexo($valor){
	if($valor==0){
		return "Feminino";
	}else{
		return "Masculino";
	}
}

function fechaCarga($fecha){
	return Carbon::parse($fecha)->format('d-m-Y H:i');
}

?>