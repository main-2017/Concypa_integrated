// Carga dinámica de Slider
$(document).ready(function(){
	$.ajax({
		url: 'controllers/loadSlider.php',
		type: 'POST',
		dataType: 'html',
		
	})
	.done(function(answer) {
		console.log("success");
		$("#slider-top").html(answer);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});

	$.ajax({
		url: 'controllers/loadProjects.php',
		type: 'POST',
		dataType: 'html',
		
	})
	.done(function(serverAnswer) {
		console.log("success");
		$("#proyectosCurso").html(serverAnswer);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});

	$.ajax({
		url: 'controllers/loadEndingProjects.php',
		type: 'POST',
		dataType: 'html',
		
	})
	.done(function(serverResp) {
		console.log("success");
		$("#proyectosTerminados").html(serverResp);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
	
	
});
