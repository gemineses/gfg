var conceptApp = angular.module('conceptApp', []);

conceptApp.controller('ctrlConceptos', function($scope){
	$scope.templates=[{"id":0, "name":"departamentos"},{"id":1, "name":"puestos"},{"id":2, "name":"empleados"},{"id":3, "name":"bancos"},{"id":4, "name":"catalogoCuentas"},{"id":5, "name":"conceptos"}];
	$scope.switchPage = function(id){
		$.get(id, function(data){
			$("#containerConcepts").html(data);
		});
	};
	$scope.tipoCatalogos = '';
	$scope.catalogoLista = '';
	$scope.initCatalogoCuentas = function(){
		$scope.getTipoCatalogoCuentas();
		$scope.getListaCatalogoCuentas();
		
	};
	$scope.getTipoCatalogoCuentas = function(){
		$.ajax({
			url: 'da/typeAssetDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.tipoCatalogos = jQuery.parseJSON(json);
	        	});
			}
		});
	};
	$scope.getListaCatalogoCuentas = function(){
		$.ajax({
			url: 'da/assetDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.catalogoLista = jQuery.parseJSON(json);
	        	});
			}
		});
	};
});



conceptApp.controller('ctrlDepartamentos', function($scope){
	$scope.templates=[{"id":0, "name":"departamentos"},{"id":1, "name":"puestos"},{"id":2, "name":"empleados"},{"id":3, "name":"bancos"},{"id":4, "name":"catalogoCuentas"},{"id":5, "name":"conceptos"}];
	$scope.switchPage = function(id){
		$.get(id, function(data){
			$("#containerConcepts").html(data);
		});
	};
	$scope.tipoCatalogos = '';
	$scope.catalogoLista = '';
	$scope.initDepartamentos = function(){
		$scope.getAll();		
	};
	$scope.getAll = function(){
		$.ajax({
			url: 'da/departamentDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.departamentList = jQuery.parseJSON(json);
	        	});
			}
		});
	};
});


conceptApp.controller('ctrlEmpleados', function($scope){
	$scope.templates=[{"id":0, "name":"departamentos"},{"id":1, "name":"puestos"},{"id":2, "name":"empleados"},{"id":3, "name":"bancos"},{"id":4, "name":"catalogoCuentas"},{"id":5, "name":"conceptos"}];
	$scope.switchPage = function(id){
		$.get(id, function(data){
			$("#containerConcepts").html(data);
		});
	};
	$scope.tipoCatalogos = '';
	$scope.catalogoLista = '';
	$scope.initEmpleados = function(){
		$scope.getAll();		
	};
	$scope.getAll = function(){
		$.ajax({
			url: 'da/employeeDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.employeeList = jQuery.parseJSON(json);
	        	});
			}
		});
	};
});

conceptApp.controller('ctrlPuestos', function($scope){
	$scope.templates=[{"id":0, "name":"departamentos"},{"id":1, "name":"puestos"},{"id":2, "name":"empleados"},{"id":3, "name":"bancos"},{"id":4, "name":"catalogoCuentas"},{"id":5, "name":"conceptos"}];
	$scope.switchPage = function(id){
		$.get(id, function(data){
			$("#containerConcepts").html(data);
		});
	};
	$scope.tipoCatalogos = '';
	$scope.catalogoLista = '';
	$scope.initPuestos = function(){
		$scope.getAll();		
	};
	$scope.getAll = function(){
		$.ajax({
			url: 'da/puestosDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.puestos = jQuery.parseJSON(json);
	        	});
			}
		});
	};
});