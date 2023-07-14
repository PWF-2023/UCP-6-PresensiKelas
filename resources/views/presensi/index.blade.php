<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Presensi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-xl text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            {{-- <x-create-button href="{{ route('presensi.create') }}"/> --}}
                        </div>
                        <div>
                            @if (session('success'))
                            <p x-data='{show: true }' x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)" class="text-sm text-green-600 dark:text-green-400">{{ session('success') }}</p>
                            @endif
                            @if (session('danger'))
                            <p x-data='{show: true }' x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)" class="text-sm text-red-600 dark:text-red-400">{{ session('danger') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="hidden px-6 py-3 md:block">
                                    Keterangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pertemuan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Mata Kuliah
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kelas
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($presensis as $presensi)
                            <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700">
                                <td scope='row' class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    <a href="{{ route('presensi.edit',$presensi) }}" class="hover:underline">{{ $presensi->nama }}</a>
                                </td>
                                <td scope='row' class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    @if ($presensi->category != null)
                                        <p>{{ $presensi->category->nama }}</p>
                                    @endif
                                </td>
                                <td class="hidden px-6 py-4 md:block">
                                    @if ($presensi->is_complete == false)
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                            Ongoing
                                        </span>
                                    @else
                                        <span class="bg-blue-100 text-green-800 text-xs font-medium mr-2 px-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                            Finish
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-3">
                                        @if ($presensi->is_complete == false)
                                            <form action="{{ route('presensi.complete',$presensi) }}" method="Post">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-green-600 dark:text-green-400">Hadir</button>
                                            </form>
                                        @else
                                        <form action="{{ route('presensi.uncomplete',$presensi) }}" method="Post">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="text-blue-600 dark:text-blue-400">Tidak Hadir</button>
                                        </form>
                                        @endif
                                        <form action="{{ route('presensi.destroy',$presensi) }}" method="Post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 dark:text-red-400">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            @empty
                            <tr class="bg-white dark:bg-gray-800">
                                <td scope='row' class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    Empty
                                </td>
                            </tr>

                            @endforelse --}}
                        </tbody>
                    </table>
                </div>
                {{-- @if ($presensisCompleted > 1)
                <div class="p-6 text-xl text-gray-900 dark:text-gray-100">
                    <form action="{{ route('presensi.deleteallcompleted') }}" method="Post">
                        @csrf
                        @method('delete')
                        <x-primary-button>Delete All Complete Task</x-primary-button>
                    </form>
                </div>

                @endif --}}
            </div>
        </div>
    </div>

</x-app-layout>
