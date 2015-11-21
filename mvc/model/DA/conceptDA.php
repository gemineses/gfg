<?php
	//importa archivos para conexion
	include('mvc/config/db.php');
	include('mvc/core/database.php');
	//inicia conexion
	$DBConfig = new Conn;
	$conn = $DBConfig->initConn($db_host, $db_username, $db_password);

	//funciones
	function getConcept($conn){
		/*reading databases funtions*/
		$sql = 'SELECT * FROM CONCEPT';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}

	
	function saveConcept($conn){
		$sql = 'INSERT INTO CONCEPT VALUES(0, "'.$_POST['conceptDesc'].'")';
		mysql_query($sql);
	}

	//entra a funciones
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 8);

	if(strpos($direct, "getAll") !== false){
		getConcept($conn);
	}elseif(strpos($direct, "addNew") !== false){
		saveConcept($conn);
	}





	//finaliza conexion
	$DBConfig->closeConn();
?>