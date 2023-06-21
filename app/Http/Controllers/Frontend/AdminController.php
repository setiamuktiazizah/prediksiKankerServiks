<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Admin',
            'navLink' => 'admin'
        ];

        return view('Frontend.pages.admin', $datas);
    }
}