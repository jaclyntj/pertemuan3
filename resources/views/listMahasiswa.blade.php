@extends('template.mastertemplate')

@section('title', 'List Profil Mahasiswa')

@section('content')
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table>
    <tr>
        <th>Nama</th>
        <th>Jurusan</th>
    </tr>
    @foreach ($mhs as $detailMhs)
    <tr><td>   {{$detailMhs['nama']}} </td><td> {{$detailMhs['jurusan']}} </tr>
    @endforeach
</table>
@endsection