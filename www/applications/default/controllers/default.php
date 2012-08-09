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
			"horacio-corti"      => array("name" => "Horacio Corti"),
			"martin-sigal"       => array("name" => "Martín Sigal"),
			"diego-morales"      => array("name" => "Diego Morales"),
			"sergio-chaparro"    => array("name" => "Sergio Chaparro"),
			"jay-kruus"          => array("name" => "Jay Kruus"),
			"elizabeth-missokia" => array("name" => "Elizabeth Missokia")
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
