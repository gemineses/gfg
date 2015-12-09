<?php
	//importa archivos para conexion
	include('mvc/config/db.php');
	include('mvc/core/database.php');
	//inicia conexion
	$DBConfig = new Conn;
	$conn = $DBConfig->initConn($db_host, $db_username, $db_password);

	//funciones
	function getAllPuestos($conn){
		$sql = 'SELECT * FROM DEPARTAMENT NATURAL JOIN EMPLOYMENT NATURAL JOIN TYPE_TURN NATURAL JOIN EMPLOYEE NATURAL JOIN PERSON NATURAL JOIN EMPLOY_TURN;';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}
	function getAllImpuestos($conn){
		$sql = 'SELECT * FROM VW_NOMINA_EMPLEADO';
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
	
	if(strpos($direct, "getPuestos") !== false){
		getAllPuestos($conn);
	}elseif(strpos($direct, "getImpuestos") !== false){
		getAllImpuestos($conn);
	}

	//finaliza conexion
	$DBConfig->closeConn();
?>