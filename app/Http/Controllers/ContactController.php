<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\MessageReceived;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(): View
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create(): View
    {
        $contact = new Contact();
        return view('contacts.create', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return new MessageReceived($request->validated());
    }
}
