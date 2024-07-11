@extends('user.template')

@section('content')
    <div class="flex gap-4">
        <div
            class="block text-center max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-auto">
            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">SELAMAT DATANG</h5>
            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $user->nama }}</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">NPM : {{ $user->npm }}</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Email : {{ $user->email }}</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Prodi : {{ $user->prodi }}</h5>
        </div>
    </div>
@endsection
