<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getContent()
    {
        return view('pages/projects');
    }
}
