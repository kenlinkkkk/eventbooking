$(document).ready(function () {
	$("#service-table #pickerIcon").iconPicker();
});
function random_code(length) {
	var result           = '';
	var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	var charactersLength = characters.length;
	for ( var i = 0; i < length; i++ ) {
		result += characters.charAt(Math.floor(Math.random() * charactersLength));
	}
	return result;
}


$(window).on('hashchange', function(e){
	history.replaceState ("", document.title, e.originalEvent.oldURL);
});

