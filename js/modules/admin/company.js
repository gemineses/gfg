var mainApp = angular.module('mainApp', []);

mainApp.controller('ctrlCompany', function($scope){
	$scope.comp='';
	$scope.getCompanies = function(){
		$.ajax({
			url: 'da/companyDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.comp = JSON.parse(json);
	        	});
			}
		});
	};
});
