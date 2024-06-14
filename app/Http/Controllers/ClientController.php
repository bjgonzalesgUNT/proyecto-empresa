<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(Request $request): View
    {

        $people = Person::all();
        return view("clients.index", ['people' => $people]);
    }

    public function create(): View
    {
        return view("clients.create");
    }

    public function store(PersonRequest $request)
    {
        Person::create($request->all());
        return redirect()->route("clients.index");
    }
}
