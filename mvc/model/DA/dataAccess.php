<?php
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 8);
	if(strpos($direct, "assetDA") !== false){
		include('mvc/model/DA/assetDA.php');
	}elseif(strpos($direct, "typeAssetDA") !== false){
		include('mvc/model/DA/typeAssetDA.php');
	}elseif(strpos($direct, "departamentDA") !== false){
		include('mvc/model/DA/departamentDA.php');
	}elseif(strpos($direct, "employeeDA") !== false){
		include('mvc/model/DA/employeeDA.php');
	}elseif(strpos($direct, "puestosDA") !== false){
		include('mvc/model/DA/employmentDA.php');
	}


?>