@extends('template')

@section('content')
    <div class="flex gap-4">
        <div
            class="block text-center max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Total Fakultas</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $totalFakultas }}</h5>
        </div>
        <div
            class="block text-center max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Total Prodi</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $total_prodi }}</h5>
        </div>
    </div>
    <div class="mt-14">
        <h1 class="text-lg font-bold">DAFTAR PRODI DAN FAKULTAS</h1>
        <div class="w-full flex justify-end items-center p-2">
            <!-- Modal toggle -->
            <a href="{{ route('admin.prodi') }}">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="block text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Tambah Prodi
                </button>
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
                        Fakultas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodi_fakultas as $pd_fk)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pd_fk->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $pd_fk->nama_prodi }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pd_fk->nama_fakultas }}
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="{{ route('prodi.edit', $pd_fk->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="{{ route('admin.delete_prodi', $pd_fk->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
