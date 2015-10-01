<?php
	class SubJournalMov{
		public $sjmId=0;
		public $casId=0;
		public $sjoId=0;
		public $ammount='';

		public function setSjmId($sjmId){
			$this->smjId=$smjId;
		}
		public function getSjmId(){
			return $this->sjmId;
		}
		public function setCasId($casId){
			$this->casId=$casId;
		}
		public function getCasId(){
                        return $this->casId;
                }
		public function setSjoId($sjoId){
                        $this->sjoId=$sjoId;
                }
		public function getSjoId(){
                        return $this->sjoId;
                }
		public function setAmmount($ammount){
                        $this->ammount=$ammount;
                }
		public function getAmmount(){
                        return $this->ammount;
                }
	}
?>
