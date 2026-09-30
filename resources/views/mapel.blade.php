<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Pelajaran</title>
</head>
<body>
    <h1>Daftar Mata Pelajaran</h1>
    <ul>
        @foreach($mapel as $m)
            <li>{{ $m }}</li>
        @endforeach
    </ul>
</body>
</html>