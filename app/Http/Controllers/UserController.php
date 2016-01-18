<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @Get("login")
     * @return string
     */
    public function login(){
    	return 'user.login';
    }


}
