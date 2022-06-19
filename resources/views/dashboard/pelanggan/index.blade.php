<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pelanggan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-10">
                <a href="{{ route('pelanggan.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    + Create Region
                </a>
            </div>
            <div class="bg-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">Nama Pelanggan</th>
                            <th class="border px-6 py-4">Alamat</th>
                            <th class="border px-6 py-4">Kontak</th>
                            <th class="border px-6 py-4">Tanggal dibuat</th>
                            <th class="border px-6 py-4">Tanggal terakhir di sunting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelanggan as $item)
                        <tr>
                            <td class="border px-6 py-4 text-center">{{ $item->id }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->nama_pelanggan }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->alamat }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->kontak }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->created_at }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->updated_at }}</td>
                            <td class="border px-6 py-4 text-center">
                                <a href="{{ route('pelanggan.edit', $item->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                                <form action="{{ route('pelanggan.destroy',$item->id) }}" method="POST" class="inline-block">
                                    {!! method_field('delete') . csrf_field() !!}
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="border text-center p-5">
                                Data Not Found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="text-centre mt-5">
                {{ $pelanggan->links() }}
            </div>
        </div>
    </div>
</x-app-layout>