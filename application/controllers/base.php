<?php

class Base_Controller extends Controller {

	public $layout = "layouts.default";
	protected $page_title;

	/*
	 * Data
	 *
	 * Holds all data which are passed to views
	 * 
	 */
	protected $data = array();

	public function __construct()
	{
		$this->page_title = "Sales / Inventory";
		View::share('page_title', $this->page_title); // share the page title to all views

		$this->setupLayout();

		// Add default stylesheets and scripts
		Asset::add('bootstrap', 'css/bootstrap.min.css');
		Asset::add('bootstrap-responsive', 'css/bootstrap-responsive.min.css', 'bootstrap');
		Asset::add('font-awesome', 'css/font-awesome.min.css', 'bootstrap');
		Asset::add('master', 'css/master.css', 'bootstrap');

		Asset::add('config', 'js/config.js');
        Asset::add('jQuery', 'js/jquery.min.js');
		Asset::add('bootstrap-js', 'js/bootstrap.min.js', 'jquery');
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
}