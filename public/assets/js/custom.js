function color(monster){
	var color_val = $('#color_'+monster).val();
	$('#color_span_'+monster).fadeIn(400).text('Color Code : '+color_val);
}