$(document).ready(function() {
	requirejs(['sweetalert2'], function(swal){
		if($('.alertMessage').length > 0 ){
			var alertMessage = $('.alertMessage');
			var modals = [];
			$.each(alertMessage, function(i, obj){
				var title	= $(obj).attr('data-title');
				var type	= $(obj).attr('data-type');
				var content	= $(obj).attr('data-content');
				modals.push({
					title: title,
					text: content,
					type: type,
					showConfirmButton: true,
					confirmButtonClass: 'btn-default',
					allowOutsideClick: true,
				});
			});
			swal.queue(modals);
		}
	});
});
