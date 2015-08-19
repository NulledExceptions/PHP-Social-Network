$(document).ready(function() {
	
	var thumb = $('#pic_thumb');
	
	new AjaxUpload('ad3_fu', {
		action: $('#file_upload').attr('action'),
		name:'image',
		onSubmit: function(file, extension) {
			$('pic_thumb').addClass('loading');
		},
		onComplete: function(file, response) {
			thumb.load(function() {
				$('#pic_thumb').removeClass('loading');
				thumb.unbind();
			});
			thumb.attr('src', response);
		}
	});
});