<?php

function efectidad($total,$valor){
	$efectividad = ($valor / $total) *100;
	$efectividad = number_format($efectividad, 2, '.', '') . '%';

	return $efectividad;
}

function tipoSexo($valor){
	if($valor==0){
		return "Feminino";
	}else{
		return "Masculino";
	}
}

?>