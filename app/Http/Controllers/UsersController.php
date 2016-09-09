<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    //

	public function showUsers() {

		$users = User::all();

		return view('usuarios', ['tst' => 'tst'])->with(compact('users'));
	}


}
