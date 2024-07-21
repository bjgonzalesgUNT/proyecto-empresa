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
        $contacts = Contact::paginate(10);
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
        Mail::to($request->email)->send(new MessageReceived($request->all()));
        return redirect()->route('contacts.index')->with('success', 'Message sent successfully');
    }
}
