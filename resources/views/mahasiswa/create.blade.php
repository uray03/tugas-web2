@extends('layout')
@section('title', 'Tambah Mahasiswa')
@section('content')
<h2 class="text-3xl font-bold text-indigo-700 mb-8">➕ Tambah Mahasiswa</h2>
<form action="{{ route('mahasiswa.store') }}" method="POST" class="bg-white p-8 rounded-xl shadow-lg space-y-6 max-w-2xl">
    @csrf
    <div>
        <label class="block mb-1 font-semibold text-gray-700">Nama</label>
        <input type="text" name="nama" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-400">
    </div>
    <div>
        <label class="block mb-1 font-semibold text-gray-700">NIM</label>
        <input type="text" name="nim" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-400">
    </div>
    <div>
        <label class="block mb-1 font-semibold text-gray-700">Jurusan</label>
        <input type="text" name="jurusan" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-400">
    </div>
    <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-indigo-700 transition shadow">💾 Simpan</button>
</form>
@endsection
