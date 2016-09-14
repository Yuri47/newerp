<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Clients;

class ClientController extends Controller
{
    //


	public function newClient(Request $req) {
		$client = $req->except('id');
		//Clients::create($client);
		return $client;

	}








}
