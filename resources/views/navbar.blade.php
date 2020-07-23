<nav class="navbar navbar-expand-lg navbar-light alert-dark">
    <a class="navbar-brand" href="#">Sistem Akademik</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="#">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Mahasiswa</a>
            </li>
            @if (!empty($halaman) && $halaman == 'lihat_data_mahasiswa')
            <li class="nav-item active">
                <a class="nav-link" href="{{url('lihat_data_mahasiswa')}}">Data Mahasiswa</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('lihat_data_mahasiswa')}}">Data Mahasiswa</a>
            </li>
            @endif
            @if (!empty($halaman) && $halaman == 'input_mahasiswa')
            <li class="nav-item active">
                <a class="nav-link" href="{{url('input_mahasiswa')}}">Input Data Mahasiswa</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('input_mahasiswa')}}">Input Data Mahasiswa</a>
            </li>
            @endif
            @if (!empty($halaman) && $halaman == 'create')
            <li class="nav-item active">
                <a class="nav-link" href="{{url('create')}}">Input Data Mahasiswa (2)</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('create')}}">Input Data Mahasiswa (2)</a>
            </li>
            @endif

        </ul>
    </div>
</nav>
<br>
