@extends('partials.index')

@section('content')
    <section class="flex justify-center items-center my-20 mx-3">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex mb-3">
                <a href="{{ route('poll.create') }}" class="bg-primary-2 py-2 px-4 font-semibold hover:bg-second-color transition duration-300">Create Vote +</a>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Deskripsi
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Deadline
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Action
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($polls as $poll)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $poll->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $poll->desc }}
                        </td>
                        <td class="px-6 py-4">
                            {{ date('Y-m-d H:i',$poll->deadline) }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('poll.show', $poll->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="{{ route('poll.delete', $poll->id) }}" onclick="return confirm('yakin ingin hapus')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2">Delete</a>
                            <a href="{{ route('poll.vote', $poll->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Vote</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection