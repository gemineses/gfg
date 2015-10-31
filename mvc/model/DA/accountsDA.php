<?php
	//importa archivos para conexion
	include('mvc/config/db.php');
	include('mvc/core/database.php');
	//inicia conexion
	$DBConfig = new Conn;
	$conn = $DBConfig->initConn($db_host, $db_username, $db_password);

	//funciones
	function getAll($conn){
		$sql = 'SELECT * FROM ACCOUNT';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}
	function setNew($conn){
		//TODO: dejar de tirar el query asi de feo y usar los objetos de la carpeta obj y agregar el logo y el color
		$sql = "INSERT INTO ACCOUNT VALUES(0, '".$_POST['txtName']."', '".$_POST['txtEmail']."', md5('".$_POST['txtPass']."'), ".$_POST['txtComp'].")";
		mysql_query($sql);
	}

	//entra a funciones
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 8);
	
	if(strpos($direct, "getAll") !== false){
		getAll($conn);
	}elseif(strpos($direct, "setNew") !== false){
		setNew($conn);
	}

	//finaliza conexion
	$DBConfig->closeConn();
?>