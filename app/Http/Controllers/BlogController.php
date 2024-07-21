<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('blogs.index');
    }
}
