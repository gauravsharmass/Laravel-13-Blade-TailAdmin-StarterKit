<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login | {{ config('services.appName') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 antialiased">
    <div class="flex min-h-screen items-center justify-center p-6">
        <div class="w-full max-w-md rounded-2xl border border-gray-200 bg-white p-6 shadow-theme-xl sm:p-8">
            <div class="mb-6 text-center">
                <a href="/" class="text-title-sm font-semibold text-gray-800">{{ config('services.appName') }}</a>
                <p class="mt-2 text-sm text-gray-500">Sign in to start your session</p>
            </div>

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

            <form action="{{ route('postLogin') }}" method="post" class="space-y-5">
                <div>
                    <label for="loginEmail" class="mb-1.5 block text-sm font-medium text-gray-700">Email</label>
                    <input
                        id="loginEmail"
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    />
                    @error('email')
                        <p class="mt-1.5 text-sm text-error-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="loginPassword" class="mb-1.5 block text-sm font-medium text-gray-700">Password</label>
                    <input
                        id="loginPassword"
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    />
                    @error('password')
                        <p class="mt-1.5 text-sm text-error-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <label for="flexCheckDefault" class="flex cursor-pointer items-center gap-2 text-sm font-normal text-gray-700">
                        <input id="flexCheckDefault" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-brand-500 focus:ring-brand-500/30" />
                        Remember Me
                    </label>
                </div>

                <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-brand-500 px-4 py-3 text-sm font-medium text-white shadow-theme-xs hover:bg-brand-600">
                    Sign In
                </button>
            </form>

            <div class="mt-5 space-y-1 text-center text-sm text-gray-700">
                <p><a href="/forgot-password" class="text-brand-500 hover:text-brand-600">I forgot my password</a></p>
                <p><a href="/register" class="text-brand-500 hover:text-brand-600">Register Here</a></p>
            </div>
        </div>
    </div>
</body>

</html>
