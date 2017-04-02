$('#item').click(function(event) {
									
	var src = $(this).find('video').attr('src');

	// Arxa fonun qaralmasi
	$('body').append('<div class="black"></div>')
	$('.black').height($(window).height())

	var player='<video width="640px" height="360px" id="mainVideo" controls autoplay><source src='+src+' type="video/mp4"></video>'
	
	$('html').append(player)

	$('.black').click(function(event) {
		location.reload()
	});

});