var mainApp = angular.module('mainApp', []);

mainApp.controller('ctrlMain', function($scope){
	$scope.toMain = function (){
		var form = document.createElement('form');
		var inputUser = document.createElement('input');
		var inputPass = document.createElement('input');

		form.method = 'POST';
		form.action = '';

		inputUser.value = document.getElementById('txtUser').value;
		inputUser.name = 'txtUser';
		form.appendChild(inputUser);

		inputPass.value = document.getElementById('txtPass').value;
		inputPass.name = 'txtPass';
		form.appendChild(inputPass);

		document.body.appendChild(form);
		form.submit();
	};


});
