<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Sync GitHub</title>
    @vite(['resources/css/style.css'])
</head>
<body>
    <div class="container admin-panel">
        <h2>Admin Panel</h2>
        
        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert error">{{ session('error') }}</div>
        @endif

        <div class="sync-section">
            <p>Jika portofolio terbaru tidak muncul di halaman utama, klik tombol di bawah ini untuk menarik data terbaru dari GitHub.</p>
            <form action="{{ route('admin.sync') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sync">Sync dengan GitHub Sekarang</button>
            </form>
        </div>

        <hr>
        <h3>Data Saat Ini ({{ $projects->count() }} Project)</h3>
        <ul>
            @foreach($projects as $project)
                <li>{{ $project->name }} ({{ $project->language }})</li>
            @endforeach
        </ul>
        <a href="{{ route('home') }}" class="btn">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>