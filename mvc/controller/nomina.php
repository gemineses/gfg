<?php
	$tags->docType();
	$tags->html(true);
	$tags->head(true);
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	$libs->setLib('js', 'material.min');
	$libs->setLib('js', 'jquery.min');
	$libs->setLib('js', 'angular.min');
	$libs->setAngularModule('nomina', 'nomina');
	$libs->setLib('css', 'material.min');
	$libs->setLib('css', 'main');
	$libs->setPrincipalStyle('menu');
	$libs->setPrincipalStyle('nomina');
	echo '<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">';
	$tags->head(false);
	$tags->body(true);
	include($routes->view.'nomina.php');
	$tags->body(false);
	$tags->html(false);
?>