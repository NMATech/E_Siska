@extends('template')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Tambah Kelas</h1>
        <form action="{{ route('kelas.add') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="prodi" class="block text-sm font-medium text-gray-700">Prodi</label>
                    <select name="prodi" id="prodi"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                        <option value="" selected disabled>Pilih Prodi</option>
                        @foreach ($prodi as $pd)
                            <option value="{{ $pd->nama_prodi }}">{{ $pd->nama_prodi }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="nama_mk" class="block text-sm font-medium text-gray-700">Nama Mata Kuliah</label>
                    <select name="nama_mk" id="nama_mk"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                        <option value="" selected disabled>Pilih Mata Kuliah</option>
                        @foreach ($nama_mk as $mk)
                            <option value="{{ $mk->nama_mk }}">{{ $mk->nama_mk }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="ruang" class="block text-sm font-medium text-gray-700">Ruang</label>
                    <select name="ruang" id="ruang"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                        <option value="" selected disabled>Pilih Ruang</option>
                        <option value="R-1A">R-1A</option>
                        <option value="R-1B">R-1B</option>
                        <option value="R-1C">R-1C</option>
                        <option value="R-2A">R-2A</option>
                        <option value="R-2B">R-2B</option>
                        <option value="R-2C">R-2C</option>
                        <option value="R-3A">R-3A</option>
                        <option value="R-3B">R-3B</option>
                        <option value="R-3C">R-3C</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                </div>
                <div>
                    <label for="waktu_mulai" class="block text-sm font-medium text-gray-700">Waktu Mulai</label>
                    <input type="time" name="waktu_mulai" id="waktu_mulai"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="waktu_selesai" class="block text-sm font-medium text-gray-700">Waktu Selesai</label>
                    <input type="time" name="waktu_selesai" id="waktu_selesai"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                </div>
                <div>
                    <label for="maks_mhs" class="block text-sm font-medium text-gray-700">Maksimal Mahasiswa</label>
                    <input type="number" name="maks_mhs" id="maks_mhs"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                </div>
            </div>

            <div>
                <label for="dosen" class="block text-sm font-medium text-gray-700">Dosen</label>
                <input type="text" name="dosen" id="dosen"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required>
            </div>
            <div class="mt-6">
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Tambah Kelas
                </button>
            </div>
        </form>
    </div>
@endsection
