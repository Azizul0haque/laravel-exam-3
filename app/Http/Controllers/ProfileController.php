<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($id){

        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false; 
        $httpOnly = true;

        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        return response()->json($data)->withCookie($cookie);
    }
}
