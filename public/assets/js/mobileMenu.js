$(document).ready(function() {
	

		//Telefon olcusunde menyunun gorunusunu deyismke ucun olan script

		var width=$(window).width();

		if( width < 1200){

			$("#menu .computer").css('display', 'none');
			$("#menu .fa-bars").css('display', 'block');

		}
		
		var a=false

		$('.fa-bars').on('click', function(event) {
			
			if(a==false){

				$('#menu .mobile').css('display', 'block');
				a=true

			}else{

				$('#menu .mobile').css('display', 'none');
				a=false

			}

		});


});