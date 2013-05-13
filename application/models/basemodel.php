<?php

class Basemodel extends Eloquent
{
    public static function validate($data)
    {

        $messages = array(
            'required' => ':attribute is required.',
        );

        return Validator::make($data, static::$rules, $messages);
    }
}