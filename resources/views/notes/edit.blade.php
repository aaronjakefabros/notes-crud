<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 30px auto; padding: 20px; }
        input, textarea { width: 100%; padding: 10px; margin: 8px 0; box-sizing: border-box; }
        button { padding: 10px 20px; background: #f39c12; color: white; border: none; border-radius: 4px; cursor: pointer; }
        a { color: #3498db; }
    </style>
</head>
<body>
    <h1>✏️ Edit Note</h1>
    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $note->title }}" required>
        <label>Content:</label>
        <textarea name="content" rows="5">{{ $note->content }}</textarea>
        <br><br>
        <button type="submit">💾 Update</button>
        <a href="{{ route('notes.index') }}">Back to Notes</a>
    </form>
</body>
</html>