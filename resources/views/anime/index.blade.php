<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Anime List</h1>

        <!-- Form to add new anime -->
        <form action="{{ route('anime.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <!-- Add other fields here -->
            <button type="submit" class="btn btn-primary">Add Anime</button>
        </form>

        <hr>

        <!-- Table to display anime entries -->
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <!-- Add other columns as needed -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anime as $animeEntry)
                    <tr>
                        <td>{{ $animeEntry->title }}</td>
                        <!-- Add other columns as needed -->
                        <td>
                            <a href="{{ route('anime.edit', ['anime' => $animeEntry->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('anime.destroy', ['anime' => $animeEntry->id]) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this anime?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
