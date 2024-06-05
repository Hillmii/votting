@extends('partials.index')

@section('content')
    <!-- Masuk Section -->
    <div class="container mx-auto flex justify-center items-center py-20 px-3">
        <div class="bg-primary-2 dark:bg-gray-900 p-8 rounded shadow-md w-96 duration-300 transition">
            <a href="{{ route('home') }}" class="font-semibold text-2xl text-gray-900 dark:text-white transition duration-300 flex justify-center mb-6">Vote me</a>
            <h2 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-white duration-300 transition">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600 dark:text-gray-300 duration-300 transition">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:ring-primary dark:bg-gray-800 dark:text-white duration-300 transition" autofocus>
                    @error('email')
                        <div class="text-pink-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600 dark:text-gray-300 duration-300 transition">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:ring-primary dark:bg-gray-800 dark:text-white duration-300 transition">
                    @error('record')
                    <div class="text-pink-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="w-full mb-5 bg-primary text-gray-900 p-2 rounded-md focus:outline-none focus:ring ring-primary dark:text-white duration-300 transition">Masuk</button>
                <small class="text-gray-900 dark:text-white duration-300 transition">belum punya akun? <a class="text-blue-500 underline" href="{{ route('registrasi') }}">daftar!</a></small>
            </form>
        </div>
    </div>
    <!-- End Masuk Section -->
@endsection