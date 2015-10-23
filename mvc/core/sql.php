<?php
	class Sql{
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
		*/
		public function select(){
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
			for($fields as $param){
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
		}
	}
?>
