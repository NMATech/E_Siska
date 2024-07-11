@extends('user.template')

@section('content')
    <div>
        <h1 class="text-lg font-bold">DAFTAR KELAS PRODI {{ $user->prodi }}</h1>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
