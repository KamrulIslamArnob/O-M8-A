<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare your variables and assign the values stated in the Question
        $name = "Donald Trump";
        $age = "75";

        // Add three variables in $data variable as an associative array with values stated in the question
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        // Set your cookie variables stated in the question
        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Add the return statement with the response method along with $data and status-code
        // and set the cookie stated in the question.
        return response($data, 200)->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}

