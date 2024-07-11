@extends('user.template')

@section('content')
    <div class="mt-3 mb-14 text-center">
        <h1 class="text-2xl font-bold">DAFTAR KRS</h1>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @foreach ($krs as $semester => $matakuliahs)
            <div class="my-4">
                <h2 class="text-2xl font-semibold mb-2">Semester {{ $semester }}</h2>
                <ul class="space-y-2">
                    @foreach ($matakuliahs as $matakuliah)
                        <li class="flowbite-card p-4 rounded-lg shadow-md bg-white">{{ $matakuliah->nama_mk }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
    </div>
@endsection
