$(document).ready(function() {
	




	let inProcess = false;
	$('.item_add').on('click', '', function() {
		if(inProcess == true) return false;
		
		inProcess = true;

		let currentButton = $(this);

		let itemID = $(this).attr("data-id");
		console.log(itemID);


		$.ajax({
			url: '/local/ajax/addItem.php',
			type: 'POST',
			dataType: 'text',
			data: {do_add: 1, itemID: itemID},
		})
		.done(function(data) {
			data = $.parseJSON(data);

			console.log(data);

			if(data !== false) {
				// header
				$.each(data, function(index, val) {
					$('.header-cart a:last').html(data.totalPrice+" руб. (Кол-во: "+data.cntBasket+")");
				});


				if(currentButton.hasClass('home_item_add')) {
					currentButton.parent().html('<a class="home_item_add" href="#" onclick="return false;"><i style="opacity: 0.3;"></i></a>');
				} else {
					currentButton.parent().html('<a href="#" class="add-cart" onclick="return false;" style="opacity: 0.3;">ADD TO CART</a> ');
				}



				
				// buttons
					// single item
				// $(this).removeClass('item_add').css('opacity', 0.3);
				// 	// home item
				// $(this).removeClass('item_add').find('i').css('opacity', 0.3);






			}


			console.log(data);

			inProcess = false;
		})
	});




});