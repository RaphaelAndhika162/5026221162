<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('datakaryawan', compact('karyawan'));
    }

    public function create()
    {
        return view('tambahkaryawan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|unique:karyawan|size:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|size:5',
            'departemen' => 'required|integer',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        Karyawan::where('kodepegawai', $id)->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil dihapus!');
    }
}
