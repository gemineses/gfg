<?php
	//importa archivos para conexion
	include('mvc/config/db.php');
	include('mvc/core/database.php');
	//inicia conexion
	$DBConfig = new Conn;
	$conn = $DBConfig->initConn($db_host, $db_username, $db_password);

	//funciones
	function validateGeneralJournal($conn){
		$sql = 'SELECT * FROM GENERAL_JOURNAL WHERE COM_ID='.$_SESSION['compId'];
		$result = mysql_query($sql);
		if($row = mysql_fetch_array($result)){
			$arr = array();	
			array_push($arr, $row);
			echo json_encode($arr);
		}else{
			$sql = 'INSERT INTO GENERAL_JOURNAL VALUES( 0, '.$_SESSION['compId'].')';
			$result = mysql_query($sql);
			validateGeneralJournal();
		}
	}

	function validateJournal(){
		$sql = 'SELECT * FROM JOURNAL WHERE GJO_ID='.$_POST['gjoId'].' ORDER BY JO_ORDER';
		$result = mysql_query($sql);
		if($row = mysql_fetch_array($result)){
			$arr = array();	
			array_push($arr, $row);
			echo json_encode($arr);
		}else{
			$sql = 'INSERT INTO JOURNAL VALUES( 0, NOW(), 0, '.$_POST['gjoId'].')';
			$result = mysql_query($sql);
			validateJournal();
		}
	}

	function getSubJournals(){
		$sql= 'SELECT * FROM SUB_JOURNAL WHERE JO_ID='.$_POST['joId'].' ORDER BY SJO_ORDER';
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}

	function getSubJourMov(){
		$sql= 'SELECT * FROM SUB_JOURNAL_MOV WHERE SJO_ID='.$_POST['subJournalId'];
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);	
	};

	function newSubJournal(){
		$sql= 'INSERT INTO SUB_JOURNAL_MOV VALUES(0, '.$_POST['compAsset'].', '.$_POST['subJournalMov'].', '.$_POST['ammount'].')';
		mysql_query($sql);
	};
	

	//entra a funciones
	$uri = $_SERVER['REQUEST_URI'];
	$direct = substr($uri, 8);
	
	if(strpos($direct, "validateGeneralJournal") !== false){
		validateGeneralJournal($conn);
	}elseif(strpos($direct, "validateJournal") !== false){
		validateJournal($conn);
	}elseif(strpos($direct, "getSubJournals") !== false){
		getSubJournals($conn);
	}elseif(strpos($direct, "getSubJourMov") !== false){
		getSubJourMov($conn);
	}elseif(strpos($direct, "newSubJournal") !== false){
		newSubJournal($conn);
	}



	//finaliza conexion
	$DBConfig->closeConn();
?>