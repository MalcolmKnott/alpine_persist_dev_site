<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="" :class="$store.darkMode.on ? 'dark' : 'light'">
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="dropdown"> --}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}

        <script src="http://alpine.test/packages/persist/dist/cdn.js"></script>
        <script defer src="http://alpine.test/packages/alpinejs/dist/cdn.js"></script>
    </head>
    <body>
        <div class="font-sans text-gray-800 dark:text-gray-100 bg-gray-200 dark:bg-gray-800 h-screen">
            {{ $slot }}
        </div>

        <script>
            document.addEventListener('alpine:init', () => {
                console.log('init', Alpine)
                Alpine.store('darkMode', {
                    on: Alpine.$persist(true)
                });

                Alpine.store('locationServices', {
                    on: Alpine.$persist(true)
                });

                // Alpine.data('dropdown', function () {
                //     console.log('data', this.$persist)
                //     return {
                //         open: this.$persist(false)
                //     }
                // })
            });
        </script>

    </body>
</html>
