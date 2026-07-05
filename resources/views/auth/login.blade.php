<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-white rounded-3xl shadow-xl p-8">

        <!-- Header -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-slate-800">
                Welcome Back 👋
            </h1>

            <p class="text-gray-500 mt-2">
                Masuk ke akun Stora untuk melanjutkan.
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-5">

                <x-input-label
                    for="email"
                    value="Email"
                    class="mb-2"
                />

                <x-text-input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="Masukkan email"
                    class="w-full rounded-xl border-gray-300 focus:ring-green-500 focus:border-green-500"
                />

                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-2"
                />

            </div>

            <!-- Password -->
            <div class="mb-5">

                <x-input-label
                    for="password"
                    value="Password"
                    class="mb-2"
                />

                <x-text-input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="Masukkan password"
                    class="w-full rounded-xl border-gray-300 focus:ring-green-500 focus:border-green-500"
                />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2"
                />

            </div>

            <!-- Remember -->
            <div class="flex justify-between items-center mb-6">

                <label class="flex items-center gap-2">

                    <input
                        id="remember_me"
                        type="checkbox"
                        name="remember"
                        class="rounded border-gray-300 text-green-600 focus:ring-green-500"
                    >

                    <span class="text-sm text-gray-600">
                        Remember Me
                    </span>

                </label>

                @if (Route::has('password.request'))

                    <a
                        href="{{ route('password.request') }}"
                        class="text-sm text-green-600 hover:text-green-700"
                    >
                        Lupa Password?
                    </a>

                @endif

            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold transition duration-300"
            >
                Login
            </button>

        </form>

        <!-- Register -->
        <div class="mt-8 text-center">

            <p class="text-gray-600">

                Belum punya akun?

                <a
                    href="{{ route('register') }}"
                    class="text-green-600 font-semibold hover:underline"
                >
                    Daftar Sekarang
                </a>

            </p>

        </div>

    </div>

</x-guest-layout>