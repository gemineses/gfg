<?php
	class UserCompConfig{
		public $uccId=0;
		public $userId=0;
		public $comId=0;

		public function setUccId($uccId){
			$this->uccId=$uccId;
		}
		public function getUccId(){
			return $this->uccId;
		}
		public function setUserId($userId){
			$this->userId=$userId;
		}
		public function getUserId(){
			return $this->userId;
		}
		public function setComId($comId){
			$this->comId=$comId;
		}
		public function getComId(){
			return $this->comId;
		}
	}
?>
