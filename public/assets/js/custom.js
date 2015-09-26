function color(monster){
	var color_val = $('#color_'+monster).val();
	$('#color_span_'+monster).fadeIn(400).text('Color Code : '+color_val);

	if(monster == 1){
		$('#monster-inc').css('background-color',color_val);
		$('.top').css('border-top-color',color_val);
		$('head').append('<style>.m:after,.m:before{border-top-color:'+ color_val+' !important;}</style>');
		$('head').append('<style>.bottom:after,.bottom:before{border-bottom-color:'+ color_val+' !important;}</style>');
	}else if(monster == 2){
		$('.m').css('background-color', color_val);
	}else if(monster == 3){
		$('.eye .up').css('background-color', color_val);
		$('.eye .down').css('background-color', color_val);
	}else if(monster == 4){
		$('.eye .up .iris').css('background-color', color_val);
		$('.eye .down .iris').css('background-color', color_val);
	}
}