<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/movies/{{ $id }}/update" method="POST">
        @csrf
        <label for="title">Movie:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $task['title']) }}" required>
        <button type="submit">Save Changes</button>
    </form>

    <a href="/">Back to List</a>
</body>
</html>
