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
});