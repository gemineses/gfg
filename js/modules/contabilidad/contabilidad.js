var mainApp = angular.module('mainApp', []);

mainApp.controller('ctrlContabilidad', function($scope){
	$scope.comp='';
	$scope.getCompany = function(){
		$.ajax({
			url: 'da/companyDA/getCompany',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.comp = JSON.parse(json);
	        	});
			}
		});
	};
	
	$scope.generalJournalId=0;
	$scope.valGeneralJournal = function(){
		$.ajax({
			url: 'da/journalDA/validateGeneralJournal',
			type: 'post',
			success: function(json) {
				$scope.generalJournalId=JSON.parse(json);
				$scope.valJournal($scope.generalJournalId[0].GJO_ID);
			}
		});
	};
	$scope.dataJournal = '';
	$scope.valJournal = function(gjoId){
		data = 'gjoId='+gjoId;
		$.ajax({
			url: 'da/journalDA/validateJournal',
			data: data,
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.dataJournal = JSON.parse(json);
	        	});
	        	$scope.getJournals(JSON.parse(json)[0].JO_ID);
			}
		});	
	};

	$scope.subJournal=[];
	$scope.subJournalCont=0;
	$scope.getJournals = function(joId){
		data = 'joId='+joId;
		$.ajax({
			url: 'da/journalDA/getSubJournals',
			data: data,
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.subJournal[$scope.subJournalCont] = JSON.parse(json)[0];
	            	$scope.subJournalCont+=1;
	        	});
			}
		});
	};
	
	$scope.init = function(){
		$scope.getCompany();
		$scope.valGeneralJournal();
	};
	/*$scope.save = function(){
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
	};*/
});

