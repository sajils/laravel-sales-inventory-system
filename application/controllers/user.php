<?php

class User_Controller extends Base_Controller {

    public $restful = true;

    public function __construct()
    {
        parent::__construct();
        $this->page_title .= " :: Users";
    }

    public function get_all_users()
    {
        $this->page_title .= " - All Users";   

        Asset::add('config', 'js/config.js');
        Asset::add('jQuery', 'js/jquery.min.js');
        Asset::add('dataTables', 'js/jquery.dataTables.min.js');
        Asset::add('all_users', 'js/all_users.js');

        $this->layout->with('page_title', $this->page_title)
                     ->content = View::make('users.all');
    }

    public function get_register()
    {
        $this->page_title .= " - Register";

        $this->layout->with('page_title', $this->page_title)
                     ->content = View::make('users.register');
    }

    public function post_all()
    {
        return Response::json(User::get());
    }
}