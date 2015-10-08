<?php
	/**
		Iniciando carga de librerias
	*/
	include('mvc/core/init.php');
	
	/**
		Iniciando redireccionamiento
	*/
	$uri = $_SERVER['REQUEST_URI'];

	$direct = substr($uri, 4);

	if($direct=="/"){
		include('mvc/controller/main.php');
	}elseif($direct=="/menu"){
		include('mvc/controller/menu.php');
	}elseif($direct=="/contabilidad"){
		include('mvc/controller/contabilidad.php');
	}elseif($direct=="/nomina"){
		include('mvc/controller/nomina.php');
	}elseif($direct=="/bancos"){
		include('mvc/controller/bancos.php');
	}elseif($direct=="/facturacion"){
		include('mvc/controller/facturacion.php');
	}elseif($direct=="/descargas"){
		include('mvc/controller/descargas.php');
	}else{
		//echo "not file";
	}

?>
