<?php
	//importa archivos para conexion
	include('mvc/config/db.php');
	include('mvc/core/database.php');
	//inicia conexion
	$DBConfig = new Conn;
	$conn = $DBConfig->initConn($db_host, $db_username, $db_password);

	//funciones
	function getTypeAssetList($conn){
		/*reading databases funtions*/
		$sql = 'SELECT * FROM ASSET';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}

	function getTypeAsset($conn){
		$sql = 'SELECT * FROM TYPE_ASSET';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);	
	}

	function setAsset(){
		$sql = 'INSERT INTO ASSET VALUES (0, "'.$_POST['txtName'].'", '.$_POST['txtTas'].')';
		$result = mysql_query($sql);
	}

	//entra a funciones
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 8);
	
	if(strpos($direct, "getAll") !== false){
		getTypeAssetList($conn);
	}elseif(strpos($direct, "getTypeAsset") !== false){
		getTypeAsset($conn);
	}elseif(strpos($direct, "setAsset") !== false){
		setAsset($conn);
	}

	//finaliza conexion
	$DBConfig->closeConn();
?>