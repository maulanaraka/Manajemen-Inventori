@extends('layouts.app')

@section('content')
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto">
        <a class="text-lg font-bold" href="#">Home</a>
    </div>
</nav>

<div class="container mx-auto mt-8">

    <h1 class="text-2xl font-bold mb-4 text-center p-10">Welcome To Inventory Management Website</h1>

    <div class="mt-4 mx-auto text-center">
        <a href="{{ route('item.index') }}">
            <button class="ml-2 rounded-md p-2 px-5 bg-blue-800 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                Open Data
            </button></a>
    </div>

</div>

@endsection