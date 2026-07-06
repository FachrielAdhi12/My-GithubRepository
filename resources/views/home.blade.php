<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Fachriel</title>
    @vite(['resources/css/style.css'])
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">My Github<span>Repository</span></a>
            <div class="nav-menu">
                <a href="{{ route('home') }}" class="nav-item active">Home</a>
                <a href="{{ route('about') }}" class="nav-item">About Me</a>
                <a href="{{ route('admin.index') }}" class="nav-item admin-link">Admin Panel</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <header>
                <h1>GitHub Projects</h1>
                <p>Kumpulan portofolio yang terintegrasi langsung dari GitHub.</p>
            </header>

            <div class="grid-container">
                @forelse($projects as $project)
                    <div class="card">
                        <div>
                            <h3>{{ $project->name }}</h3>
                            <p class="desc">{{ $project->description ?: 'Tidak ada deskripsi.' }}</p>
                        </div>
                        <div class="card-footer">
                            <span class="badge">{{ $project->language }}</span>
                            <a href="{{ $project->html_url }}" target="_blank" class="btn">Lihat Repo</a>
                        </div>
                    </div>
                @empty
                    <p>Belum ada portofolio. Silakan sync dari panel admin.</p>
                @endforelse
            </div>
        </div>
    </main>

</body>
</html>