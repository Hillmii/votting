@extends('partials.index')

@section('content')
    <section class="flex justify-center items-center flex-col w-full my-20">
        <div class="bg-primary-2 px-4 py-3 rounded-md">
            <h1 class="text-3xl font-bold mb-10">Create Vote!</h1>
        <form action="{{ route('poll.store') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input name="title" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Makan gratis tiap hari apa?" required>
            <div class="mb-2">
                <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <input name="desc" type="text" id="desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Akan diadakan makan gratis" required>
            </div> 
            <div class="mb-6">
                <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
                <input name="deadline" type="datetime-local" id="deadline" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Akan diadakan makan gratis" required>
            </div> 


            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="choice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilihan 1</label>
                    <input name="choices[][choice]" type="text" id="choice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jumat" required>
                </div>  
                <div>
                    <label for="choice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilihan 2</label>
                    <input name="choices[][choice]" type="text" id="choice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rabu" required>
                </div>
                <div>
                    <label for="choice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilihan 3</label>
                    <input name="choices[][choice]" type="text" id="choice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selasa" required>
                </div>
            </div>
            <button type="submit" class="text-white bg-primary hover:bg-second-primary transition duration-200 hover:text-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
        </div>
    </section>
@endsection