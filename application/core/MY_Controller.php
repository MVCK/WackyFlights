<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller
{

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();

		//  Set basic view parameters
		$this->data = array ();
		$this->data['pagetitle'] = 'CodeIgniter3.1 Starter 2';
		$this->data['ci_version'] = (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '';
	}

	/**
	 * Render this page
	 */
	function render($template = 'layout/template')
	{
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		$this->data['footer'] = $this->parser->parse($this->data['pagefooter'], $this->data, true);
		$this->data['header'] = $this->parser->parse($this->data['pageheader'], $this->data, true);
		$this->parser->parse('layout/template', $this->data);
	}

}
