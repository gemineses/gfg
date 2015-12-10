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
	
	function setNewPuesto($conn){
		//TODO: dejar de tirar el query asi de feo y usar los objetos de la carpeta obj y agregar el logo y el color
		$sql = "INSERT INTO EMPLOY_TURN VALUES(0, ".$_POST['txtTypeTurn'].", ".$_POST['txtEmpId'].", ".$_POST['txtEmpntId'].")";
		mysql_query($sql);
	}

	function setNewImpuesto($conn){
		//TODO: dejar de tirar el query asi de feo y usar los objetos de la carpeta obj y agregar el logo y el color
		$sql = "INSERT INTO EMPLOY_CONCEPT VALUES(0, ".$_POST['txtEmpTrnId'].", ".$_POST['txtConceptId'].", ".$_POST['txtAmmount'].")";
		mysql_query($sql);
	}

	//entra a funciones
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 8);
	
	if(strpos($direct, "getPuestos") !== false){
		getAllPuestos($conn);
	}elseif(strpos($direct, "getImpuestos") !== false){
		getAllImpuestos($conn);
	}elseif(strpos($direct, "setNewPuesto") !== false){
		setNewPuesto($conn);
	}elseif(strpos($direct, "setNewImpuesto") !== false){
		setNewImpuesto($conn);
	}

	//finaliza conexion
	$DBConfig->closeConn();
?>