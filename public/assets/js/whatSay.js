$(document).ready(function() {
	

	//Bizim haqda ne deyirler sliderinin scripti

	//Butun textler bir arraya yigilir(db-ya ehtiyac yoxdur)
	var text=['"I know, how well educated and talented these guys are. Best of luck to both of you on your efforts! :)"','"Müasir texnologiyalardan faydalanan təhsil platformasıdır. İngilis dilini öyrənmək və dil biliklərini inkişaf etdirmək istəyən hər kəs dəvətlidir!"','"Silver English komandasında ən çox bəyəndiyim xüsusiyyət kollektivin sırf təcrübəli gənclərdən qurulması və tələbələrlə qurduqları isti münasibət, sadəcə əladır! Hər bir kəsə uğurlar!"','"Mükəmməl kollektiv! Möhtəşəm insanlar! Mütləq yararlanmaq lazımdır! Sona qədər Silver English!"']


	//Sozlerin muelliflerinin sekillerinin sourcelere de bir arraya yigilir
	var imgSrc=['assets/images/aboutUs/arshad.jpg','assets/images/aboutUs/naila.jpg','assets/images/aboutUs/butsi.jpg','assets/images/aboutUs/rauf.jpg']



	$('#whatsayaboutus .circle').click(function(event) {

		var id=$(this).attr('id')//Circle clicklendiyi zaman onun id-si goturulur

		$('#whatsayaboutus .text').text(text[id])//Textin source-si text arrayindan cagirilir
		$('#whatsayaboutus .profile').attr('src', imgSrc[id])//Sekilin source-si imgSrc arrayindan cagirilir

		$('#whatsayaboutus .circle').css({
			background: 'transparent',
			border: '2px solid white',
		});


		$(this).css({
			background: '#7CB342',
			border: '3px solid #7CB342',
		});

	});


});