<?php
	class Asset{
		public $assId=0;
		public $assOwnId=0;
		public $assDesc='';
		public $tasId='';

		public function setAssId($assId){
			$this->assId=$assId;
		}
		public function getAssId(){
			return $this->assId;
		}
		public function setAssOwnId($assOwnId){
			$this->assOwnId = $assOwnId;
		}
		public function getAssOwnId($assOwnId){
			return $assOwnId;
		}
		public function setAssDesc($assDesc){
			$this->assDesc=$assDesc;
		}
		public function getAssDesc(){
			return $this-assDesc;
		}
		public function setTasId($tasId){
			$this->tasId=$tasId;
		}
		public function getTasId(){
			return $this->tasId;
		}
	}
	
	/*$bar = new Asset;
	$bar->setAssId(5);
	echo $bar->getAssId();*/
?>
