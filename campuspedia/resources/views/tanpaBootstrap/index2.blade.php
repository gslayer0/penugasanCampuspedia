<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <a href="/siswa/insert"> + Tambah Siswa Baru</a>
            <br>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $s)
                    <tr>
                        <th scope="row">{{$s->id}}</th>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->nomor_hp}}</td>
                        <td>{{$s->email}}</td>
                        <td>
                            <a href="/siswa/edit/{{ $s->id }}">Sunting</a>
                            |
                            <a href="/siswa/delete/{{ $s->id }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>  
</body>
</html>