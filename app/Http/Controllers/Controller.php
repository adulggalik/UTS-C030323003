<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all(); // Get all students
        return view('siswas.index', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'telepon' => 'required|max:15',
            'email' => 'required|email|unique:siswas',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        Siswa::create($request->all()); // Create a new student

        return redirect()->route('siswas.index')->with('success', 'Siswa berhasil ditambahkan!');
    }
}