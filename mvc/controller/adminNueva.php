<?php
	$tags->docType();
	$tags->html(true);
	$tags->head(true);
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	$libs->setLib('js', 'material.min');
	$libs->setLib('js', 'jquery.min');
	$libs->setLib('js', 'angular.min');
	$libs->setAngularModule('admin', 'company');
	$libs->setLib('css', 'material.min');
	$libs->setLib('css', 'main');
	$libs->setPrincipalStyle('adminEmpresas');
	echo '<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">';
	$tags->head(false);
	$tags->body(true);
	include($routes->view.'adminNueva.php');
	$tags->body(false);
	$tags->html(false);
?>
