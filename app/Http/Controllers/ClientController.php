<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $people = Person::all();
        return view("clients.index", ['people' => $people]);
    }

    public function create(): View
    {
        return view("clients.create", ['person' => new Person()]);
    }

    public function store(PersonRequest $request)
    {
        Person::create($request->validated());
        return redirect()->route("clients.index");
    }

    public function show(Person $client): View
    {
        return view("clients.show", ['person' => $client]);
    }

    public function edit(Person $client): View
    {
        return view("clients.edit", ['person' => $client]);
    }

    public function update(PersonRequest $request, Person $client)
    {
        $client->update($request->validated());
        return redirect()->route("clients.index");
    }

    public function destroy(Person $client)
    {
        $client->delete();
        return redirect()->route("clients.index");
    }
}
