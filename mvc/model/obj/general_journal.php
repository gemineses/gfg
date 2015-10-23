<?php
	class GeneralJournal{
		public $gjoId=0;
		public $comId=0;

		public function setGjoId($gjoId){
			$this->gjoId=$gjoId;
		}
		public function getGjoId(){
			return $this->gjoId;
		}
		public function setComId($comId){
			$this->comId=$comId;
		}
		public function getComId(){
			return $this->comId;
		}
	}

?>
