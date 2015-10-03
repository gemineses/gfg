<?php

	class LoadLib{
		public function setLib($type, $name){
			$routes = new Routes;
			if($type=='js'){
				echo '<script src="'.$routes->js.''.$name.'.js" ></script>';
			}else if($type=='css'){
				echo '<link rel="stylesheet" href="'.$routes->css.''.$name.'.css">';
			}
		}
	}
?>
