<?php
	//importa archivos para conexion
	include('mvc/config/db.php');
	include('mvc/core/database.php');
	//inicia conexion
	$DBConfig = new Conn;
	$conn = $DBConfig->initConn($db_host, $db_username, $db_password);

	//funciones
	function getAll($conn){
		$sql = 'SELECT * FROM COMPANY';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}

	function getCompany($conn){
		$sql = 'SELECT * FROM COMPANY WHERE COM_ID='.$_SESSION['compId'];
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}

	function setNew($conn){
		//TODO: dejar de tirar el query asi de feo y usar los objetos de la carpeta obj y agregar el logo y el color
		$sql = "INSERT INTO COMPANY VALUES(0, '".$_POST['txtName']."', '', '', 0,0,0,0)";
		mysql_query($sql);
	}

	//entra a funciones
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 8);
	
	if(strpos($direct, "getAll") !== false){
		getAll($conn);
	}elseif(strpos($direct, "setNew") !== false){
		setNew($conn);
	}elseif(strpos($direct, "getCompany") !== false){
		getCompany($conn);
	}

	//finaliza conexion
	$DBConfig->closeConn();
?>