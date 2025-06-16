<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Action'],
            ['id' => 2, 'name' => 'Fantasy'],
            ['id' => 3, 'name' => 'Science Fiction'],
            ['id' => 4, 'name' => 'Romance'],
            ['id' => 5, 'name' => 'Horror'],
        ];
    }
}

<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling'],
            ['id' => 2, 'name' => 'George R.R. Martin'],
            ['id' => 3, 'name' => 'Isaac Asimov'],
            ['id' => 4, 'name' => 'Stephen King'],
            ['id' => 5, 'name' => 'Jane Austen'],
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Author;

class DataController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        $authors = Author::all();
        return view('data', compact('genres', 'authors'));
    }
}

use App\Http\Controllers\DataController;

Route::get('/data', [DataController::class, 'index']);

<!DOCTYPE html>
<html>
<head>
    <title>Data Genre & Author</title>
</head>
<body>
    <h2>Genre List</h2>
    <ul>
        @foreach($genres as $genre)
            <li>{{ $genre['id'] }}. {{ $genre['name'] }}</li>
        @endforeach
    </ul>

    <h2>Author List</h2>
    <ul>
        @foreach($authors as $author)
            <li>{{ $author['id'] }}. {{ $author['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>
