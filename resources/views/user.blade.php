<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORM</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Level ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
        </tr>
        @foreach ($data as $pengguna)
            <tr>
                <td>{{ $pengguna->user_id }}</td>
                <td>{{ $pengguna->username }}</td>
                <td>{{ $pengguna->nama }}</td>
                <td>{{ $pengguna->level_id }}</td>
                <td>{{ $pengguna->level->level_kode }}</td>
                <td>{{ $pengguna->level->level_nama }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>