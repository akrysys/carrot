<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public $title = array(
			"getLogin"=>'ログイン'
	);

    /**
     * ログイン画面表示
     * @return Ambigous <\Illuminate\View\View, \Illuminate\Contracts\View\Factory>
     */
    public function getLogin(){

    	return view('user.login');
    }

    /**
     * ログイン処理
     */
    public function postLogin(){
    	//$top = app()->make('TopController');
    	//return $called->getUser();
    	//return view('user.login');
    	return app()->make('Response')->chain('UserController@getList');
    }

    /**
     * 一覧
     * @return Ambigous <\Illuminate\View\View, \Illuminate\Contracts\View\Factory>
     */
    public function getList(){
    	return view('user.list');
    }
}
