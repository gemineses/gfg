<?php

	//TODO: encontrar una manera mas ordenada de casar estos urls
	/**
		Iniciando carga de librerias
	*/
	include('mvc/core/init.php');
	
	/**
		Iniciando redireccionamiento
	*/
	$uri = $_SERVER['REQUEST_URI'];

	$direct = substr($uri, 4);
	/*Paginas generales*/
	if($direct=="/"){
		include('mvc/controller/main.php');
	}elseif($direct=="/menu"){
		include('mvc/controller/menu.php');
	}elseif($direct=="/contabilidad"){
		include('mvc/controller/contabilidad.php');
	}elseif($direct=="/nomina"){
		include('mvc/controller/nomina.php');
	}elseif($direct=="/catalogo"){
		include('mvc/controller/catalogo.php');
	}elseif($direct=="/facturacion"){
		include('mvc/controller/facturacion.php');
	}elseif($direct=="/descargas"){
		include('mvc/controller/descargas.php');
	}
	/*termina Paginas generales*/

	/*SubTemplates*/
	elseif($direct=="/b1j9sSh"){
		include('mvc/view/templates/catalogo/bancos.htm');
	}

	elseif($direct=="/j93hdsf"){
		include('mvc/view/templates/catalogo/catalogoCuentas.htm');
	}

	elseif($direct=="/sag5343"){
		include('mvc/view/templates/catalogo/conceptos.htm');
	}

	elseif($direct=="/s34fw1ED"){
		include('mvc/view/templates/catalogo/departamentos.htm');
	}

	elseif($direct=="/D3f3trfE"){
		include('mvc/view/templates/catalogo/empleados.htm');
	}

	elseif($direct=="/x8Uhsj4"){
		include('mvc/view/templates/catalogo/puestos.htm');
	}
	/*end subtemplates*/

	/*database functions, va y hace una consulta al DA que le pertenece*/
	elseif(strpos($direct, "/da") !== false){
		include('mvc/model/DA/dataAccess.php');
	}

	else{
		//echo "not file";
	}

?>
