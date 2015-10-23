<?php
	class SubJournal{
		public $sjoId=0;
		public $sjoOrder=0;
		public $sjoDesc='';
		public $joId=0;

		public function setSjoId($sjoId){
			$this->sjoId=$sjoId;
		}
		public function getSjoId(){
			return $this->sjoId;
		}
		public function setSjoOrder($sjoOrder){
                        $this->sjoOrder=$sjoOrder;
                }
		public function getSjoOrder(){
                        return $this->SjoOrder;
                }
		public function setSjoDesc($sjoDesc){
                        $this->sjoDesc=$sjoDesc;
                }
		public function getSjoDesc(){
                        return $this->sjoDesc;
                }
		public function setJoId($joId){
                        $this->JoId=$JoId;
                }
		public function getJoId(){
                        return $this->JoId;
                }
	}
?>
