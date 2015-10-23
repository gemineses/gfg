<?php
	class Hasht{
		public $docType = "<!DOCTYPE html>\n";
		public $htmlOpen = "<html>\n";
		public $htmlClose = "<html/>\n";
		public $headOpen = "<head>\n";
		public $headClose = "</head>\n";
		public $bodyOpen = "<body>\n";
		public $bodyClose = "</body>\n";
		
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

		public function bodyClass($c){
			echo "<body class='".$c."'>";
		}
	}
?>
