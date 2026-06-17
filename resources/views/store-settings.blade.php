<x-layout>

    <x-navbar></x-navbar>

    <div class="max-w-6xl mx-auto py-8 md:py-10 px-4">

        <!-- Header -->
        <div class="text-center mb-8">

            <span class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm">
                🏪 Pengaturan Toko
            </span>

            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mt-4">
                Informasi Toko
            </h1>

            <p class="text-gray-500 mt-2 max-w-2xl mx-auto">
                Lengkapi informasi toko untuk digunakan pada dashboard,
                laporan PDF, dan fitur inventory lainnya.
            </p>

        </div>

        @if(session('success'))
            <div class="max-w-3xl mx-auto mb-6">

                <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded-xl">
                    {{ session('success') }}
                </div>

            </div>
        @endif

        <div class="max-w-3xl mx-auto">

            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden">

                <!-- Banner -->
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-8 text-white">

                    <div class="flex items-center gap-4">

                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center text-3xl">
                            🏪
                        </div>

                        <div>

                            <h2 class="text-2xl font-bold">
                                Data Toko
                            </h2>

                            <p class="text-blue-100 text-sm mt-1">
                                Kelola informasi toko Anda
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Form -->
                <div class="p-6 md:p-8">

                    <form action="/store-settings" method="POST">

                        @csrf

                        <!-- Nama Toko -->
                        <div class="mb-5">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Nama Toko
                            </label>

                            <input
                                type="text"
                                name="store_name"
                                value="{{ $store->store_name ?? '' }}"
                                placeholder="Contoh: Toko Berkah Jaya"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300"
                            >

                        </div>

                        <!-- Telepon -->
                        <div class="mb-5">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Nomor Telepon
                            </label>

                            <input
                                type="text"
                                name="phone"
                                value="{{ $store->phone ?? '' }}"
                                placeholder="08xxxxxxxxxx"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300"
                            >

                        </div>

                        <!-- Email -->
                        <div class="mb-5">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ $store->email ?? '' }}"
                                placeholder="tokosaya@gmail.com"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300"
                            >

                        </div>

                        <!-- Alamat -->
                        <div class="mb-5">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Alamat Toko
                            </label>

                            <textarea
                                name="address"
                                rows="4"
                                placeholder="Masukkan alamat lengkap toko..."
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300"
                            >{{ $store->address ?? '' }}</textarea>

                        </div>

                        <!-- Preview -->
                        <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100 mb-6">

                            <h3 class="font-bold text-gray-700 mb-3">
                                📄 Preview Informasi Toko
                            </h3>

                            <div class="space-y-2 text-sm">

                                <p>
                                    <strong>Nama Toko:</strong>
                                    {{ $store->store_name ?? '-' }}
                                </p>

                                <p>
                                    <strong>Telepon:</strong>
                                    {{ $store->phone ?? '-' }}
                                </p>

                                <p>
                                    <strong>Email:</strong>
                                    {{ $store->email ?? '-' }}
                                </p>

                                <p>
                                    <strong>Alamat:</strong>
                                    {{ $store->address ?? '-' }}
                                </p>

                            </div>

                        </div>

                        <!-- Submit -->
                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-3 rounded-xl font-medium hover:opacity-90 transition"
                        >
                            💾 Simpan Pengaturan Toko
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</x-layout>