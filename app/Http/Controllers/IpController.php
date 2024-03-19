<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpController extends Controller
{

    public function index(Request $request)
    {
        if ($request->method() == 'POST'){

            if ($request->api == '' || empty($request->api)){
                return redirect()->back()->with('errors');
            }

            $ipAddress = $request->api;
            $data = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$request->api"));
            return view('api', compact('ipAddress', 'data'));
        }else{
            return view('api');
        }
    }
}
