@extends('template')

@section('content')
    <div>
        <h1 class="text-lg font-bold">DAFTAR KELAS</h1>
        <div class="w-full flex justify-end items-center p-2">
            <a href="{{ route('admin.add_kelas') }}">
                <button type="button"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                    KELAS</button>
            </a>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prodi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Matkul
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ruang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Mulai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Selesai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dosen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $kls)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $kls->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $kls->prodi }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $kls->nama_mk }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $kls->ruang }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $kls->tanggal }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $kls->waktu_mulai }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $kls->waktu_selesai }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $kls->dosen }}
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="{{ route('admin.edit_kelas', $kls->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="{{ route('kelas.delete', $kls->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
