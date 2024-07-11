@extends('template')

@section('content')
    <div>
        <h1 class="text-lg font-bold">EDIT PRODI</h1>
    </div>
    <div class="mt-14">
        <form action="{{ route('admin.edit_prodi', $prodi->id) }}" class="max-w-none mx-auto" method="POST">
            @csrf
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="nama_prodi" id="nama_prodi"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required value="{{ $prodi->nama_prodi }}" />
                <label for="nama_prodi"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Prodi</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="nama_fakultas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                    option</label>
                <select id="nama_fakultas" name="nama_fakultas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                    <option value="" disabled>Pilih Fakultas</option>
                    <option value="Fakultas Pertanian"
                        {{ $prodi->nama_fakultas == 'Fakultas Pertanian' ? 'Selected' : '' }}>
                        Fakultas Pertanian</option>
                    <option value="Fakultas Keguruan dan Ilmu Pendidikan"
                        {{ $prodi->nama_fakultas == 'Fakultas Keguruan dan Ilmu Pendidikan' ? 'Selected' : '' }}>Fakultas
                        Keguruan dan Ilmu Pendidikan
                    </option>
                    <option value="Fakultas Ilmu Komputer"
                        {{ $prodi->nama_fakultas == 'Fakultas Ilmu Komputer' ? 'Selected' : '' }}>Fakultas Ilmu Komputer
                    </option>
                    <option value="Fakultas Teknik" {{ $prodi->nama_fakultas == 'Fakultas Teknik' ? 'Selected' : '' }}>
                        Fakultas Teknik</option>
                    <option value="Fakultas Hukum" {{ $prodi->nama_fakultas == 'Fakultas Hukum' ? 'Selected' : '' }}>
                        Fakultas Hukum</option>
                    <option value="Fakultas Ilmu Sosial dan Ilmu Politik"
                        {{ $prodi->nama_fakultas == 'Fakultas Ilmu Sosial dan Ilmu Politik' ? 'Selected' : '' }}>Fakultas
                        Ilmu Sosial dan Ilmu Politik
                    </option>
                    <option value="Fakultas Ilmu Kesehatan"
                        {{ $prodi->nama_fakultas == 'Fakultas Ilmu Kesehatan' ? 'Selected' : '' }}>Fakultas Ilmu Kesehatan
                    </option>
                    <option value="Fakultas Ekonomi" {{ $prodi->nama_fakultas == 'Fakultas Ekonomi' ? 'Selected' : '' }}>
                        Fakultas Ekonomi</option>
                </select>
            </div>
            <button type="submit"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Submit</button>
        </form>
    </div>
@endsection
