$(document).ready(function() {
	

	$('#country').on('change', function () {
		let iBlock_id = $(this).val();



		$.ajax({
			url: '/selection/ajax.php',
			type: 'POST',
			dataType: 'text',
			data: {do_select: 1, iBlock_id: iBlock_id},
		})
		.done(function(data) {
			data = $.parseJSON(data);
			
			if(data != false) {
				$('#city').html('');

				$.each(data, function(index, val) {
					$('#city').append(val);
				});

			}	
		})
		
		

	});


});