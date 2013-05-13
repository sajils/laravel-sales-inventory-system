<?php

class Home_Controller extends Base_Controller {

	public function action_dashboard()
	{
		$this->page_title .= " - Dashboard";   

        $this->layout->with('page_title', $this->page_title)
                     ->content = View::make('dashboard.index', $this->data);
	}
}