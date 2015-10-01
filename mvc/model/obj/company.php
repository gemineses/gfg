<?php
	class Company{
		public $comId=0;
		public $comName='';
		public $comLogoName='';
		public $comColor='';
		public $comAcco='';
		public $comNom='';
		public $comBan='';
		public $comFac='';
		
		public function setCompany($comId, $comName, $comLogoName, $comColor, $comAcco, $comNom, $comBan, $comFac){
			$this->comId=$comId;
			$this->comName=$comName;
			$this->comLogoName=$comLogoName;
			$this->comColor=$comColor;
			$this->comAcco=$comAcco;
			$this->comNom=$comNom;
			$this->comBan=$comBan;
			$this->comFac=$comFac;
		}
		
		public function setComId($comId){
			$this->comId=$comId;
		}
		public function getComId(){
			return $this->comId;
		}
		public function setComName($comName){
			$this->comName=$comName;
		}
		public function getComName(){
			return $this->comName;
		}
		public function setComLogoName($comLogoName){
			$this->comLogoName=$comLogoName;
		}
		public function getComLogoName(){
			return $this->comLogoName;
		}
		public function setComColor($comColor){
			$this->comColor=$comColor;
		}
		public function getComColor(){
			return $this->comColor;
		}
		public function setComAcco($comAcco){
			$this->comAcco=$comAcco;
		}
		public function getComAcco(){
			return $this->comAcco;
		}
		public function setComNom($comNom){
			$this->comNom=$comNom;
		}
		public function getComNom(){
			return $this->comNom;
		}
		public function setComBan($comBan){
			$this->comBan=$comBan;
		}
		public function getComBan(){
			return $this->comBan;
		}
		public function setComFac($comFac){
			$this->comFac=$comFac;
		}
		public function getComFac(){
			return $this->comFac;
		}
	}

?>
