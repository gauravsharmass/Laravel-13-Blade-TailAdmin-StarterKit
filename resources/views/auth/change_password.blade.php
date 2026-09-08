@extends('layouts.admin_main')
@section('title', 'Change Password')
@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="rounded-2xl border border-gray-200 bg-white p-5 lg:p-6">
            <h4 class="mb-5 text-title-sm font-semibold text-gray-800">Change Password</h4>

            <form action="{{ route('postChangePassword') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="password" class="mb-1.5 block text-sm font-medium text-gray-700">New Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="h-11 w-full rounded-lg border {{ $errors->has('password') ? 'border-error-500' : 'border-gray-300' }} bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    />
                    @error('password')
                        <p class="mt-1.5 text-sm text-error-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="mb-1.5 block text-sm font-medium text-gray-700">Confirm New Password</label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    />
                </div>

                <button type="submit" class="rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white shadow-theme-xs hover:bg-brand-600">
                    Update Password
                </button>
            </form>
        </div>
    </div>
@endsection
