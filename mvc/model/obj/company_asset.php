<?php
	class CompanyAsset{
		public $casId=0;
		public $comId=0;
		public $assId=0;
		public $casOwnId='';
		
		public function setCasId($casId){
			$this->casId=$casId;
		}
		public function getCasId(){
			return $this->casId;
		}
		public function setComId($comId){
			$this->comId=$comId;
		}
		public function getComId(){
			return $this->comId;
		}
		public function setAssId($assId){
			$this->assId=$assId;
		}
		public function getAssId(){
			return $this->assId;
		}
		public function setCasOwnId($casOwnId){
			$this->casOwnId=$casOwnId;
		}
		public function getCasOwnId(){
			return $this->casOwnId;
		}
	}
?>
