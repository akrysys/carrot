<?php

namespace App\Libs;

use Illuminate\Routing\ResponseFactory;

class Response extends ResponseFactory
{

	public function chain($controller){
		$chains = explode('@', $controller);
		$controller_pkg = "App\Http\Controllers\\";
    	$chain = app()->make($controller_pkg.$chains[0]);
    	return $chain->{$chains[1]}();
	}
}