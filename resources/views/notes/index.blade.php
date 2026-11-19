<!DOCTYPE html>
<html>
<head>
    <title>Notes</title>
    <style>
        body { font-family: Arial; max-width: 700px; margin: 30px auto; padding: 20px; }
        .btn { padding: 8px 14px; background: #3498db; color: white; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
        .btn-danger { background: #e74c3c; }
        .btn-edit { background: #f39c12; }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 6px; }
        input, textarea { width: 100%; padding: 8px; margin: 5px 0; box-sizing: border-box; }
    </style>
</head>
<body>
    <h1>📝 Notes</h1>
    <a href="{{ route('notes.create') }}" class="btn">+ Add Note</a>
    <hr>

    @forelse($notes as $note)
        <div class="card">
            <h3>{{ $note->title }}</h3>
            <p>{{ $note->content }}</p>
            <small>Created: {{ $note->created_at->format('M d, Y h:i A') }}</small>
            <br><br>
            <a href="{{ route('notes.edit', $note) }}" class="btn btn-edit">✏️ Edit</a>
            <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this note?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">🗑️ Delete</button>
            </form>
        </div>
    @empty
        <p>No notes yet. Add one to get started!</p>
    @endforelse
</body>
</html>