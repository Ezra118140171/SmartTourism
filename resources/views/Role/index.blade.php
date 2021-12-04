<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaturan Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="block mb-8 py-1">
            <a href="{{ route('vehicle.create')}}" class="bg-red-600 hover:bg-red-300 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tambah Pengguna</a><br><br>
        </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <table class="divide-y divide-gray-200" style="min-width: 100%">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-4 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                                Nama
                            </th>
                            <th scope="col" class="px-4 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                                email
                            </th>
                            <th scope="col" class="px-4 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                                posisi
                            </th>
                            <th scope="col" class="relative px-4 py-3">
                                <span class="sr-only"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($user as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            {{ $user -> id}}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="ml-4">
                                        <div class="text-base font-medium text-gray-900">
                                            {{$user -> name}}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $user-> email }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{$user -> status}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('vehicle.show', $user->id) }}" class="text-green-400 hover:text-green-600 px-1">Lihat</a>
                                    <a href="{{ route('vehicle.edit', $user->id) }}" class="text-yellow-500 hover:text-yellow-500 px-1">Edit</a>
                                    <a href="{{ route('vehicle.edit', $user->id) }}" class="text-red-500 hover:text-red-600 px-1">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>