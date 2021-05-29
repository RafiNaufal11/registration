<?php

namespace App\Controllers;

class Comics extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Comic lists'
        ];
        return view('comics/index', $data);
    }
}
