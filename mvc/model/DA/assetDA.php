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

	function getAllCompany(){
		$sql = 'SELECT * FROM COMPANY_ASSETS WHERE COM_ID='.$_SESSION['compId'];
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}

	function getCompanyAssetsForAccouting(){
		$sql = 'SELECT CAS_ID, CAS_OWN_ID, ASS_DESC, TAS_ID FROM COMPANY_ASSETS NATURAL JOIN ASSET NATURAL JOIN TYPE_ASSET WHERE COM_ID='.$_SESSION['compId'];
		$result = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			array_push($arr, $row);
		}
		echo json_encode($arr);
	}



	function setCompanyAsset(){
		$sql = 'INSERT INTO COMPANY_ASSETS VALUES (0, '.$_SESSION['compId'].', '.$_POST['txtCuenta'].', "'.$_POST['txtIdPropio'].'")';
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
	}elseif(strpos($direct, "getCompanyAll") !== false){
		getAllCompany($conn);
	}elseif(strpos($direct, "setCompanyAsset") !== false){
		setCompanyAsset($conn);
	}elseif(strpos($direct, "getCompanyAssetsForAccouting") !== false){
		getCompanyAssetsForAccouting($conn);
	}





	//finaliza conexion
	$DBConfig->closeConn();
?>