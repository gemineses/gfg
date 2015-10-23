<?php
	class TypeAsset{
		public $tasId=0;
		public $tasDesc='';

		public function setTasId($tasId){
			$this->tasId=$tasId;
		}
		public function getTasId(){
			return $this->tasId;
		}
		public function setTasDesc($tasDesc){
			$this->tasDesc=$tasDesc;
		}
		public function getTasDesc(){
			return $this->tasDesc;
		}
	}
?>
