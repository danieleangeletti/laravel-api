@extends('layouts.email-template')

@section('content')
    <h1>
        Hi Daniel!
    </h1>
        
    <p>
        You received a new message from the frontend in Vue
    </p>

    <ul>
        <li>
            Name: {{ $contact->name }}
        </li>
        <li>
            Email: {{ $contact->email }}
        </li>
        <li>
            Message:
            <p>
                {{ $contact->message }}
            </p>
        </li>
    </ul>
@endsection