<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-text-gray-200 leading-tight">
            {{ __('Presensi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('presensi.update', $presensi) }}" class="">
                        @csrf
                        @method('patch')
                        <div class="mb-6">
                            <x-input-label for="nama" :value="__('Nama')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full"
                                :value="old('name', $presensi->nama)" required autofocus autocomplete="nama" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>
                        <div class="mb-6">
                            <x-input-label for="keterangan" :value="__('Keterangan')" />
                            <x-text-input id="keterangan" name="keterangan" type="text" class="mt-1 block w-full"
                                :value="old('name', $presensi->keterangan)" required autofocus autocomplete="keterangan" />
                            <x-input-error class="mt-2" :messages="$errors->get('keterangan')" />
                        </div>
                        <div class="mb-6">
                            <x-input-label for="pertemuan" :value="__('Pertemuan')" />
                            <x-text-input id="pertemuan" name="pertemuan" type="text" class="mt-1 block w-full"
                                :value="old('name', $presensi->pertemuan)" required autofocus autocomplete="pertemuan" />
                            <x-input-error class="mt-2" :messages="$errors->get('pertemuan')" />
                        </div>
                        <div class="mb-6">
                            <x-input-label for="kelas_id" :value="__('Category')" />
                            <x-select id="kelas_id" name="kelas_id" class="block w-full mt-1">
                                {{-- ada yang perlu di benerin di sini --}}
                                @foreach ($kelas as $kel)
                                    @if ($presensi->kelas_id == $kel->id)
                                        <option value="{{ $kel->id }}" selected >{{ $kel->nama }}</option>
                                    @else
                                        <option value="{{ $kel->id }}">{{ $kel->nama }}</option>
                                    @endif
                                @endforeach
                                <option value="">Empty</option>
                            </x-select>
                        </div>
                        <div class="flex item-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <x-cancel-button href="{{ route('todo.index') }}" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
