<html>
    <head>
        <title>List Profil Mahasiswa</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
            <th>Nama</th>
            <th>Jurusan</th>
            </tr>
            @foreach ($mhs as $detailMhs)
            <tr><td>   {{$detailMhs['nama']}} </td><td> {{$detailMhs['jurusan']}} </tr>
            @endforeach
        </table>
    </body>
</html>