<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonController extends Controller
{
    public function index()
    {
    	$users = User::find(\Session::get('id'));
        return view('home.person.index',compact('users'));
    }

}
