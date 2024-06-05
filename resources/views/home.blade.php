@extends('partials.index')

@section('content')
<div class="bg-primary py-20 text-white min-h-screen flex items-center">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-extrabold mb-4">
            Selamat datang di Platform Pemungutan Suara Kami</h1>
        <p class="text-lg mb-8">Pilih opsi favorit Anda dan buat suara Anda didengar!</p>

        <div class="flex justify-center space-x-4">
            <a href="{{ route('poll') }}" class="bg-primary-2 hover:bg-second-primary text-gray-800 px-6 py-3 rounded-full transition duration-300">Start Voting</a>
            <a href="{{ route('about') }}" class="border border-primary-2 text-white px-6 py-3 rounded-full hover:bg-primary-2 hover:text-gray-800 transition duration-300">Learn More</a>
        </div>
    </div>
</div>
@endsection