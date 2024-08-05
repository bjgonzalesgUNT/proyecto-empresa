<?php

namespace App\Http\Controllers;

use App\Events\ClientSaved;
use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ClientController extends Controller
{
    public function index(): View
    {
        $people = Person::paginate(10);
        return view("clients.index", compact("people"));
    }

    public function create(): View
    {
        $person = new Person();
        return view("clients.create", compact("person"));
    }

    public function store(PersonRequest $request)
    {
        $newPerson = new Person();
        $newPerson->fill($request->validated());

        $newPerson->image = $request->file("image")->store("images", 'public');

        $newPerson->save();

        $manager = new ImageManager(new Driver());

        $image = $manager->read(public_path('storage/' . $newPerson->image))->scale(width: 600, height: 600)->colorize(0, 0, 0)->encode();

        Storage::put($newPerson->image, (string) $image);

        ClientSaved::dispatch($newPerson);

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
        $client->fill($request->validated());

        if ($request->hasFile("image")) {
            Storage::delete($client->image);
            $client->image = $request->file("image")->store("images", 'public');

            $manager = new ImageManager(new Driver());

            $image = $manager->read(public_path('storage/' . $client->image))->scale(width: 600, height: 600)->colorize(0, 0, 0)->encode();

            Storage::put($client->image, (string) $image);

            ClientSaved::dispatch($client);
        }

        $client->save();

        return redirect()->route("clients.index");
    }

    public function destroy(Person $client)
    {
        Storage::delete($client->image);
        $client->delete();
        return redirect()->route("clients.index");
    }
}
