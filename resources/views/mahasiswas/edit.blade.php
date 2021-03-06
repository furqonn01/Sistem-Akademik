@extends('welcome')

@section('main')
<div id="input_mahasiswa" class="container table-bordered">
    <h2 class="text-center">
        Edit Data Mahasiswa
    </h2>
{!! Form::model($mahasiswa, ['method' => 'PATCH', 'action' => ['MahasiswaController@update', $mahasiswa->id]]) !!}
    <div class="form-group">
        {!! Form::label('nim','NIM:',['class'=>'control-label'])!!}
        {!! Form::text('nim',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('nama','Nama Mahasiswa:',['class'=>'control-label'])!!}
        {!! Form::text('nama',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('tanggal_lahir','Tanggal Lahir:',['class'=>'control-label'])!!}
        {!! Form::date('tanggal_lahir', !empty($mahasiswa)?
        $mahasiswa->tanggal_lahir->format('y-m-d'):null,
        ['class'=>'form-control','id'=>'tanggal_lahir'])!!}
    </div>
    <div class="form-group">h2>
        <table class="table table-striped">

        {!! Form::label('jenis_kelamin','Jenis Kelamin:',['class'=>'control-label'])!!}
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin','L')!!}Laki-Laki</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin','P')!!}Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit('Update',['class'=>'btn btn-primary form-control'])!!}
    </div>
    {!!Form::close()!!}
</div>
@endsection
@section('footer')
<div id="footer" class="text-muted">
    <p class="text-muted text-center">&copy; Polines 2020</p>
</div>
@endsection
