<?php
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 8);
	if(strpos($direct, "assetDA") !== false){
		include('mvc/model/DA/assetDA.php');
	}elseif(strpos($direct, "typeAssetDA") !== false){
		include('mvc/model/DA/typeAssetDA.php');
	}

?>