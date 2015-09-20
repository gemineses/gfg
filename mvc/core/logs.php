<?php
/**
	@autor gemineses
	#logs
*/	
	function printLog($text){
		$file = 'logs/system.txt';
		$current = file_get_contents($file);
		$current .= $text;
		file_put_contents($file, $current);
	}
	
	function printLogLn($text){
		
	}
	
	function printLogQuery(){
		
	}
	
	function printLogError(){
		
	}
?>
