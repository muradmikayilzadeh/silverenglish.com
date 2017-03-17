$(document).ready(function() {


		var imgSrc=['assets/images/sliderImg/1.jpg','assets/images/sliderImg/2.jpg','assets/images/sliderImg/3.jpg']

		$('#slider .circle').click(function(event) {
			
			var id=$(this).attr('id')


			$('#slider').css({
				background: 'url('+imgSrc[id]+') no-repeat',
				backgroundSize: 'cover'
			})
		

			$('#slider .circle').css({
				background: 'transparent',
			})


			$(this).css({
				background: 'white',
			})

		});


});