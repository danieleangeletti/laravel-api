<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Contact;

// Form requests
use App\Http\Requests\Contact\StoreRequest as ContactStoreRequest;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request)
    {
        $contact = Contact::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Contact saved successfully',
        ]);
    }
}
