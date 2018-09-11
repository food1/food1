<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonController extends Controller
{
    public function index()
    {
    	// $users = new User;
    	$users = User::find(\Session::get('id'));
    	// $user -> user_password = Hash::make($request->user_password);
        return view('home.person.index',compact('users'));
    }

}
