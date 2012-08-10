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
			"diego-morales"      => array("name" => "Diego Morales", 	  "language" => "es", "flight" => "MORALES-Diego"),
			"sergio-chaparro"    => array("name" => "Sergio Chaparro", 	  "language" => "es", "flight" => "CHAPARRO-Sergio"),
			"lucia-antunez"      => array("name" => "Lucía Antunez", 	  "language" => "es", "gender" => true, "flight" => "ANTUNEZPERCINC-LA-Dalile"),
			"ivan-marcelo"       => array("name" => "Ivan Marcelo Borja", "language" => "es", "flight" => "BORJABORJA-Ivan-Marcelo"),
			"mario-celada"       => array("name" => "Mario Celada", 	  "language" => "es", "flight" => "CELADA-Mario"),
			"jorge-romano"        => array("name" => "Jorge Romano", 	  "language" => "es", "flight" => "ROMANO-Jorge"),
			"jay-kruus"          => array("name" => "Jay Kruus",     	  "language" => "en", "flight" => "KRUUSE-Jay"),
			"elizabeth-missokia" => array("name" => "Elizabeth Missokia", "language" => "en", "flight" => "MISSOKIA-Elizabeth"),
			"john-mutua"		 => array("name" => "John Mutua", 		  "language" => "en", "flight" => "MUTUA-John"),
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
