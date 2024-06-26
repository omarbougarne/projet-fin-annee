<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>LaraGigs | Find Laravel Jobs & Projects</title>
    </head>
    <body class="mb-48">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
            <p class="mb-4">Log into your account to post gigs</p>
          </header>

          <form method="POST" action="/users/authenticate">
            @csrf

            <div class="mb-6">
              <label for="email" class="inline-block text-lg mb-2">Email</label>
              <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

              @error('email')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-6">
              <label for="password" class="inline-block text-lg mb-2">
                Password
              </label>
              <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                value="{{old('password')}}" />

              @error('password')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-6">
              <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Sign In
              </button>
            </div>

            <div class="mt-8">
              <p>
                Don't have an account?
                <a href="/register" class="text-laravel">Register</a>
              </p>
            </div>
          </form>
    </body>
</html>
