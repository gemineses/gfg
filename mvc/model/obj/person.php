<?php
	class Person{
		public $perId=0;
		public $perName='';
		public $perMidName='';
		public $perLastName='';
		public $perSLastName='';
		public $perBDate='';

		public function setPerId($perId){
			$this->perId=$perId;
		}
		public function getPerId(){
			return $this->perId;
		}
		public function setPerName($perName){
			$this->perName=$perName;
		}
		public function getPerName(){
			return $this->perName;
		}
		public function setPerMidName($perMidName){
			$this->perMidName=$perMidName;
		}
		public function getPerMidName(){
			return $this->perMidName;
		}
		public function setPerLastName($perLastName){
			$this->perLastName=$perLastName;
		}
		public function getPerLastName(){
			return $this->perLastName;
		}
		public function setPerSLastName($perSLastName){
			$this->perSLastName=$perSLastName;
		}
		public function getPerSLastName(){
			return $this->perSLastName;
		}
		public function setPerBDate($perBDate){
			$this->perBDate=$perBDate;
		}
		public function getPerBDate(){
			return $this->perBDate;
		}
	}
?>
