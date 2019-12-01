@extends('layouts.master')

@section('title', 'Data yang Disunting')

@section('content')
    <br>
        <a href="/siswa" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali</a>
        <br>
        <br>
        @foreach($siswa as $s)
        <form name="myForm" action="/siswa/update" onsubmit="return (validate())" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$s->id}}"><br>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{$s->nama}}" aria-describedby="namaHelp" required="required">
            <small id="namaHelp" class="form-text text-muted">contoh : Rizky Alif</small>
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$s->email}}" aria-describedby="emailHelp" required="required">
            <small id="emailHelp" class="form-text text-muted">contoh : ririsakbar@mail.com</small>
        </div>
        <div class="form-group">
            <label for="nomor_hp">Nomor HP</label>
            <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" value="{{$s->nomor_hp}}" aria-describedby="nohpHelp" required="required">
            <small id="nohpHelp" class="form-text text-muted">contoh : 08166798976122</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @endforeach
@stop