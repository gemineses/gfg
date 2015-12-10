var mainApp = angular.module('mainApp', []);

mainApp.controller('ctrlDescargas', function($scope){
	$scope.listaNomina=[];

	$scope.getAllNomina = function(){
		$.ajax({
			url: 'da/descargasDA/getAllNomina',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.listaNomina = jQuery.parseJSON(json);
	        	});
			}
		});
	};

	$scope.getAllNomina();
});