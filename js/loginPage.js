$(document).ready(function() {
	$('#log-pad').click(function(event) {
		var $logPad = $(this).parent();
		$logPad.toggleClass('action');
	});
});