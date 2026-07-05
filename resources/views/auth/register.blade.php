<x-guest-layout>

    <div class="bg-white rounded-3xl shadow-xl p-8">

        <!-- Header -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-slate-800">
                Create Account 🚀
            </h1>

            <p class="text-gray-500 mt-2">
                Buat akun baru dan mulai kelola inventaris bersama Stora.
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama -->
            <div class="mb-5">

                <x-input-label
                    for="name"
                    value="Nama Lengkap"
                    class="mb-2"
                />

                <x-text-input
                    id="name"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Masukkan nama lengkap"
                    class="w-full rounded-xl border-gray-300 focus:ring-green-500 focus:border-green-500"
                />

                <x-input-error
                    :messages="$errors->get('name')"
                    class="mt-2"
                />

            </div>

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
                    autocomplete="new-password"
                    placeholder="Minimal 8 karakter"
                    class="w-full rounded-xl border-gray-300 focus:ring-green-500 focus:border-green-500"
                />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2"
                />

            </div>

            <!-- Konfirmasi Password -->
            <div class="mb-6">

                <x-input-label
                    for="password_confirmation"
                    value="Konfirmasi Password"
                    class="mb-2"
                />

                <x-text-input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Ulangi password"
                    class="w-full rounded-xl border-gray-300 focus:ring-green-500 focus:border-green-500"
                />

                <x-input-error
                    :messages="$errors->get('password_confirmation')"
                    class="mt-2"
                />

            </div>

            <!-- Tombol Register -->
            <button
                type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold transition duration-300"
            >
                Daftar Sekarang
            </button>

        </form>

        <!-- Login -->
        <div class="mt-8 text-center">

            <p class="text-gray-600">

                Sudah punya akun?

                <a
                    href="{{ route('login') }}"
                    class="text-green-600 font-semibold hover:underline"
                >
                    Masuk di sini
                </a>

            </p>

        </div>

    </div>

</x-guest-layout>