<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <dl class="divide-y divide-gray-200">
                    <div class="py-3 grid grid-cols-3">
                        <dt class="text-sm font-medium text-gray-500">NIM</dt>
                        <dd class="text-sm text-gray-900 col-span-2">{{ $mahasiswa->nim }}</dd>
                    </div>
                    <div class="py-3 grid grid-cols-3">
                        <dt class="text-sm font-medium text-gray-500">Nama Mahasiswa</dt>
                        <dd class="text-sm text-gray-900 col-span-2">{{ $mahasiswa->nama_mahasiswa }}</dd>
                    </div>
                    <div class="py-3 grid grid-cols-3">
                        <dt class="text-sm font-medium text-gray-500">Tempat, Tanggal Lahir</dt>
                        <dd class="text-sm text-gray-900 col-span-2">
                            {{ $mahasiswa->tempat_lahir }}, {{ $mahasiswa->tanggal_lahir->format('d-m-Y') }}
                        </dd>
                    </div>
                    <div class="py-3 grid grid-cols-3">
                        <dt class="text-sm font-medium text-gray-500">Jenis Kelamin</dt>
                        <dd class="text-sm text-gray-900 col-span-2">{{ $mahasiswa->jenis_kelamin }}</dd>
                    </div>
                    <div class="py-3 grid grid-cols-3">
                        <dt class="text-sm font-medium text-gray-500">Alamat</dt>
                        <dd class="text-sm text-gray-900 col-span-2">{{ $mahasiswa->alamat }}</dd>
                    </div>
                    <div class="py-3 grid grid-cols-3">
                        <dt class="text-sm font-medium text-gray-500">Program Studi</dt>
                        <dd class="text-sm text-gray-900 col-span-2">{{ $mahasiswa->program_studi }}</dd>
                    </div>
                    <div class="py-3 grid grid-cols-3">
                        <dt class="text-sm font-medium text-gray-500">Nomor HP</dt>
                        <dd class="text-sm text-gray-900 col-span-2">{{ $mahasiswa->nomor_hp }}</dd>
                    </div>
                    <div class="py-3 grid grid-cols-3">
                        <dt class="text-sm font-medium text-gray-500">Email</dt>
                        <dd class="text-sm text-gray-900 col-span-2">{{ $mahasiswa->email }}</dd>
                    </div>
                </dl>

                <div class="flex items-center justify-end gap-3 mt-6">
                    <a href="{{ route('mahasiswa.index') }}" class="text-sm text-gray-600 hover:text-gray-900">
                        &larr; Kembali
                    </a>
                    <a href="{{ route('mahasiswa.edit', $mahasiswa) }}"
                       class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md hover:bg-yellow-600">
                        Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>