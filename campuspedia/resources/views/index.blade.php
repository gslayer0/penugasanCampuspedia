@extends('layouts.master')

@section('title', 'Daftar Siswa')

@section('content')

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
            <a href="/siswa/insert" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">+ Tambah Siswa Baru</a>

@stop