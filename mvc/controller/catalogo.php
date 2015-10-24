<?php
	$tags->docType();
	$tags->html(true);
	$tags->head(true);
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	$libs->setLib('js', 'material.min');
	$libs->setLib('js', 'angular.min');
	$libs->setLib('js', 'jquery.min');
	$libs->setLib('js', 'global');
	$libs->setAngularModule('conceptos', 'conceptos');
	$libs->setLib('css', 'material.min');
	$libs->setLib('css', 'main');
	$libs->setPrincipalStyle('menu');
	$libs->setPrincipalStyle('catalogo');
	echo '<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">';
	$tags->head(false);
	$tags->body(true);
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 4);
	include($routes->header.'header_main.htm');
  	echo "<div ng-app='conceptApp'>";
	if(strpos($direct, "-da-") !== false){
		if(strpos($direct, "-da-b1j9sSh") !== false){
			include('mvc/view/templates/catalogo/bancos.htm');
		}
		elseif(strpos($direct, "-da-j93hdsf") !== false){
			include('mvc/view/templates/catalogo/catalogoCuentas.htm');
		}
		elseif(strpos($direct, "-da-sag5343") !== false){
			include('mvc/view/templates/catalogo/conceptos.htm');
		}
		elseif(strpos($direct, "-da-s34fw1ED") !== false){
			include('mvc/view/templates/catalogo/departamentos.htm');
		}
		elseif(strpos($direct, "-da-D3f3trfE") !== false){
			include('mvc/view/templates/catalogo/empleados.htm');
		}
		elseif(strpos($direct, "-da-x8Uhsj4") !== false){
			include('mvc/view/templates/catalogo/puestos.htm');
		}
	}else{
		include($routes->view.'catalogo.php');	
	}
  	echo "</div></main>\n</div>";
	$tags->body(false);
	$tags->html(false);
?>