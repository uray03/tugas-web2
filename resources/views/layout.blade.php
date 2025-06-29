<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Mahasiswa')</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-teal-600 text-white p-6 space-y-4">
            <h2 class="text-2xl font-bold mb-6">🎓 MahasiswaApp</h2>
            <nav class="space-y-2">
                <a href="/" class="block hover:bg-teal-700 px-4 py-2 rounded">Beranda</a>
                <a href="{{ route('mahasiswa.index') }}" class="block hover:bg-teal-700 px-4 py-2 rounded">Data Mahasiswa</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="bg-white p-6 rounded-lg shadow mb-6 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-gray-800">@yield('title')</h1>
                <div class="text-right text-gray-600">Welcome, Admin</div>
            </div>

            @yield('content')
        </main>
    </div>
</body>
</html>