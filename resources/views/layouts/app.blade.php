<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>

    {{-- ip --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ipSourceContainer = document.getElementById('ipSourceContainer');
            const ipDestinationContainer = document.getElementById('ipDestinationContainer');
            const portContainer = document.getElementById('portContainer');
            const addFieldsButton = document.getElementById('addFields');

            addFieldsButton.addEventListener('click', function() {
                // IP Source
                const newIpSourceInput = document.createElement('input');
                newIpSourceInput.type = 'text';
                newIpSourceInput.name = 'ipSource[]';
                newIpSourceInput.id = 'ipSource';
                newIpSourceInput.classList.add('mb-5', 'block', 'w-full', 'rounded-md', 'border-0',
                    'py-1.5', 'text-gray-900', 'shadow-sm', 'ring-1', 'ring-inset', 'ring-gray-300',
                    'placeholder:text-gray-400', 'focus:ring-2', 'focus:ring-inset',
                    'focus:ring-indigo-600', 'sm:text-sm', 'sm:leading-6');
                ipSourceContainer.appendChild(newIpSourceInput);

                // IP Destination
                const newIpDestinationInput = document.createElement('input');
                newIpDestinationInput.type = 'text';
                newIpDestinationInput.name = 'ipDestination[]';
                newIpDestinationInput.id = 'ipDestination';
                newIpDestinationInput.classList.add('mb-5', 'block', 'w-full', 'rounded-md', 'border-0',
                    'py-1.5', 'text-gray-900', 'shadow-sm', 'ring-1', 'ring-inset', 'ring-gray-300',
                    'placeholder:text-gray-400', 'focus:ring-2', 'focus:ring-inset',
                    'focus:ring-indigo-600', 'sm:text-sm', 'sm:leading-6');
                ipDestinationContainer.appendChild(newIpDestinationInput);

                // PORT
                const newPortInput = document.createElement('input');
                newPortInput.type = 'text';
                newPortInput.name = 'port[]';
                newPortInput.id = 'port';
                newPortInput.classList.add('mb-5', 'block', 'w-full', 'rounded-md', 'border-0', 'py-1.5',
                    'text-gray-900', 'shadow-sm', 'ring-1', 'ring-inset', 'ring-gray-300',
                    'placeholder:text-gray-400', 'focus:ring-2', 'focus:ring-inset',
                    'focus:ring-indigo-600', 'sm:text-sm', 'sm:leading-6');
                portContainer.appendChild(newPortInput);
            });
        });
    </script>

</body>

</html>
