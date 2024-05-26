<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blogs.index');
    }

    public function view(string $id)
    {

        if (!is_numeric($id)) {
            return redirect()->route('blogs.index');
        }

        return view('blogs.view', ['id' => $id]);
    }
}
