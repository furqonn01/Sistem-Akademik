@extends('welcome')

@section('main')
<div id="mahasiswa" class="container table-bordered">
    <h2 class="text-center text-muted">Data Mahasiswa</h2>
    <table class="table table-striped">
        <tr>
            <th>NIM</th>
            <td>{{$mahasiswa-> nim}}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{$mahasiswa-> nama}}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{$mahasiswa->tanggal_lahir->format('d-m-y')}}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{$mahasiswa-> jenis_kelamin}}</td>
        </tr>
    </table>
</div>
@endsection

@section('footer')
<div id="footer">
    <p class="text-center text-muted">&copy; Polines 2020</p>
</div>
@endsection
