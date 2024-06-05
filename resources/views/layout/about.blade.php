@extends('partials.index')

@section('content')
<div class="py-16 flex items-center mt-5 mx-3">
    <div class="container mx-auto text-center bg-primary-2 rounded px-4 py-3">
        <h2 class="text-4xl font-bold mb-6">Tentang Platform Pemilihan Kami</h2>
        <p class="text-gray-600 mb-8">Selamat datang di platform pemilihan kami. Kami bertujuan untuk memberikan pengalaman pemilihan yang mudah, transparan, dan inklusif bagi semua pengguna.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-3">
            <div class="mb-4">
                <h3 class="text-2xl font-bold mb-2">Misi Kami</h3>
                <p class="text-gray-600">Kami berkomitmen untuk meningkatkan proses demokratis dengan memberikan akses mudah dan aman untuk menyuarakan pendapat Anda.</p>
            </div>

            <div class="mb-4">
                <h3 class="text-2xl font-bold mb-2">Bagaimana Cara Kerjanya</h3>
                <p class="text-gray-600">Platform kami dirancang agar mudah dipahami dan diakses oleh semua orang. Dengan beberapa langkah sederhana, Anda dapat berpartisipasi dalam pemilihan dan membuat suara Anda didengar.</p>
            </div>
        </div>
    </div>
</div>

@endsection