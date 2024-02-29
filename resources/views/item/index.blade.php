@extends('layouts.app')

@section('content')
<div class="p-4 justify-center">
    <h1 class="text-3xl font-bold text-center">
        Manajemen Inventori
    </h1>
    <div class="text-center mt-4">
        <a href="{{ route('item.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Tambah Barang</a>
    </div>
</div>
<div class="text-center bg-slate-100 rounded-md">
    <div class="w-auto p-4 mx-auto">
        <table class="bg-white rounded-md p-4 mx-auto">
            <thead class="bg-blue-700 rounded-md">
                <tr>
                    <th class="px-5 py-4 font-medium text-white">Nama Barang</th>
                    <th class="px-5 py-4 font-medium text-white">Jenis Barang</th>
                    <th class="px-5 py-4 font-medium text-white">Jumlah Barang</th>
                    <th class="px-5 py-4 font-medium text-white">Tanggal Masuk Barang</th>
                    <th class="px-5 py-4 font-medium text-white">Actions</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach ($item as $item)
                    <tr class="border-solid border-2 border-sky-200 rounded-sm p-1">
                        <td class="px-5 py-4 font-medium text-gray-700">{{ $item->namaBarang }}</td>
                        <td class="px-5 py-4 font-medium text-gray-700">{{ $item->jenisBarang }}</td>
                        <td class="px-5 py-4 font-medium text-gray-700">{{ $item->jumlahBarang }}</td>
                        <td class="px-5 py-4 font-medium text-gray-700">{{ $item->tanggalMasukBarang }}</td>
                        <td class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                            <div class="flex">
                                <a href="{{ route('item.edit', ['id' => $item->id]) }}">
                                    <button class="ml-2 rounded-md bg-blue-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                                        Edit
                                    </button>
                                </a>
                                {{-- <form action="{{ route('itwm.destroy', ['barang' => $item->id]) }}" method="POST"> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-2 rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection