var urlBack = '';
function getUrlDataAccess(daName, method){
	$.ajax({
		url: 'da/'+daName+'/'+method,
		type: 'post',
		success: function(json) {
			urlBack = json;
		}
	});
}