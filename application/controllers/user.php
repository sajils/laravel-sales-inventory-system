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

        Asset::add('dataTables', 'js/jquery.dataTables.min.js');
        Asset::add('all_users', 'js/all_users.js');

        $this->layout->with('page_title', $this->page_title)
                     ->content = View::make('users.all');
    }

    // Generates JSON output for Users DataTable
    public function post_all()
    {
        $users = User::select(array('id', 'username', 'email', 'status', 'created_at', 'updated_at'));

        return Datatables::of($users)
                    ->add_column('&nbsp;',View::make('snippets.user_table_actions')
                    ->render())->make();
    }

    public function post_login()
    {
        return Redirect::to_route('dashboard');
    }

    public function get_logout()
    {
        return Redirect::to_route('login');
    }

    public function post_register()
    {

        $v = User::validate(Input::all());

        if ($v->fails()) {
            return Redirect::to_route('register')
                   ->with_errors($v)
                   ->with_input(); 
        }

        User::create(array(
            'username' => Input::get('username'),
            'password' => Hash::make(Input::get('password'))
        ));

        $user = User::where_username(Input::get('username'))->first();
        Auth::login($user);

        return Redirect::to_route('dashboard')
               ->with('message', 'Successfully logged in!');

    }

} // class User_Controller