<?php

namespace App\Controllers;



class Error extends BaseController
{
    public function index()
    {
        return view('error/404');
    }
}
