$(document).ready(function($) {
	
	//Menunun mueyyen mesafe kecenden sonra yuxari fixed olmasi ucun script

	var offset=$(window).scrollTop()//sehifenin gorunen hissesinin yuxaridan olan mesafesini olcur

	$(document).scroll(function(event) {
		offset=$(window).scrollTop()

		//Yuxaridan mesafe sliderin hundurluyunden cox olarsa, menuya activeMenu classi verilsin
		if( offset > $('#banner').height() ){
			$('#menu').addClass('activeMenu')
			$('#menu .fa-bars').css('paddingTop', '15px')
		}else{
			$('#menu').removeClass('activeMenu')
			$('#menu .fa-bars').css('paddingTop', '30px')

		}
	});


});