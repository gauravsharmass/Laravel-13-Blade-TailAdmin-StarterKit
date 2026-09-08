<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register | {{ config('services.appName') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 antialiased">
    <div class="flex min-h-screen items-center justify-center p-6">
        <div class="w-full max-w-md rounded-2xl border border-gray-200 bg-white p-6 shadow-theme-xl sm:p-8">
            <div class="mb-6 text-center">
                <a href="/" class="text-title-sm font-semibold text-gray-800">{{ config('services.appName') }}</a>
                <p class="mt-2 text-sm text-gray-500">Register new account</p>
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

            <form action="{{ route('postRegister') }}" method="post" class="space-y-5">
                <div>
                    <label for="loginName" class="mb-1.5 block text-sm font-medium text-gray-700">Name</label>
                    <input
                        id="loginName"
                        type="text"
                        name="name"
                        placeholder="Enter your name"
                        class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    />
                    @error('name')
                        <p class="mt-1.5 text-sm text-error-500">{{ $message }}</p>
                    @enderror
                </div>

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

                <div>
                    <label for="loginConfirmPassword" class="mb-1.5 block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input
                        id="loginConfirmPassword"
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                        class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    />
                    @error('password_confirmation')
                        <p class="mt-1.5 text-sm text-error-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="flexCheckDefault" class="flex cursor-pointer items-start gap-2 text-sm font-normal text-gray-700">
                        <input id="flexCheckDefault" name="terms" type="checkbox" class="mt-0.5 h-4 w-4 rounded border-gray-300 text-brand-500 focus:ring-brand-500/30" />
                        <span>I agree to the <a href="javascript:;" class="text-brand-500 hover:text-brand-600">terms</a></span>
                    </label>
                    @error('terms')
                        <p class="mt-1.5 text-sm text-error-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-brand-500 px-4 py-3 text-sm font-medium text-white shadow-theme-xs hover:bg-brand-600">
                    Register
                </button>
            </form>

            <div class="mt-5 text-center text-sm text-gray-700">
                <a href="/login" class="text-brand-500 hover:text-brand-600">Already have an account?</a>
            </div>
        </div>
    </div>
</body>

</html>
