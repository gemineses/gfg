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


	$scope.impuestos='';

	$scope.getImpuestos = function(){
		$.ajax({
			url: 'da/nominaDA/getImpuestos',
			type: 'post',
			success: function(json) {
				$scope.impuestos = JSON.parse(json);
			}
		});
	};


	$scope.getPuestos();
	$scope.getImpuestos();




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

	$scope.conceptList = '';
	$scope.consultaCatalogo = function(){
		$.ajax({
			url: 'da/conceptDA/getAll',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.conceptList = jQuery.parseJSON(json);
	        	});
			}
		});
	};

	$scope.consultaCatalogo();
	$scope.getDepartaments();
	$scope.getEmploy();
	$scope.getTurn();
	$scope.getEmployeePerson();

	$scope.setNewPuesto = function(){
		var form = document.createElement('form');
		var inputEmploy = document.createElement('input');
		var inputTurn = document.createElement('input');
		var inputEmployee = document.createElement('input');
		

		form.method = 'POST';
		form.action = '';

		inputEmploy.value = document.getElementById('txtEmp').value;
		inputEmploy.name = 'txtTypeTurn';
		form.appendChild(inputEmploy);

		inputTurn.value = document.getElementById('txtTurn').value;
		inputTurn.name = 'txtEmpId';
		form.appendChild(inputTurn);

		inputEmployee.value = document.getElementById('txtPerson').value;
		inputEmployee.name = 'txtEmpntId';
		form.appendChild(inputEmployee);

		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		console.log(str);

		$.ajax({
			url: 'da/nominaDA/setNewPuesto',
			data: str,
			type: 'post',
			success: function() {
				location.reload();
			}
		});
	};


	$scope.setNewImpuesto = function(){
		var form = document.createElement('form');
		var txtEmpTrnId = document.createElement('input');
		var txtConceptId = document.createElement('input');
		var txtAmmount = document.createElement('input');
		

		form.method = 'POST';
		form.action = '';

		txtEmpTrnId.value = document.getElementById('txtPersonImp').value;
		txtEmpTrnId.name = 'txtEmpTrnId';
		form.appendChild(txtEmpTrnId);

		txtConceptId.value = document.getElementById('txtConcept').value;
		txtConceptId.name = 'txtConceptId';
		form.appendChild(txtConceptId);

		txtAmmount.value = document.getElementById('txtAmmount').value;
		txtAmmount.name = 'txtAmmount';
		form.appendChild(txtAmmount);

		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		console.log(str);

		$.ajax({
			url: 'da/nominaDA/setNewImpuesto',
			data: str,
			type: 'post',
			success: function() {
				location.reload();
			}
		});
	};
});