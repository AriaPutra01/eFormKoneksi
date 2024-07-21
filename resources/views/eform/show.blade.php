<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detail Data <i class="text-blue-500">{{ $pemohon->nama }}</i>
        </h2>
    </x-slot>

    <x-card>
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="col-span-full">
                    <label class="block text-sm font-medium leading-6 text-gray-900">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Tujuan</h2>
                    </label>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Tujuan mengajukan permohonan koneksi.</p>
                    <div class="mt-2">
                        <textarea rows="3" disabled
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $pemohon->tujuan }}</textarea>
                    </div>
                </div>
            </div>
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Data Pemohon</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Data pribadi pemohon</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Nama
                            Lengkap</label>
                        <div class="mt-2">
                            <input disabled value="{{ $pemohon->nama }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium leading-6 text-gray-900">NIK</label>
                        <div class="mt-2">
                            <input disabled value="{{ $pemohon->nik }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Alamat
                            E-Mail</label>
                        <div class="mt-2">
                            <input disabled value="{{ $pemohon->email }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Divisi</label>
                        <div class="mt-2">
                            <input disabled value="{{ $pemohon->divisi }}"
                                class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Grup</label>
                        <div class="mt-2">
                            <input disabled value="{{ $pemohon->grup }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Informasi Koneksi</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Detail pengajuan koneksi
                </p>

                <div class="my-10 space-y-10">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <fieldset class="sm:col-span-3">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Kebutuhan Akses</legend>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input disabled type="radio"
                                        {{ $pemohon->kebutuhan == 'production' ? 'checked' : '' }}
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Production</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input disabled type="radio"
                                        {{ $pemohon->kebutuhan == 'development' ? 'checked' : '' }}
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Development</label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="sm:col-span-3">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Akses Koneksi</legend>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input disabled type="radio" {{ $pemohon->akses == 'internal' ? 'checked' : '' }}
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Internal</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input disabled type="radio"
                                        {{ $pemohon->akses == 'pihakKetiga' ? 'checked' : '' }}
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Pihak
                                        Ketiga</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Nama
                        Aplikasi /
                        Koneksi</label>
                    <div class="mt-2">
                        <input disabled value="{{ $pemohon->koneksiAplikasi }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Mulai</label>
                        <div class="mt-2">
                            <input type="date" disabled value="{{ $pemohon->mulai }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Selesai</label>
                        <div class="mt-2">
                            <input type="date" disabled value="{{ $pemohon->sampai }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label class="block text-sm font-medium leading-6 text-gray-900">IP
                            Source</label>
                        <div class="mt-2" id="ipSourceContainer">
                            @foreach (json_decode($pemohon->ipSource) as $s)
                                <input disabled value="{{ $s }}"
                                    class="mb-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @endforeach
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium leading-6 text-gray-900">IP
                            Destination</label>
                        <div class="mt-2" id="ipDestinationContainer">
                            @foreach (json_decode($pemohon->ipDestination) as $d)
                                <input disabled value="{{ $d }}"
                                    class="mb-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @endforeach
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium leading-6 text-gray-900">PORT</label>
                        <div class="mt-2" id="portContainer">
                            @foreach (json_decode($pemohon->port) as $p)
                                <input disabled value="{{ $p }}"
                                    class="mb-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <div class="my-10 space-y-10">
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 text-gray-900"><i>Initiate Connection</i>
                    </legend>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="flex items-center gap-x-3">
                            <input disabled type="radio"
                                {{ $pemohon->initiateConnection == 'Bank bjb' ? 'checked' : '' }}
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label class="block text-sm font-medium leading-6 text-gray-900">bank
                                bjb</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="pihakKetiga" name="initiateConnection" type="radio" value="Pihak Ketiga"
                                {{ $pemohon->initiateConnection == 'Pihak Ketiga' ? 'checked' : '' }}
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Pihak
                                Ketiga</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 text-gray-900">Lampiran</legend>
                    <div class="mt-6 space-y-6">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio"
                                    {{ $pemohon->lampiran == 'Topology Aplikasi' ? 'checked' : '' }}
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Topology
                                    Aplikasi</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio"
                                    {{ $pemohon->lampiran == 'Perjanjian Kerjasama' ? 'checked' : '' }}
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Perjanjian
                                    Kerjasama</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" {{ $pemohon->lampiran == 'BRD' ? 'checked' : '' }}
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">BRD</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input disabled type="radio" {{ $pemohon->lampiran == 'Lainnya' ? 'checked' : '' }}
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Lainnya.....</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </x-card>
</x-app-layout>
