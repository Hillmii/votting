@extends('partials.index')

@section('content')
    <!-- Daftar Section -->
    <div class="container mx-auto flex justify-center items-center py-20 px-3">
        <div class="bg-primary-2 dark:bg-gray-900 p-8 rounded shadow-md w-96 duration-300 transition">
            <a href="{{ route('home') }}" class="font-semibold text-2xl text-gray-900 dark:text-white transition duration-300 flex justify-center mb-6">Vote me</span></a>
            <h2 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-white duration-300 transition">Daftar</h2>
    
            <form action="{{ route('registrasiStore') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600 dark:text-gray-300 duration-300 transition">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:ring-primary dark:bg-gray-800 dark:text-white duration-300 transition" autofocus>
                    @error('name')
                    <div class="text-pink-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
    
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600 dark:text-gray-300 duration-300 transition">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:ring-primary dark:bg-gray-800 dark:text-white duration-300 transition">
                    @error('email')
                    <div class="text-pink-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
    
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600 dark:text-gray-300 duration-300 transition">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:ring-primary dark:bg-gray-800 dark:text-white duration-300 transition">
                    @error('password')
                    <div class="text-pink-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600 dark:text-gray-300 duration-300 transition">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:ring-primary dark:bg-gray-800 dark:text-white duration-300 transition">
                    @error('password_confirmation')
                    <div class="text-pink-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="w-full mb-5 bg-primary text-gray-900 p-2 rounded-md focus:outline-none focus:ring focus:ring-primary focus:border-lime-300 dark:text-white duration-300 transition">Daftar</button>
                <small class="text-gray-900 dark:text-white duration-300 transition">sudah punya akun? <a class="text-blue-500 underline" href="{{ route('login') }}">masuk!</a></small>
            </form>
        </div>
    </div>
    <!-- End Daftar Section -->
@endsection