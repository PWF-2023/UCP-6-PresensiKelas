<x-app-layout>
    <x-slot name="header">
        <h2 class="active font-semibold text-xl text-gray-800 dark:text-text-gray-200 leading-tight">
            {{ __('Presensi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('presensi.store') }}" class="">
                        @csrf
                        @method('post')
                        <div class="mb-6">
                            <x-input-label for="nama" :value="__('Nama')"/>
                            <x-text-input id="nama" name="nama" type="text" class="block w-full mt-1" required autofocus aoutocomplete="nama"/>
                            <x-input-error class="mt-2" :messages="$errors->get('nama')"/>
                        </div>
                        <div class="mb-6">
                            <x-input-label for="keterangan" :value="__('Keterangan')"/>
                            <x-text-input id="keterangan" name="keterangan" type="text" class="block w-full mt-1" required autofocus aoutocomplete="keterangan"/>
                            <x-input-error class="mt-2" :messages="$errors->get('keterangan')"/>
                        </div>
                        <div class="mb-6">
                            <x-input-label for="pertemuan" :value="__('Pertemuan')"/>
                            <x-text-input id="pertemuan" name="pertemuan" type="text" class="block w-full mt-1" required autofocus aoutocomplete="pertemuan"/>
                            <x-input-error class="mt-2" :messages="$errors->get('pertemuan')"/>
                        </div>
                        <div class="mb-6">
                            <x-input-label for="Kelas_id" :value="__('Kelas')"/>
                            <x-select id="Kelas_id" name="Kelas_id"  class="block w-full mt-1">
                                <option value="">Empty</option>
                                @foreach ($kelas as $kelas)
                                    <option value="{{ $kelas->id }}">{{ $kelas->title }}</option>
                                @endforeach
                            </x-select>
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <a href="{{ route('presensi.index') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest
                            text-gray-700 uppercase transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm
                            dark:bg-gray-800 dark:border-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none
                            focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
