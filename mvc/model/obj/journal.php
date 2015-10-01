<?php
	class Journal{
		public $joId=0;
		public $joDateInit='';
		public $joOrder=0;
		public $gjoId=0;

		public function setJoId($joId){
			$this->joId=$joId;
		}
		public function getJoId(){
			return $this->joId;
		}
		public function setJoDateInit($joDateInit){
			$this->joDateInit;
		}
		public function getJoDateInit(){
			return $this->joDateInit;
		}
		public function setJoOrder($joOrder){
			$this->joOrder=$joOrder;
		}
		public function getJoOrder(){
			return $this->joOrder;
		}
		public function setGjoId($gjoId){
			$this->gjoId=$gjoId;
		}
		public function getGjoId(){
			return $this->gjoId;
		}
	}
?>
