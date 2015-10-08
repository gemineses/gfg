<?php

	class LoadLib{
		public function setLib($type, $name){
			$routes = new Routes;
			if($type=='js'){
				echo "<script src='".$routes->js.''.$name.".js' ></script>\n";
			}else if($type=='css'){
				echo "<link rel='stylesheet' href='".$routes->css."".$name.".css'>\n";
			}
		}
		public function setAngularModule($module, $name){
			$routes = new Routes;	
			echo "<script src='".$routes->angular."".$module."/".$name.".js' ></script>\n";
		}
		public function setPrincipalStyle($name){
			$routes = new Routes;	
			echo "<link rel='stylesheet' href='".$routes->css."modules/".$name.".css'>\n";
		}
	}
?>
