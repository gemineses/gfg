var mainApp = angular.module('mainApp', []);

mainApp.controller('ctrlNomina', function($scope){
	$scope.templates=[
		{'name':'puestos', 'url':'templates/puesto.htm'},
		{'name':'concepto', 'url':'templates/concepto.htm'}
	];
	$scope.addTemplate = function(id){
		var cont='';
		if(id=='0'){
			cont=$('#puestoDiv').html();
		}else if(id=='1'){
			cont=$('#impuestoDiv').html();
		}
		$('#containerNomina').html(cont);
	};

	$scope.puestos=[];

	$scope.getPuestos = function(){
		$.ajax({
			url: 'da/nominaDA/getPuestos',
			type: 'post',
			success: function(json) {
				$scope.puestos = JSON.parse(json);
			}
		});
	};

	$scope.getImpuestos = function(){

	};









	$scope.departamentList = [];

	$scope.getDepartaments = function(){
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

	$scope.employList = [];
	$scope.getEmploy = function(){
		$.ajax({
			url: 'da/puestosDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.employList = jQuery.parseJSON(json);
	        	});
			}
		});
	};

	$scope.turnList = [];
	$scope.getTurn = function(){
		$.ajax({
			url: 'da/typeTurnDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
					$scope.turnList = jQuery.parseJSON(json);
				});
			}
		});
	};

	$scope.employeePersonList = [];
	$scope.getEmployeePerson = function(){
		$.ajax({
			url: 'da/employeeDA/getPerson',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
					$scope.employeePersonList = jQuery.parseJSON(json);
				});
			}
		});
	};
	
	$scope.getDepartaments();
	$scope.getEmploy();
	$scope.getTurn();
	$scope.getEmployeePerson();

});