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
	
	$scope.companyAssets = '';
	$scope.getCompanyAssets = function(){
		$.ajax({
			url: 'da/assetDA/getCompanyAssetsForAccouting',
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
	            	$scope.companyAssets = JSON.parse(json);
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
	        	for(x in JSON.parse(json)){
	        		$scope.getJournals(JSON.parse(json)[x].JO_ID);
	        	}
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
					for(x in JSON.parse(json)){
						$scope.subJournal[$scope.subJournalCont] = JSON.parse(json)[x];
	            		$scope.getSubJourMov($scope.subJournal[$scope.subJournalCont].SJO_ID);
	            		$scope.subJournalCont+=1;
					}
	        	});
			}
		});
	};
	$scope.subJournalMov = [];
	$scope.subJournalMovCont = 0;
	$scope.getSubJourMov = function(subJournalId){
		data = 'subJournalId='+subJournalId;
		$.ajax({
			url: 'da/journalDA/getSubJourMov',
			data: data,
			type: 'post',
			success: function(json) {
				$scope.$apply(function () {
					for(x in JSON.parse(json)){
						$scope.subJournalMov[$scope.subJournalMovCont] = JSON.parse(json)[x];
						$scope.subJournalMovCont += 1;
					}
				});
			}
		});
	};
	
	$scope.init = function(){
		$scope.getCompany();
		$scope.valGeneralJournal();
		$scope.getCompanyAssets();
	};

	$scope.subJournalSum1=[];
	$scope.subJournalSum2=[];
	$scope.sumMov = function(index, side, ammount){
		if(side==1){
			if($scope.subJournalSum1[index]==undefined){
				$scope.subJournalSum1[index]=parseInt(ammount);
			}else{
				$scope.subJournalSum1[index]+=parseInt(ammount);
			}
			
		}else if(side==2){
			if($scope.subJournalSum2[index]==undefined){
				$scope.subJournalSum2[index]=parseInt(ammount);
			}else{
				$scope.subJournalSum2[index]+=parseInt(ammount);
			}
		}
		setTimeout(function(){
			$scope.$apply(function () {
				$scope.subJournalSum1[index]=$scope.subJournalSum1[index];
				$scope.subJournalSum2[index]=$scope.subJournalSum2[index];
			});
		}, 3000);
	}

	$scope.totalMovimiento=0;
	$scope.sumaMovimiento = function(index, side, cantidad){
		console.log(index);
		console.log($scope.subJournalSum1[index]);
	};


	$scope.getTotal = function(cantidad){
		return cantidad;
	};

	$scope.getTotalGeneral = function(tipo){
		if(tipo=='debe'){
			var doc = document.getElementsByName('totalDebe[]');
			var cont=0;
			for(d in doc){
				try{
					if(doc[d].getAttribute('val')!='NaN'){
						cont += parseInt(doc[d].getAttribute('val'));
					}
				}catch(e){

				}
			}
			return cont;
		}else if(tipo=='haber'){
			var doc = document.getElementsByName('totalHaber[]');
			var cont=0;
			for(d in doc){
				try{
					if(doc[d].getAttribute('val')!='NaN'){
						cont += parseInt(doc[d].getAttribute('val'));
					}
				}catch(e){

				}
			}
			return cont;
		}
	};
	$scope.insertAmmountDebe=0;
	$scope.insertAmmountHaber=0;
	$scope.parseFloat = parseFloat;

	$scope.saveSubJournal = function(subJournal, compAsset, ammount){
		var form = document.createElement('form');
		var inputSubJournal = document.createElement('input');
		var inputAsset = document.createElement('input');
		var inputAmmount = document.createElement('input');
		

		form.method = 'POST';
		form.action = '';

		inputSubJournal.value = subJournal.SJO_ID;
		inputSubJournal.name = 'subJournalMov';
		form.appendChild(inputSubJournal);


		inputAsset.value = compAsset.CAS_ID;
		inputAsset.name = 'compAsset';
		form.appendChild(inputAsset);


		inputAmmount.value = ammount;
		inputAmmount.name = 'ammount';
		form.appendChild(inputAmmount);
		
		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		$.ajax({
			url: 'da/journalDA/newSubJournalMov',
			data: str,
			type: 'post',
			success: function() {
				location.reload();
			}
		});
	};

	$scope.addJournal = function(journal){
		var jo=0;
		if(journal.length!=0){
			jo=journal.length-1
		}

		var form = document.createElement('form');
		var generalJournal = document.createElement('input');
		var order = document.createElement('input');
		
		form.method = 'POST';
		form.action = '';

		generalJournal.value = journal[jo].GJO_ID;
		generalJournal.name = 'generalJournalId';
		form.appendChild(generalJournal);

		order.value = parseInt(journal[jo].JO_ORDER)+1;
		order.name = 'order';
		form.appendChild(order);
		
		//TODO: hacer una validacion en caso de que llegue vacio
		document.body.appendChild(form);

		var str = $( "form" ).serialize();

		$.ajax({
			url: 'da/journalDA/newJournal',
			data: str,
			type: 'post',
			success: function(algo) {
				location.reload();
			}
		});
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

