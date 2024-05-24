<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowItemRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function index()
    {
        return view("catalog.index");
    }

    public function create(): View
    {
        return view("catalog.create");
    }

    public function show(string $id): View
    {
        return view("catalog.show", ["id" => $id]);
    }
}
