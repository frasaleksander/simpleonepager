<?php

/* 
 * Uses Kirki
 */

class SimplethemeCustomizer extends ExtClass {
	
	private $sections = array();

	public function __construct() {}

	public function buildWholeSection($sectionName, $callableFunction) {
		if(!is_callable($callableFunction)) {
			return null;
		}
	   	$this->sections[$sectionName] = $callableFunction;
	}

	public function addWholeSection($sectionName) {
		if(!is_callable($this->sections[$sectionName])) { 
			return null;
		}
		call_user_func_array($this->sections[$sectionName], array());
	}

} 

$SimplethemeCustomizer = new SimplethemeCustomizer();