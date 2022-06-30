<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-cyan-500 to-pink-500 overflow-hidden shadow-xl sm:rounded-lg p-4">
                <h1 class="text-xl font-bold"> Selamat Datang di Web Cuci Sepatu Dashboard </h1>
                <p> Di Dashboard ini Admin, dapat melakukan Create, Read, Update dan Delete data pada database web cuci
                    sepatu.</p>
            </div>
        </div>
    </div>
</x-app-layout>
