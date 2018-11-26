$(document).ready(function() {
	$.ajax({
		url: baseurl + '/get-city',
		type: 'GET',
		dataType: 'JSON',
	})
	.done(function(data) {
		$('#pilih-direktori').append( data.result )
	})
})