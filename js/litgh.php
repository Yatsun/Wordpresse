<?php	
function malightbox(){
	$("").click(fu nction (e){ // e => event
		e.preventDefault();
		$("body").prepend('<div id="conteneur"><div id="imagebox"><img id="image" src="'+$(this).attr('href')+'"></div></div>');
		$("#conteneur").css({
			"position" : "absolute",
			"top" : "0px",
			"left" : "0px",
			"height" : "100%",
			"width" : "100%",
			"background-color" : "#95a5a6"
		});
	});
}

function remove(){
	.click(function(){
		$("#conteneur").remove();
	});
}

function respond(){
	$("#image").load(function(){
		var topDiv = ($(document).height()/2)-($('#image').height()/2);
		var leftDiv = ($(document).width()/2)-($('#image').width()/2);

		$('#imagebox').css({
			"padding" : "0px",
			"margin" : "0px",
			"height" : $('#image').height(),
			"width" : $('#image').width(),
			"position" : "relative",
			"top" : topDiv,
			"left" : leftDiv,
			"border" : "5px solid",
			"border-color" : "#FFF"
		});
	});
}