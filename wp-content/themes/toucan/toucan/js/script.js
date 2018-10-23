$(document).ready(function ($) {
	
	$('.formsave').submit(function (event) {
		event.preventDefault();

		$username = $('[name=username]').val();
		$email = $('[name=email]').val();

		$.ajax({
			method: "post",
			url: $(this).attr('action'),
			data: $(this).serializeArray(),
		})
		.done(function(){
			$('#exampleModal').modal('hide');
			$('#modal').hide();
		});
			
	});

});