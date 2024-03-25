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
        <nav class="flex justify-between items-center mb-4">
            <a href="index.html"
                ><img class="w-24" src="images/logo.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="register.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="login.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>

        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
              <label for="name" class="inline-block text-lg mb-2"> Name </label>
              <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />

              @error('name')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>

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
              <label for="password2" class="inline-block text-lg mb-2">
                Confirm Password
              </label>
              <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
                value="{{old('password_confirmation')}}" />

              @error('password_confirmation')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
                <label for="role">Role</label>
                <select id="role" name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="mod">Moderator</option>
                </select>

            </div>

            <div class="mb-6">
              <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Sign Up
              </button>
            </div>

            <div class="mt-8">
              <p>
                Already have an account?
                <a href="/login" class="text-laravel">Login</a>
              </p>
            </div>
          </form>

    </body>
</html>
