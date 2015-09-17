<?php
/**
	@autor gemineses
	#logs
*/	
	function printLog($text){
		$file = 'people.txt';
		$current = file_get_contents($file);
		$current .= "John Smith\n";
		file_put_contents($file, $current);
	}
	
	function printLogLn($text){
		
	}
	
	function printLogQuery(){
		
	}
	
	function printLogError(){
		
	}
?>