<?php
	//TODO: crear logica para unir account con accounts
	//funciones
	function logIn($user, $pass){
		include('mvc/config/db.php');
		include('mvc/core/database.php');

		$DBConfig = new Conn;
		$conn = $DBConfig->initConn($db_host, $db_username, $db_password);
		/*reading databases funtions*/
		$sql = "SELECT COM_ID FROM ACCOUNT WHERE (ACC_USER = '".$user."' OR ACC_EMAIL = '".$user."') AND ACC_PASS = MD5('".$pass."')";
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result)){
			$_SESSION['user'] = $_POST['txtUser'];
			$_SESSION['compId'] = $row[0];
			return true;
		}
		$DBConfig->closeConn();
	}
?>