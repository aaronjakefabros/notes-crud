<!DOCTYPE html>
<html>
<head>
    <title>Add Note</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 30px auto; padding: 20px; }
        input, textarea { width: 100%; padding: 10px; margin: 8px 0; box-sizing: border-box; }
        button { padding: 10px 20px; background: #27ae60; color: white; border: none; border-radius: 4px; cursor: pointer; }
        a { color: #3498db; }
    </style>
</head>
<body>
    <h1>➕ Add Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        <label>Content:</label>
        <textarea name="content" rows="5"></textarea>
        <br><br>
        <button type="submit">💾 Save</button>
        <a href="{{ route('notes.index') }}">Back to Notes</a>
    </form>
</body>
</html>