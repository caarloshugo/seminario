$(document).ready( function() {
	$(".section").hide();
	
	
	/*Info*/
	$(".info-icon").click( function() {
		$(".trabajar-icon").hide("slow");
		
		$(".documentos-icon").hide("slow", function() {
			$(".info").show("slow");
		});
	});
	
	$(".info-icon-min").click( function() {
		$(".section").hide();
		$(".trabajar-icon").hide("slow");
		
		$(".documentos-icon").hide("slow", function() {
			$(".info-icon").show();
			$(".info").show("slow");
		});
	});
	
	
	/*Trabajar*/
	$(".trabajar-icon").click( function() {
		$(".info-icon").hide("slow");
		
		$(".documentos-icon").hide("slow", function() {
			$(".trabajar").show("slow");
		});
	});
	
	$(".trabajar-icon-min").click( function() {
		$(".section").hide();
		$(".info-icon").hide("slow");
		
		$(".documentos-icon").hide("slow", function() {
			$(".trabajar-icon").show();
			$(".trabajar").show("slow");
		});
	});
	
	
	/*Documentos*/
	$(".documentos-icon").click( function() {
		$(".info-icon").hide("slow");
		
		$(".trabajar-icon").hide("slow", function() {
			$(".documentos").show("slow");
		});
	});
	
	$(".documentos-icon-min").click( function() {
		$(".section").hide();
		$(".info-icon").hide("slow");
		
		$(".trabajar-icon").hide("slow", function() {
			$(".documentos-icon").show();
			$(".documentos").show("slow");
		});
	});
});
