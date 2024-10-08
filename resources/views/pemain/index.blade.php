<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemain</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pemain Manchester United</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pemain</th>
                    <th>No Punggung</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemain as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nama_pemain }}</td>
                        <td>{{ $p->no_punggung }}</td>
                        <td>{{ $p->posisi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
</body>
</html>

