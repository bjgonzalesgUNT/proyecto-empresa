<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(Request $request): View
    {

        $request->validate([
            'name' => 'string|regex:/^[A-Za-z]+$/u'
        ]);

        $name = $request->get('name');

        return view("projects.index", ['name' => $name]);
    }
}
