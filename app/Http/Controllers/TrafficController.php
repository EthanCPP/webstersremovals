<?php

namespace App\Http\Controllers;

use Request;

class TrafficController extends Controller
{
    public function index() 
    {
    	$ip = Request::ip();
    	$visit_time = time();

    	$insert_new = true;

    	try {
    		$traffic_users = \App\Traffic::where('ip', $ip)->first();

    		foreach (\App\Traffic::where('ip', $ip)->get() as $traffic_user) {
    			if ($traffic_user->visit_time + (30 * 24 * 60 * 60) >= $visit_time) {
    				$insert_new = false;
    			}
    		}
    	}
    	catch (ModelNotFoundException $e)
    	{
    		$insert_new = true;
    	}

    	if ($insert_new) {
	    	$new_visitor = new \App\Traffic;
	    	$new_visitor->ip = $ip;
	    	$new_visitor->visit_time = $visit_time;
	    	$new_visitor->save();
	    }

    	return view('home.home');
    }
}
