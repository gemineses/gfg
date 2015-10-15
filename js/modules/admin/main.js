var mainApp = angular.module('mainApp', []);

mainApp.controller('ctrlMain', function($scope){
	$scope.toMain = function (){
		location.href='menu';
	};
});
