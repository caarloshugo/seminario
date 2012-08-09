$(document).ready( function() {
	$(".section").hide();
	
	
	/*Info*/
	$(".info-icon").click( function() {
		$(".trabajar-icon").slideUp("slow");
		
		$(".documentos-icon").slideUp("slow", function() {
			$(".info").slideDown("slow");
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
		$(".info-icon").slideUp("slow");
		$(".documentos-icon").slideUp("slow", function() {
			$(".trabajar").slideDown("slow");
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
		$(".info-icon").slideUp("slow");
		
		$(".trabajar-icon").slideUp("slow", function() {
			$(".documentos").slideDown("slow");
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
