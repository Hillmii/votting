@extends('partials.index')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 my-20 rounded-lg shadow-md">
    <small>Note:</small>
    <p class="font-bold mb-4">{{ 'Votting akan berakhir pada : ' . $diffForHumans }}</p>
    <h1 class="text-2xl font-bold mb-4">{{ $poll->title }}</h1>
    <p class="text-gray-600 mb-6">{{ $poll->desc }}</p>

    <form method="post" action="{{ route('poll.vote', $poll->id) }}">
        @csrf
        @foreach ($poll->choices as $choice)
            <label class="block mb-2">
                <input type="radio" name="choice_id" value="{{ $choice->id }}" required class="mr-2">
                {{ $choice->choice }}
            </label>
        @endforeach

        @if ($vote)
        <p class="w-full flex justify-center text-pink-500">*Anda sudah tercatat vote*</p>
        @else
        <button onclick="return confirm('Note: Vote tidak bisa di ganti')" type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Vote</button>
        @endif
    </form>
</div>
@endsection