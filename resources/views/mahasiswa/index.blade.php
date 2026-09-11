<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="mb-4 px-4 py-2 rounded bg-green-100 text-green-700 text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                    <form method="GET" action="{{ route('mahasiswa.index') }}" class="flex gap-2">
                        <input
                            type="text"
                            name="q"
                            value="{{ $keyword }}"
                            placeholder="Cari NIM / Nama..."
                            class="border-gray-300 rounded-md shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >
                        <button type="submit" class="px-3 py-2 bg-gray-200 rounded-md text-sm hover:bg-gray-300">
                            Cari
                        </button>
                    </form>

                    <a href="{{ route('mahasiswa.create') }}"
                       class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700">
                        + Tambah Mahasiswa
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">NIM</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Nama Mahasiswa</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Program Studi</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">No. HP</th>
                                <th class="px-4 py-3 text-center font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($mahasiswas as $index => $mhs)
                                <tr>
                                    <td class="px-4 py-3">{{ $mahasiswas->firstItem() + $index }}</td>
                                    <td class="px-4 py-3">{{ $mhs->nim }}</td>
                                    <td class="px-4 py-3">{{ $mhs->nama_mahasiswa }}</td>
                                    <td class="px-4 py-3">{{ $mhs->program_studi }}</td>
                                    <td class="px-4 py-3">{{ $mhs->jenis_kelamin }}</td>
                                    <td class="px-4 py-3">{{ $mhs->nomor_hp }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex justify-center gap-2">
                                            <a href="{{ route('mahasiswa.show', $mhs) }}"
                                               class="px-3 py-1 rounded bg-gray-100 text-gray-700 hover:bg-gray-200 text-xs">
                                                Detail
                                            </a>
                                            <a href="{{ route('mahasiswa.edit', $mhs) }}"
                                               class="px-3 py-1 rounded bg-yellow-100 text-yellow-700 hover:bg-yellow-200 text-xs">
                                                Edit
                                            </a>
                                            <form action="{{ route('mahasiswa.destroy', $mhs) }}" method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data {{ $mhs->nama_mahasiswa }}?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="px-3 py-1 rounded bg-red-100 text-red-700 hover:bg-red-200 text-xs">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $mahasiswas->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>