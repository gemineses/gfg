<?php
	class Hasht{
		public $docType = "<!DOCTYPE html>";
		public $htmlOpen = "<html>";
		public $htmlClose = "<html/>";
		public $headOpen = "<head>";
		public $headClose = "</head>";
		public $bodyOpen = "<body>";
		public $bodyClose = "</body>";
		
		public function docType(){
			echo $this->docType;
		}
		
		public function html($flag){
                        if($flag){
                                echo $this->htmlOpen;
                        }else{
                                echo $this->htmlClose;
                        }
                }
		public function head($flag){
			if($flag){
				echo $this->headOpen;
			}else{
				echo $this->headClose;
			}
		}
		public function body($flag){
			if($flag){
				echo $this->bodyOpen;
			}else{
				echo $this->bodyClose;
			}
		}
	}
?>
