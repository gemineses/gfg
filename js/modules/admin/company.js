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

	$scope.save = function(){
		var form = document.createElement('form');
		var inputName = document.createElement('input');
		var inputUser = document.createElement('input');
		var inputPass = document.createElement('input');
		var inputEmail = document.createElement('input');
		

		form.method = 'POST';
		form.action = '';

		inputName.value = document.getElementById('txtName').value;
		inputName.name = 'txtName';
		form.appendChild(inputName);


		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		$.ajax({
			url: 'da/companyDA/setNew',
			data: str,
			type: 'post',
			success: function() {
				location.reload();
			}
		});
	};
});



mainApp.controller('ctrlAccounts', function($scope){
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

	$scope.acc='';
	$scope.getAccounts = function(){
		$.ajax({
			url: 'da/accountsDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.acc = JSON.parse(json);
	        	});
			}
		});
	};	

	$scope.save = function(){
		var form = document.createElement('form');
		var inputName = document.createElement('input');
		var inputPass = document.createElement('input');
		var inputEmail = document.createElement('input');
		var inputComp = document.createElement('input');

		form.method = 'POST';
		form.action = '';

		inputName.value = document.getElementById('txtName').value;
		inputName.name = 'txtName';
		form.appendChild(inputName);

		inputPass.value = document.getElementById('txtPass').value;
		inputPass.name = 'txtPass';
		form.appendChild(inputPass);

		inputEmail.value = document.getElementById('txtEmail').value;
		inputEmail.name = 'txtEmail';
		form.appendChild(inputEmail);

		inputComp.value = document.getElementById('txtComp').value;
		inputComp.name = 'txtComp';
		form.appendChild(inputComp);

		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		$.ajax({
			url: 'da/accountsDA/setNew',
			data: str,
			type: 'post',
			success: function(json) {
				location.reload();
			}
		});
	};
});




mainApp.controller('ctrlCuentasContables', function($scope){
	$scope.comp='';
	$scope.init = function(){
		$scope.getCuentas();
		$scope.getTypeAsset();
	};
	$scope.cuentas = '';
	$scope.getCuentas = function(){
		$.ajax({
			url: 'da/assetDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.cuentas = JSON.parse(json);
	        	});
			}
		});
	};

	$scope.typeAss='';
	$scope.getTypeAsset = function(){
		$.ajax({
			url: 'da/assetDA/getTypeAsset',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.typeAss = JSON.parse(json);
	        	});
			}
		});
	};	

	$scope.save = function(){
		var form = document.createElement('form');
		var inputName = document.createElement('input');
		var inputTas = document.createElement('input');

		form.method = 'POST';
		form.action = '';

		inputName.value = document.getElementById('txtName').value;
		inputName.name = 'txtName';
		form.appendChild(inputName);

		inputTas.value = document.getElementById('txtTas').value;
		inputTas.name = 'txtTas';
		form.appendChild(inputTas);


		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		$.ajax({
			url: 'da/assetDA/setAsset',
			data: str,
			type: 'post',
			success: function(json) {
				location.reload();
			}
		});
	};
});
