<?php

/* 
 * Uses Kirki
 */

class SimplethemeCustomizer extends ExtClass {
	
	private $sections = array();
	public static $views = array();
	public static $panels = array();

	public function __construct() {}

	public function buildWholeSection($sectionId, $panelId, $callableFunction) {
		if(!is_callable($callableFunction)) {
			throw new Exception("Function is not callable!");
		}
	   	$this->sections[$sectionId] = array( 
	   		"panel_id" => $panelId, 
	   		"callable_function" => $callableFunction 
	   	);
	}

	public function addWholeSection($sectionId) {

		if(!is_callable($this->sections[$sectionId]["callable_function"])) { 
			//print_r($this->sections[$sectionId]["callable_function"]);
			//die();
			throw new Exception("There is no section with ${sectionId} ID!");
		}
		$panel_id = $this->sections[$sectionId]["panel_id"];
		$callable_function = $this->sections[$sectionId]["callable_function"];
		call_user_func_array($callable_function, array($sectionId, $panel_id));
	}

	//NEW!!!

	private static function getSectionDataClass($section_id) {
		return str_replace(' ', '', ucwords(str_replace('_', ' ', $section_id)));
	}

	public static function config() {
		$config_path = SIMPLETHEME_CUSTOMIZER_PATH . '/config.php';
		$config = require_once($config_path);
		Simpletheme_Kirki::add_config(THEME_TEXTDOMAIN, $config);
	}

	public static function requirePanel($panel_id) {
		$file_name  = str_replace('_', '-', $panel_id) . '.php';
		$panel_path = SIMPLETHEME_CUSTOMIZER_PATH . '/panels/' . $file_name;
		$panel_data = require_once($panel_path);
		Simpletheme_Kirki::add_panel($panel_id, $panel_data);
	}

	public static function requireSection($section_id, $panel_id = '', $dependency_sections = array()) {

		global $posts, $post, 
		       $wp_did_header, $wp_query, 
		       $wp_rewrite, $wpdb, 
		       $wp_version, $wp, 
		       $id, $comment, 
		       $user_ID, $simpletheme_views;


		$folder_name     = str_replace('_', '-', $section_id);
		$customizer_path = SIMPLETHEME_CUSTOMIZER_PATH . '/customizer/' . $folder_name . '/' . $folder_name . '.php';
		$view_path       = SIMPLETHEME_CUSTOMIZER_PATH . '/view/' . $folder_name . '/' . $folder_name . '.php';
		$model_path      = SIMPLETHEME_CUSTOMIZER_PATH . '/model/' . $folder_name . '/' . $folder_name . '.php';

		/*
		 * Customizer je neodvisen od modela in viewa. Model in view sta povezana in lahko tudi neodvisna od customizerja
		 */

		if(file_exists( $customizer_path )) {
			require_once( $customizer_path );
		}

		if(!(file_exists( $model_path ) && file_exists( $view_path ))) {
			return;
		}

		require_once( $model_path );

		/* 
		 * Ta class je nujno potreben za delovanje sekcije
		 */
		$data_class = self::getSectionDataClass($section_id);
		
		/*
		 * 1.) Če je sekcija sestavljena oz potrebuje view še podatke od drugih sekcij se "pokliče" 
		 * na pomoč še druge data classe
		 * 2.) Prvo je treba imena sekcij spremenit v class name (od data modelov)
		 * 3.) Drugo je treba filtrirat classname na glede na to če sploh obstajajo
		 * WARNING: dependency sections morajo obstajat oz bit ustvarjene pred to sekctijo!!! Mogoče zato boljši map???
		 */


		$dependency_classes = array_map(function($section_id) {
			if(!array_key_exists($section_id, self::$views)) {
				throw new Exception('Section ' . $section_id . ' does not exist (yet?)!!!');
			}
			return self::getSectionDataClass($section_id);
		}, $dependency_sections);

		//print_r($dependency_sections);

		//print_r($dependency_classes);
		
		self::$views[$section_id] = array(
			'section_id'          => $section_id,
			'panel_id'            => $panel_id,
			'data_class'          => $data_class,
			'dependency_sections' => $dependency_sections,
			'dependency_classes'  => $dependency_classes,
			'view_path'           => $view_path,
			'model_path'          => $model_path,
			'customizer_path'     => $customizer_path,
			'folder_name'         => $folder_name,
			'show_function'       => function($data, $path) {
			   global $posts, $post, 
		       $wp_did_header, $wp_query, 
		       $wp_rewrite, $wpdb, 
		       $wp_version, $wp, 
		       $id, $comment, 
		       $user_ID, $simpletheme_views;
				extract($data);
				require_once($path);
			},
		);

	}

	public static function show($section_id) {
		extract(self::$views[$section_id]);
		/* Ali bi blo smiselno dat predpono v datamodel prej ali onthefly?? */
		$dependency_data = array_reduce(array_map(function($classname){
			return $classname::getData();
		}, $dependency_classes), 'array_merge', array());

		$all_data = array_merge($dependency_data, $data_class::getData());
		//print_r($all_data);
		return $show_function($all_data, $view_path);
	}

} 

$SimplethemeCustomizer = new SimplethemeCustomizer();