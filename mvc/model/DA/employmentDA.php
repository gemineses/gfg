<?php
	//importa archivos para conexion
	include('mvc/config/db.php');
	include('mvc/core/database.php');
	//inicia conexion
	$DBConfig = new Conn;
	$conn = $DBConfig->initConn($db_host, $db_username, $db_password);

	//funciones
	function getAll($conn){
		/*reading databases funtions*/
		$sql = 'SELECT * FROM VW_DEPARTAMENT_EMPLOYMENT';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}

	function setNew($conn){
		$sql = 'INSERT INTO EMPLOYMENT VALUES (0, '.$_POST['txtDepartamento'].', "'.$_POST['txtName'].'")';
		$result = mysql_query($sql);
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