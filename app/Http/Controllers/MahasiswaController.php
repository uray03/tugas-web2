<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    public function create() {
        return view('mahasiswa.create');
    }

    public function store(Request $request) {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function edit($id) {
        $mhs = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mhs'));
    }

    public function update(Request $request, $id) {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id) {
        Mahasiswa::destroy($id);
        return back();
    }
}
