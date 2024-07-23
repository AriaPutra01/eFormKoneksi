<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eform - bank bjb</title>
    {{-- icon --}}
    <link rel="icon" href="{{ asset('build/image/logobjb.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-white">
        <header x-data="{ isOpen: false }" class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Bank bjb</span>
                        <img class="h-8 w-auto" src="{{ asset('build/image/logobjb.png') }}" alt="logobjb">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" @click="isOpen = !isOpen"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="{{route('/')}}" class="text-sm font-semibold leading-6">Dashboard</a>
                    <a href="{{route('pemohonKoneksi.create')}}" class="text-sm font-semibold leading-6">Form koneksi</a>
                    <a href="{{route('pemohonEmail.create')}}" class="text-sm font-semibold leading-6">Form e-mail</a>
                </div>
            </nav>

            <!-- Mobile menu, show/hide based on menu open state. -->
            <div x-show=isOpen class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Bank bjb</span>
                            <img class="h-8 w-auto" src="{{ asset('build/image/logobjb.png') }}" alt="">
                        </a>
                        <button type="button" @click="isOpen = !isOpen" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="{{route('/')}}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dashboard</a>
                                <a href="{{route('pemohonKoneksi.create')}}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Form koneksi</a>
                                <a href="{{route('pemohonEmail.create')}}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Form e-mail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="relative isolate px-6 lg:px-8">
            <div class="mx-auto max-w-2xl my-40">
                <div class="text-center">
                    <h1 class="font-bold tracking-tight text-gray-900 text-3xl sm:text-4xl lg:text-5xl">Permohonan
                        Koneksi dan
                        Akun Perusahaan</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Halaman ini memungkinkan Anda untuk memulai
                        proses permohonan koneksi dan pembuatan akun perusahaan di Bank bjb
                    </p>
                    <div class="flex flex-wrap justify-center mt-5">
                        <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                            <a href="{{ route('pemohonKoneksi.create') }}"
                                class="block h-full bg-blue-100 rounded shadow-md p-4">
                                <h5 class="text-lg font-bold mb-2">Form Koneksi</h5>
                                <p class="text-gray-600">Form permohonan untuk pengajuan pembukaan koneksi.</p>
                            </a>
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                            <a href="{{ route('pemohonEmail.create') }}"
                                class="block h-full bg-blue-100 rounded shadow-md p-4">
                                <h5 class="text-lg font-bold mb-2">Form Email</h5>
                                <p class="text-gray-600">Form permohonan untuk pendaftaran, pengaktifan dan penghapusan
                                    e-mail perusahaan.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
