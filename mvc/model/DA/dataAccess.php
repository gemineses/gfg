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
	}elseif(strpos($direct, "accDA") !== false){
		include('mvc/model/DA/accountDA.php');
	}elseif(strpos($direct, "companyDA") !== false){
		include('mvc/model/DA/companyDA.php');
	}elseif(strpos($direct, "accountsDA") !== false){
		include('mvc/model/DA/accountsDA.php');
	}


?>