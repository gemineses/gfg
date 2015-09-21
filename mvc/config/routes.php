<?php	
/**
	@autor gemineses
	#routes
*/
	if(isset($_SERVER['HTTPS'])){
		printLog('entrando a http');
		$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	}
	echo $protocol;
	public class routes{
		$base_url="";
		$logs_url="";
		$js_url="js";
		$css_url="css";
		$images_url="images";
	}
?>
