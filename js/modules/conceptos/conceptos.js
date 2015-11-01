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
	$scope.save = function(){
		var form = document.createElement('form');
		var inputName = document.createElement('input');
		

		form.method = 'POST';
		form.action = '';

		inputName.value = document.getElementById('txtName').value;
		inputName.name = 'txtName';
		form.appendChild(inputName);


		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		$.ajax({
			url: 'da/departamentDA/setNew',
			data: str,
			type: 'post',
			success: function() {
				location.reload();
			}
		});
	};
});


conceptApp.controller('ctrlEmpleados', function($scope){
	$scope.templates=[{"id":0, "name":"departamentos"},{"id":1, "name":"puestos"},{"id":2, "name":"empleados"},{"id":3, "name":"bancos"},{"id":4, "name":"catalogoCuentas"},{"id":5, "name":"conceptos"}];
	$scope.dias=[{'id':1, 'value':1},{'id':2, 'value':2},{'id':3, 'value':3},{'id':4, 'value':4},{'id':5, 'value':5},{'id':6, 'value':6},{'id':7, 'value':7},{'id':8, 'value':8},{'id':9, 'value':9},{'id':10, 'value':10},{'id':11, 'value':11},{'id':12, 'value':12},{'id':13, 'value':13},{'id':14, 'value':14},{'id':15, 'value':15},{'id':16, 'value':16},{'id':17, 'value':17},{'id':18, 'value':18},{'id':19, 'value':19},{'id':20, 'value':20},{'id':21, 'value':21},{'id':22, 'value':22},{'id':23, 'value':23},{'id':24, 'value':24},{'id':25, 'value':25},{'id':26, 'value':26},{'id':27, 'value':28},{'id':29, 'value':29},{'id':30, 'value':30},{'id':31, 'value':31}];
	$scope.mes = [{'id':1, 'value':'ENERO'}, {'id':2, 'value':'FEBRERO'}, {'id':3, 'value':'MARZO'},{'id':4, 'value':'ABRIL'},{'id':5, 'value':'MAYO'},{'id':6, 'value':'JUNIO'},{'id':7, 'value':'JULIO'},{'id':8, 'value':'AGOSTO'},{'id':9, 'value':'SEPTIEMBRE'},{'id':10, 'value':'OCTUBRE'},{'id':11, 'value':'NOVIEMBRE'},{'id':12, 'value':'DICIEMBRE'}];
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

	$scope.save = function(){
		var form = document.createElement('form');
		var inputName = document.createElement('input');
		var inputName2 = document.createElement('input');
		var inputApp = document.createElement('input');
		var inputApm = document.createElement('input');
		var inputDay = document.createElement('input');
		var inputMonth = document.createElement('input');
		var inputYear = document.createElement('input');
		
		form.method = 'POST';
		form.action = '';

		inputName.value = document.getElementById('txtName').value;
		inputName.name = 'txtName';
		form.appendChild(inputName);

		inputName2.value = document.getElementById('txtName2').value;
		inputName2.name = 'txtName2';
		form.appendChild(inputName2);

		inputApp.value = document.getElementById('txtApp').value;
		inputApp.name = 'txtApp';
		form.appendChild(inputApp);

		inputApm.value = document.getElementById('txtApm').value;
		inputApm.name = 'txtApm';
		form.appendChild(inputApm);

		inputDay.value = document.getElementById('txtDia').value;
		inputDay.name = 'txtDia';
		form.appendChild(inputDay);

		inputMonth.value = document.getElementById('txtMes').value;
		inputMonth.name = 'txtMes';
		form.appendChild(inputMonth);

		inputYear.value = document.getElementById('txtYear').value;
		inputYear.name = 'txtYear';
		form.appendChild(inputYear);

		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		$.ajax({
			url: 'da/employeeDA/setNew',
			data: str,
			type: 'post',
			success: function() {
				location.reload();
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

	$scope.departamentList='';
	$scope.getDepartamentos = function(){
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

	$scope.save = function(){
		var form = document.createElement('form');
		var inputName = document.createElement('input');
		var inputDepartament = document.createElement('input');
		
		form.method = 'POST';
		form.action = '';

		inputName.value = document.getElementById('txtName').value;
		inputName.name = 'txtName';
		form.appendChild(inputName);

		inputDepartament.value = document.getElementById('txtDepartamento').value;
		inputDepartament.name = 'txtDepartamento';
		form.appendChild(inputDepartament);

		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		$.ajax({
			url: 'da/puestosDA/setNew',
			data: str,
			type: 'post',
			success: function() {
				location.reload();
			}
		});

	};
});