<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
        @if(auth()->user()->role === 'admin')
            <p>Welcome, Admin!</p>
        @elseif(auth()->user()->role === 'mod')
            <p>Welcome, Moderator!</p>
        @else
            <p>Welcome, User!</p>
        @endif

        <form class="inline" method="POST" action="/logout">
            @csrf
            <button type="submit">
                <i class="fa-solid fa-door-closed"></i> Logout
            </button>
        </form>
    @else
        <li>
            <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
        </li>
        <li>
            <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
        </li>
    @endauth
</body>
</html>
