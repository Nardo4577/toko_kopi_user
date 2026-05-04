<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'content' => view('v_home')
        ];
        return view('v_home', $data);
    }
}
