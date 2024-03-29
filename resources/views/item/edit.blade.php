@extends('layouts.app')

@section('content')
    <div class="p-4 justify-center">
        <h1 class="text-3xl font-bold text-center">
            Manajemen Inventori - Edit Barang
        </h1>
    </div>
    <div class="align-center bg-slate-100 rounded-md w-auto p-4">
        <form action="{{ route('item.update', ['id' => $item->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="namaBarang" class="block text-gray-700 text-sm font-semibold mb-2">Nama Barang:</label>
                <input type="text" name="namaBarang" id="namaBarang" class="border rounded w-full py-2 px-3" value="{{ $item->namaBarang }}" required>
            </div>

            <div class="mb-4">
                <label for="jenisBarang" class="block text-gray-700 text-sm font-semibold mb-2">Jenis Barang:</label>
                <input type="text" name="jenisBarang" id="jenisBarang" class="border rounded w-full py-2 px-3" value="{{ $item->jenisBarang }}" required>
            </div>

            <div class="mb-4">
                <label for="jumlahBarang" class="block text-gray-700 text-sm font-semibold mb-2">Jumlah Barang:</label>
                <input type="number" name="jumlahBarang" id="jumlahBarang" class="border rounded w-full py-2 px-3" value="{{ $item->jumlahBarang }}" required>
            </div>

            <div class="mb-4">
                <label for="tanggalMasukBarang" class="block text-gray-700 text-sm font-semibold mb-2">Tanggal Masuk Barang:</label>
                <input type="date" name="tanggalMasukBarang" id="tanggalMasukBarang" class="border rounded w-full py-2 px-3" value="{{ $item->tanggalMasukBarang }}" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Update Barang</button>
        </form>
    </div>
@endsection
