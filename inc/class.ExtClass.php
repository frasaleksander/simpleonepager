<?php

if(!class_exists('ExtClass')) {


	class ExtClass extends stdClass {

		protected $data = array();

		public function __set($name, $value) {
			$this->data[$name] = $value;
		}

		public function __get($name) {
	        if (array_key_exists($name, $this->data)) {
	            return $this->data[$name];
	        }
	        
	        throw new Exception("Fatal error: Call to undefined property ExtClass::{$name}");
	        
	    } 

	    public function __call($method, $arguments)
	    {
	        if (isset($this->data[$method]) && is_callable($this->data[$method])) {
	            return call_user_func_array($this->data[$method], $arguments);
	        } 
	        
	        throw new Exception("Fatal error: Call to undefined method ExtClass::{$method}()");
	        
	    } 

		public function __isset($name) {
			return isset($this->data[$name]) ? 1 : 0;
		}

		public function __unset($name) {
	        unset($this->data[$name]);
	    } 
	    
	    
	}

}
