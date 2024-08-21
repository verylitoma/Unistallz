<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>
</head>
<body>
    <header>

        <nav>
            <a href=" {{ route("home") }} ">Home</a>

            <div>
                <a href="{{ route("register") }}">Register</a>
            </div>
 
            <div>
                <a href="login">Log-In</a>
            </div>
        </nav>

    </header>
    
    <main>
        {{ $slot }}
    </main>
    
</body>
</html>