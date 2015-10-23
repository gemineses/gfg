<?php
	/*reading basic libraries*/

	/*reading logs system*/
	include('logs.php');
	/*init a new conection to host*/
	printlog('new_conection'."\n");
	/*init routes system*/
	include('mvc/core/routes.php');
	/*reading basics tags system*/
	include('mvc/core/maintags.php');
	/*reading libraries(css, js, etc)*/
	include('mvc/core/libs.php');
	
	//init all public class
	$tags = new Hasht;
	$routes = new Routes;
	$libs = new LoadLib;
?>
