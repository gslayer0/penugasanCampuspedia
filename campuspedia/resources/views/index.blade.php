@extends('layouts.master')

@section('title', 'Daftar Siswa')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif



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
                        <a href="/siswa/delete/{{ $s->id }}" class="btn btn-outline-danger" role="button" aria-pressed="true">Hapus</a>
                        <a href="/siswa/edit/{{ $s->id }}" class="btn btn-outline-warning" role="button" aria-pressed="true">Sunting</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <!-- <a href="/siswa/insert" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">+ Tambah Siswa Baru</a> -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah Siswa Baru
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Siswa Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
                </div>
            </div>
            </div>
@stop