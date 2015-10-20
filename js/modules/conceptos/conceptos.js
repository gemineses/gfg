var conceptApp = angular.module('conceptApp', []);

conceptApp.controller('ctrlConceptos', function($scope){
	$scope.templates=[{"id":0, "name":"departamentos"},{"id":1, "name":"puestos"},{"id":2, "name":"empleados"},{"id":3, "name":"bancos"},{"id":4, "name":"catalogoCuentas"},{"id":5, "name":"conceptos"}];
	$scope.switchPage = function(id){
		console.log($("#containerConcepts"));
		$.get(id, function(data){
			console.log(data);
			$("#containerConcepts").html(data);
		    //$(this).children("div:first").html(data);
		});
	};
});