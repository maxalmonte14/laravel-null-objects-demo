<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\MissingUser;

class UserController extends Controller
{
    public function show(int $id)
    {
        return view('users.show')->with('user', User::findOrMissing($id));
    }
}
