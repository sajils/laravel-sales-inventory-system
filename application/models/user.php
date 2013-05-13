<?php

class User extends Basemodel{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public static $table = 'users';

    public static $rules = array(
        'username' => 'required|unique:users|alpha_dash|min:4',
        'email' => 'required|unique:users|email',
        'password' => 'required|alpha_num|between:4,8|confirmed',
        'password_confirmation' => 'alpha_num|between:4,8'
    );

}