@extends('layouts.master')

@section('title', 'Data Baru')

@section('content')
    <br>
        <a href="/siswa" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali</a>
        <br>
        <br>
        <!-- <form name="myForm" action="/siswa/store" onsubmit="return (validate())" method="post">
            {{csrf_field()}}
            Nama <input type="text" name="nama" id="" required="required"><br>
            Nomor HP <input type="text" name="nomor_hp" id="" required="required"><br>
            Email <input type="text" name="email" id="" required="required"><br>
            <input type="submit" value="Simpan">
        </form> -->

        <form name="myForm" action="/siswa/store" onsubmit="return (validate())" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaHelp" required="required">
            <small id="namaHelp" class="form-text text-muted">contoh : Rizky Alif</small>
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required="required">
            <small id="emailHelp" class="form-text text-muted">contoh : ririsakbar@mail.com</small>
        </div>
        <div class="form-group">
            <label for="nomor_hp">Nomor HP</label>
            <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" aria-describedby="nohpHelp" required="required">
            <small id="nohpHelp" class="form-text text-muted">contoh : 08166798976122</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@stop