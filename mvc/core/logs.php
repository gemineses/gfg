<?php
/**
	@autor gemineses
	#logs
*/	
	function allLogs($text){
                $file = 'logs/all.txt';
                $newText = file_get_contents($file);
                $newText .= $text."\n";
                file_put_contents($file, $newText);
        }

	function printLog($text){
		$file = 'logs/system.txt';
		$newText = file_get_contents($file);
		$newText .= $text."\n";
		file_put_contents($file, $newText);
		allLogs($text);
	}
	
	function printLogLn($text){
		$file = 'logs/logins.txt';
                $newText = file_get_contents($file);
                $newText .= $text."\n";
                file_put_contents($file, $newText);
		allLogs($text);
	}
	
	function printLogQuery($text){
		$file = 'logs/querys.txt';
                $newText = file_get_contents($file);
                $newText .= $text."\n";
                file_put_contents($file, $newText);
		allLogs($text);
	}
	
	function printLogError($error){
		$file = 'logs/error.txt';
                $newText = file_get_contents($file);
                $newText .= $text."\n";
                file_put_contents($file, $newText);
		allLogs($text);
	}
	
?>
