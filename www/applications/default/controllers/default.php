<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();
		
		$this->users = array(
			"horacio-corti"      => array("name" => "Horacio Corti", 	  "language" => "es"),
			"martin-sigal"       => array("name" => "Martín Sigal", 	  "language" => "es"),
			"diego-morales"      => array("name" => "Diego Morales", 	  "language" => "es"),
			"sergio-chaparro"    => array("name" => "Sergio Chaparro", 	  "language" => "es"),
			"jay-kruus"          => array("name" => "Jay Kruus",     	  "language" => "en"),
			"elizabeth-missokia" => array("name" => "Elizabeth Missokia", "language" => "en")
		);
	}
	
	public function index($user = FALSE) {
		if($user != FALSE and isset($this->users[$user])) {
			$vars["user"] = $this->users[$user];
			$vars["view"] = $this->view("home", TRUE);
			
			$this->render("content", $vars);
		}
	}
	
	/*
	horacio-corti      => Horacio Corti
	martin-sigal       => Martín Sigal
	diego-morales      => Diego Morales
	sergio-chaparro    => Sergio Chaparro
	jay-kruus          => Jay Kruus
	elizabeth-missokia => Elizabeth Missokia 
	*/
}
