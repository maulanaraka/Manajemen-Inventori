@extends('layouts.app')

@section('content')
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto">
        <a class="text-lg font-bold" href="#">Home</a>
        <!-- Add any additional navbar items as needed -->
    </div>
</nav>

<!-- Container for dashboard content -->
<div class="container mx-auto mt-8">

    <!-- Page Heading -->
    <h1 class="text-2xl font-bold mb-4 text-center p-10">Welcome To Inventory Management Website</h1>

    <!-- Dashboard Content -->
    <!-- Add your content here -->
    <div class="mt-4 mx-auto text-center">
        <a href="{{ route('item.index') }}">
            <button class="ml-2 rounded-md p-2 px-5 bg-blue-800 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                Open Data
            </button></a>
    </div>
    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white p-6 rounded-md shadow-md">
            <!-- Example Card -->
            <h2 class="text-xl font-bold mb-2">Card Title</h2>
            <p class="text-gray-600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
        </div>
        <div class="bg-white p-6 rounded-md shadow-md">
            <!-- Another Example Card -->
            <h2 class="text-xl font-bold mb-2">Another Card Title</h2>
            <p class="text-gray-600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
        </div>
    </div> --}}

</div>

@endsection