<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(Request $request): View
    {
        $request->validate([
            'name' => 'string|regex:/^[A-Za-z]+$/u'
        ]);

        $name = $request->get('name');

        return view("services.index", ['name' => $name]);
    }

    public function view(string $name)
    {

        return (ctype_upper($name) || ctype_lower($name))
            ? view("services.view", ["name" => $name])
            : redirect()->route("services.index");
    }
}
