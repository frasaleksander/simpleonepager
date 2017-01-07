<?php

/* 
 * Uses Kirki
 */

class SimplethemeCustomizer extends ExtClass {
	
	private $sections = array();

	public function __construct() {}

	public function buildWholeSection($sectionId, $panelId, $callableFunction) {
		if(!is_callable($callableFunction)) {
			die("nop");
		}
	   	$this->sections[$sectionId] = array( 
	   		"panel_id" => $panelId, 
	   		"callable_function" => $callableFunction 
	   	);
	}

	public function addWholeSection($sectionId) {

		if(!is_callable($this->sections[$sectionId]["callable_function"])) { 
			print_r($this->sections[$sectionId]["callable_function"]);
			//die();
			throw new Exception("There is no section with ${sectionId} ID!");
		}
		$panel_id = $this->sections[$sectionId]["panel_id"];
		$callable_function = $this->sections[$sectionId]["callable_function"];
		call_user_func_array($callable_function, array($sectionId, $panel_id));
	}

} 

$SimplethemeCustomizer = new SimplethemeCustomizer();