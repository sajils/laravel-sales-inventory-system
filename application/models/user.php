<?php

class User extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public static $table = 'users';

    public static $rules = array(
        'username' => 'required|unique:users|alpha_dash|min:4',
        'password' => 'required|alpha_num|between:4,8|confirmed',
        'password_conf' => 'required|alpha_num|betweek:4,8'
    );

}