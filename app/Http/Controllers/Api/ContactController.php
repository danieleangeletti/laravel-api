<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Contact;

// Form requests
use App\Http\Requests\Contact\StoreRequest as ContactStoreRequest;

// Helpers
use Illuminate\Support\Facades\Mail;

// Mailable
use App\Mail\NewContact;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::to('danieleadmin@gmail.com')->send(new NewContact($contact));

        return response()->json([
            'success' => true,
            'message' => 'Contact saved successfully',
        ]);
    }
}
