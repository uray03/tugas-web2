@extends('layout')
@section('title', 'Data Mahasiswa')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold text-gray-800">📋 Daftar Mahasiswa</h2>
    <a href="{{ route('mahasiswa.create') }}" class="bg-green-500 text-white px-5 py-2.5 rounded-full hover:bg-green-600 transition shadow-md">+ Tambah</a>
</div>
<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="w-full text-left border-separate border-spacing-y-1">
        <thead class="bg-sky-100 text-gray-700">
            <tr class="text-sm font-semibold uppercase">
                <th class="py-3 px-4">No.</th>
                <th class="py-3 px-4">Nama</th>
                <th class="py-3 px-4">NIM</th>
                <th class="py-3 px-4">Jurusan</th>
                <th class="py-3 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-sm text-gray-700">
            @foreach($data as $index => $mhs)
            <tr class="bg-gray-50 hover:bg-gray-100 rounded-md shadow-sm">
                <td class="py-2 px-4">{{ $index + 1 }}</td>
                <td class="py-2 px-4">{{ $mhs->nama }}</td>
                <td class="py-2 px-4">{{ $mhs->nim }}</td>
                <td class="py-2 px-4">{{ $mhs->jurusan }}</td>
                <td class="py-2 px-4 space-x-2">
                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="text-blue-600 hover:underline font-medium">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline font-medium">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection