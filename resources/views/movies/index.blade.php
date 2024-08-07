<!DOCTYPE html>
<html>
<head>
    <title>Laravel Movies List</title>
</head>
<body>
    <h1>Laravel Movies List</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/movies" method="POST">
        @csrf
        <label for="title">movie:</label>

        @if (isset($singlemovie))
        <input type="text" id="title" name="title" value={{ $singlemovie }} required>
        @else
        <input type="text" id="title" name="title" required>

        @endif
        <button type="submit">Add movie</button>
    </form>

    <h2>movie List</h2>
    <ul>


        @forelse ($movies as $id => $movie)
            <li>

                {{ $movie['title'] }}
                <form action="/movies/{{ $id }}/edit" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit">edit</button>
                </form>
                <form action="/movies/{{ $id }}/delete" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </li>
        @empty
            <li>No movies available</li>
        @endforelse



    </ul>
</body>
</html>
