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

		// Add default stylesheets
		Asset::add('bootstrap', 'css/bootstrap.min.css');
		Asset::add('bootstrap-responsive', 'css/bootstrap-responsive.min.css');
		Asset::add('font-awesome', 'css/font-awesome.min.css');
		Asset::add('master', 'css/master.css');
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