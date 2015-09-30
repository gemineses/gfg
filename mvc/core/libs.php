<?php

	class LoadLib{
		public function setLib($type, $name){
			if($type=='js'){
				return '<script src="'.$Routes->js.$name.'.js" ></script>';
			}else if($type=='css'){
				return '<link rel="stylesheet" href="'.$Routes->css.$name.'.css">';
			}
		}
	}
?>
