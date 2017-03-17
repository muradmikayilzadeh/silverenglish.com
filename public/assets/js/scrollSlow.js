$(document).ready(function (){


		$('#menu ul li').click(function() { 
			
			var target1 = $(this).find('a').attr('href');
			var maintarget=target1.split('#');

			$('html, body').animate({scrollTop: $("#"+maintarget[1]).offset().top}, 1000);
		});   

});