<?php

namespace App;

class MissingUser extends User
{
    protected static $unguarded = true;

    protected $attributes = [
        'name'  => 'missing name',
        'email' => 'missing email'
    ];
}