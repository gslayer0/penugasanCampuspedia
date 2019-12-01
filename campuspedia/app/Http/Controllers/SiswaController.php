<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->get();

        return view('index',['siswa' => $siswa]);
    }

    public function insert()
    {
        return view('insert');
    }

    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email
        ]);

        return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = DB::table('siswa')->where('id',$id)->get();

        return view('edit', ['siswa'=> $siswa]);
    }
    public function update(Request $request)
    {
        DB::table('siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email
        ]);

        return redirect('/siswa');
    }

    public function delete($id)
    {
        DB::table('siswa')->where('id',$id)->delete();

        return redirect('/siswa');
    }
}
