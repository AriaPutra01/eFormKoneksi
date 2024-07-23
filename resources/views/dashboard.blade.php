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

<body class="font-sans antialiased dark:bg-gray-900">
    <nav x-data="{ isOpen: false }" class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0 mr-6">
                        <img class="w-8" src="{{ asset('build/image/logobjb.png') }}" alt="Bank Bjb">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-center space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="{{ route('/') }}"
                                class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                aria-current="page">Dashboard</a>
                            <a href="{{route('pemohonKoneksi.create')}}"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Form
                                koneksi</a>
                            <a href="{{route('pemohonEmail.create')}}"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Form
                                e-mail</a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show=isOpen class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="{{ route('/') }}"
                    class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                    aria-current="page">Dashboard</a>
                <a href="{{ route('pemohonKoneksi.create') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Form
                    koneksi</a>
                <a href="{{ route('pemohonEmail.create') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Form
                    e-mail</a>
            </div>
        </div>
    </nav>
    <div class="relative isolate px-6 lg:px-8">
        <div class="mx-auto max-w-2xl my-40">
            <div class="text-center">
                <h1 class="font-bold tracking-tight text-gray-900 dark:text-gray-200 text-3xl sm:text-4xl lg:text-5xl">
                    Permohonan
                    Koneksi dan
                    Akun Perusahaan</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">Halaman ini memungkinkan Anda untuk
                    memulai
                    proses permohonan koneksi dan pembuatan akun perusahaan di Bank bjb
                </p>
                <div class="flex flex-wrap justify-center mt-5">
                    <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                        <a href="{{ route('pemohonKoneksi.create') }}"
                            class="block h-full bg-blue-100 dark:bg-blue-900 rounded shadow-md p-4">
                            <h5 class="text-lg font-bold mb-2 dark:text-gray-200">Form Koneksi</h5>
                            <p class="text-gray-600 dark:text-gray-400">Form permohonan untuk pengajuan pembukaan koneksi.</p>
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                        <a href="{{ route('pemohonEmail.create') }}"
                            class="block h-full bg-blue-100 dark:bg-blue-900 rounded shadow-md p-4">
                            <h5 class="text-lg font-bold mb-2 dark:text-gray-200">Form Email</h5>
                            <p class="text-gray-600 dark:text-gray-400">Form permohonan untuk pendaftaran, pengaktifan dan penghapusan
                                e-mail perusahaan.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
