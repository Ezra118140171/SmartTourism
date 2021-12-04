<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Kendaraan
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-xl mx-auto bg-white shadow-md rounded">
            <form method="post" action="{{ route('vehicle.store') }}">
                @csrf
                <div class="mb-4 pt-8 px-3">
                    <label for="kd_kendaraan" class="block text-gray-700 text-base font-bold mb-2 py-1">
                        Kode Kendaraan*
                    </label>
                    <input type="text" name="kd_kendaraan" id="kd_kendaraan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukan Kode kendaraan" required placeholder="masukan kode kendaraan" autofocus>
                    @error('kd_kendaraan')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6 px-3">
                    <label for="kd_kendaraan" class="block text-gray-700 text-base font-bold mb-2 py-1">
                        Nama Kendaraan*
                    </label>
                    <input type="text" name="nama_kendaraan" id="nama_kendaraan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukan Nama Kendaraan" required placeholder="masukan nama kendaraan" autofocus>
                    @error('nama_kendaraan')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6 px-3">
                    <label for="status" class="block text-black text-base font-bold mb-2 py-0">
                        Status
                    </label>
                    <select class="block appearance-none w-full bg-white border border-gray-500 text-gray-700 py-0 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>Tersedia</option>
                        <option>Perbaikan</option>
                    </select>
                    @error('status')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6 px-3">
                    <button type="submit" class="bg-red-600 hover:bg-red-300 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Masukan
                    </button>
                </div>
                <br>
            </form>
        </div>
    </div>
</x-app-layout>