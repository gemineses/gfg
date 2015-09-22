<?php
	/*reading basic libraries*/

	/*reading logs system*/
	include('logs.php');
	/*init a new conection to host*/
	printlog('new_conection'."\n");
	/*init routes system*/
	include('../config/routes.php');
	/*reading basics tags system*/
	include('../config/maintags.php');
	/*reading libraries(css, js, etc)*/
	include('../config/libs.php');
	/*reading tags*/
	include('../helper/codeBurner.php');
?>
