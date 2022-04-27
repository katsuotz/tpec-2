<?php

namespace App\Controllers;

class Backend extends BaseController
{
    public function index()
    {
        return view('admin/home');
    }

    public function about()
    {
        $data = [
            'title' => 'About',
        ];

        return view('about', $data);
    }

    public function baru()
    {
        echo "method baru";
    }
}
