<?php
session_start();
	/**
		Iniciando carga de librerias
	*/
	include('mvc/core/init.php');
	if($_SESSION['user']==''){
		include('mvc/controller/main.php');
	}else{
		//TODO: encontrar una manera mas ordenada de casar estos urls
		/**
			Iniciando redireccionamiento
		*/
		$uri = $_SERVER['REQUEST_URI'];

		$direct = substr($uri, 4);
		/*Paginas generales*/
		if($direct=="/"){
			include('mvc/controller/menu.php');
		}elseif($direct=="/menu"){
			include('mvc/controller/menu.php');
		}elseif($direct=="/sessionOff"){
			session_destroy();
			include('mvc/controller/main.php');
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

		elseif(strpos($direct, "/catalogo") !== false){
			include('mvc/controller/catalogo.php');
		}
		/*database functions, va y hace una consulta al DA que le pertenece*/
		elseif(strpos($direct, "/da") !== false){
			include('mvc/model/DA/dataAccess.php');
		}

		else{
			//echo "not file";
		}	
	}
	

?>
