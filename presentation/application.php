<?php
// Reference Smarty library
require_once SMARTY_DIR . 'Smarty.class.php';

/* Class that extends Smarty, used to process and display Smarty files */
class Application extends Smarty
{
	// Class constructor
	public function __construct()
	{
		// Call Smarty's constructor
		parent::__construct();

		// Change the default template directories
		$this->template_dir = TEMPLATE_DIR;
		$this->compile_dir 	= COMPILE_DIR;
		$this->config_dir 	= CONFIG_DIR;
		$this->setPluginsDir(SMARTY_DIR . 'plugins');
		$this->setPluginsDir(PRESENTATION_DIR . 'smarty_plugins');
	}
}