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
		$sql = 'SELECT * FROM PERSON';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}
	function setNew($conn){
		/*reading databases funtions*/
		$sql = 'INSERT INTO PERSON VALUES (0, "'.$_POST['txtName'].'", "'.$_POST['txtName2'].'", "'.$_POST['txtApp'].'", "'.$_POST['txtApm'].'", "'.$_POST['txtYear'].'-'.$_POST['txtMes'].'-'.$_POST['txtDia'].'")';
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