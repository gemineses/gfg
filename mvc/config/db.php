<?php
	class Conn{
		private $servername='localhost';
		private $username='root';
		private $password='n0m3l0s3';
		public function initConn(){
			$conn = new mysqli($servername, $username, $password);
			if($conn->connect_error){	
				die("Connection failed:" . $conn->connect_error);
			}else{
				return $conn;
			}
		}
		public function closeConn($conn){
			$conn->close();
		}
	}
?>
