<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New contact</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <main>
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
    </main>
</body>
</html>