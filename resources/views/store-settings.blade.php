<x-layout>

    <x-sidebar />

    <main class="ml-64 min-h-screen bg-[#f5f7fb]">

        <div class="max-w-4xl mx-auto py-10 px-8">

            {{-- Header --}}
            <div class="flex justify-between items-center mb-8">

                <div>
                    <h1 class="text-3xl font-bold text-gray-800">
                        🏪 Pengaturan Toko
                    </h1>

                    <p class="text-gray-500 mt-2">
                        Kelola informasi toko yang akan digunakan pada laporan dan dashboard.
                    </p>
                </div>

            </div>

            {{-- Success Alert --}}
            @if(session('success'))

                <div class="mb-6 bg-green-100 border border-green-200 text-green-700 px-5 py-4 rounded-xl">
                    {{ session('success') }}
                </div>

            @endif


            <div class="grid lg:grid-cols-3 gap-6">

                {{-- Form --}}
                <div class="lg:col-span-2">

                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100">

                        <div class="border-b px-6 py-5">

                            <h2 class="text-xl font-semibold text-gray-800">
                                Informasi Toko
                            </h2>

                            <p class="text-sm text-gray-500 mt-1">
                                Lengkapi data toko Anda.
                            </p>

                        </div>

                        <div class="p-6">

                            <form action="/store-settings" method="POST" class="space-y-5">

                                @csrf

                                {{-- Nama --}}
                                <div>

                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Nama Toko
                                    </label>

                                    <input
                                        type="text"
                                        name="store_name"
                                        value="{{ $store->store_name ?? '' }}"
                                        placeholder="Contoh: Toko Berkah Jaya"
                                        class="w-full rounded-xl border-gray-300 focus:border-green-500 focus:ring-green-500"
                                    >

                                </div>

                                {{-- Telepon --}}
                                <div>

                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Nomor Telepon
                                    </label>

                                    <input
                                        type="text"
                                        name="phone"
                                        value="{{ $store->phone ?? '' }}"
                                        placeholder="08xxxxxxxxxx"
                                        class="w-full rounded-xl border-gray-300 focus:border-green-500 focus:ring-green-500"
                                    >

                                </div>

                                {{-- Email --}}
                                <div>

                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        value="{{ $store->email ?? '' }}"
                                        placeholder="email@email.com"
                                        class="w-full rounded-xl border-gray-300 focus:border-green-500 focus:ring-green-500"
                                    >

                                </div>

                                {{-- Alamat --}}
                                <div>

                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Alamat
                                    </label>

                                    <textarea
                                        rows="4"
                                        name="address"
                                        placeholder="Masukkan alamat toko..."
                                        class="w-full rounded-xl border-gray-300 focus:border-green-500 focus:ring-green-500"
                                    >{{ $store->address ?? '' }}</textarea>

                                </div>

                                <div class="flex justify-end gap-3 pt-4">

                                    <button
                                        type="submit"
                                        class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl font-medium transition"
                                    >
                                        💾 Simpan Pengaturan
                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                {{-- Preview --}}
                <div>

                    <div class="bg-gradient-to-br from-green-600 to-emerald-700 rounded-2xl text-white p-6 shadow-lg">

                        <div class="text-5xl mb-4">
                            🏪
                        </div>

                        <h2 class="text-xl font-bold mb-1">
                            {{ $store->store_name ?? 'Nama Toko' }}
                        </h2>

                        <p class="text-green-100 text-sm mb-6">
                            Preview Informasi
                        </p>

                        <div class="space-y-5 text-sm">

                            <div>

                                <p class="text-green-200">
                                    Nomor Telepon
                                </p>

                                <p class="font-medium mt-1">
                                    {{ $store->phone ?? '-' }}
                                </p>

                            </div>

                            <div>

                                <p class="text-green-200">
                                    Email
                                </p>

                                <p class="font-medium mt-1 break-all">
                                    {{ $store->email ?? '-' }}
                                </p>

                            </div>

                            <div>

                                <p class="text-green-200">
                                    Alamat
                                </p>

                                <p class="font-medium mt-1">
                                    {{ $store->address ?? '-' }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</x-layout>