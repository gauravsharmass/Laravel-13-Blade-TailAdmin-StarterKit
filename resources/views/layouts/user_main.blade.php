<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ config('services.appName') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="supported-color-schemes" content="light dark" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 antialiased">
    <div class="group/shell flex h-screen overflow-hidden">
        <input type="checkbox" id="sidebar-toggle" class="peer hidden" />

        <label
            for="sidebar-toggle"
            class="fixed inset-0 z-40 hidden bg-gray-900/50 group-has-[#sidebar-toggle:checked]/shell:block lg:hidden"
            aria-hidden="true"
        ></label>

        @include('elements.user_sidebar')

        <div class="flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            @include('elements.header')

            <main class="flex-1 p-4 md:p-6">
                @if (session('success'))
                    <div id="globalSuccess" class="mb-4 rounded-xl border border-success-200 bg-success-50 px-4 py-3 text-center text-sm text-success-700">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div id="globalError" class="mb-4 rounded-xl border border-error-200 bg-error-50 px-4 py-3 text-center text-sm text-error-700">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>

            @include('elements.footer')
        </div>
    </div>
</body>

</html>
