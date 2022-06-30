<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! __('Pemesanan &raquo; Buat') !!}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div>

                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-5 py-2">
                            There is something wrong
                        </div>

                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form action="{{ route('pemesanan.store') }}" class="w-full" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Nama Barang
                            </label>
                            <input value="{{ old('nama_barang') }}" name="nama_barang"
                                class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Nama Pelanggan">
                        </div>
                        <div class="w-full px-3 my-2">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Pelanggan
                            </label>
                            <select name="pelanggan_id" class="bg-white-600 text-black-400 appearance-none border inline-block py-3 pl-3 pr-8 rounded leading-tight w-full">
                                <option selected disabled hidden>Pilih Pelanggan</option>
                                @forelse($pelanggan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_pelanggan }}</option>
                                @empty
                                    <option>Belum ada pelanggan</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="w-full px-3 my-2">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Jenis Cuci
                            </label>
                            <select name="jenis_cuci_id" class="bg-white-600 text-black-400 appearance-none border inline-block py-3 pl-3 pr-8 rounded leading-tight w-full">
                                <option selected disabled hidden>Pilih Jenis Cuci</option>
                                @forelse($jenis_cuci as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_jenis_cuci }}</option>
                                @empty
                                    <option>Belum ada jenis cuci</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="w-full px-3 my-2">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Jenis Cuci
                            </label>
                            <select name="status" class="bg-white-600 text-black-400 appearance-none border inline-block py-3 pl-3 pr-8 rounded leading-tight w-full">
                                <option selected disabled hidden>Pilih Jenis Cuci</option>
                                <option value="Menunggu">Menunggu</option>
                                <option value="Diproses">Diproses</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Dibatalkan">Dibatalkan</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 text-right">
                            <button type="submit"
                                class="bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
