$(document).ready(function() {
	



	$('.slider-next').on('click', '', function(event) {
		

		let currentSlide = $(".slider-item.slide-active");
		let currentSlideIndex = $('.slider-item.slide-active').index();

		let nextSlideIndex = currentSlideIndex + 1;
		let nextSlide = $('.slider-item').eq(nextSlideIndex);

		currentSlide.removeClass('slide-active');


		if(nextSlideIndex == ($('.slider-item:last').index() + 1)) {
			$('.slider-item').eq(0).addClass('slide-active');
		} else {
			nextSlide.addClass('slide-active');
		}


		


	});


	$('.slider-prev').on('click', '', function(event) {
		
		let currentSlide = $('.slider-item.slide-active');
		let currentSlideIndex = currentSlide.index();

		let prevSlideIndex = currentSlideIndex - 1;
		let prevSlide = $('.slider-item').eq(prevSlideIndex);


		currentSlide.removeClass('slide-active');

		prevSlide.addClass('slide-active');



	});



});