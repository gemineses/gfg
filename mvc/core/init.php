<?php
	/*reading basic libraries*/

	/*reading logs system*/
	include('logs.php');
	/*init a new conection to host*/
	printlog('new_conection'."\n");
	/*init routes system*/
	include('mvc/core/routes.php');
	$routes = new Routes;
	/*reading basics tags system*/
	include('mvc/core/maintags.php');
	$tags = new Hasht;
	/*reading libraries(css, js, etc)*/
	include('mvc/core/libs.php');
	$libs = new LoadLib;
	//init all public class
	

	
	
	
		

?>
