<?php
	class Conn{
		public function initConn($servername, $username, $password){
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

	class SQLFxn{
		private $conn = '';
		private $fields = array();
		private $table = '';
		/**debe iniciar esta funcion como constructor para inicializar la conexion
			@param $conn una variable de tipo conexion
		*/
		public function init($conn){
			$this->conn=$conn;
		}
		/**
			@param caracteres string donde se van a buscar los parametros
		*/
		public function setFields($newFields){
			array_push($this->params, $newFields);
		}
		/**
			@param settea la tabla en donde se hara la busqueda
		*/
		public function setTable($table){
			$this->table=$table;
		}
		/**
			funcion para ejecutar un select 
			@param $fields para saber en que campos buscar
			@param $table para saber en que tabla buscar
			@param $params para saber con que condicion se buscara
			TODO: aun en prototipo
		*/
		/*public function select(){
			if(!$conn){
				echo 'set connection first!';
				return 0;
			}
			$sql='SELECT';
			$counter=0;
			if(!$fields){
				echo 'fields requiered';
				return 0;
			}
			for($fields in $param){
				$counter++;
				if($counter!=0){
					$sql+=', '.$param;
				}else{
					$sql+=' '.$param;
				}
			}
			$sql+=' FROM';
			if(!$this->table){
				echo 'table requiered';
				return 0;
			}
			$sql+=' '.$this->table;
		}*/
		/**
			funcion para setear los objetos y con esto se busca el objeto y el data access que se van a ejecutar
			@params $objName es el nombre del archivo dataaccess sin el final del DA
			@return regresara un include con el archivo que se busco
			TODO: /mvc/core/database.php, programar que en caso de que no encuentre el archivo no lanzar un error si no una alerta donde diga que ese archivo no existe
		*/
		public function setObjs($objName){
			$routes = new Routes;
			include($routes->da.$objName.'DA.php');
		}
	}
?>
