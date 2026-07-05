<aside class="fixed left-0 top-0 w-64 h-screen bg-white border-r border-gray-200 shadow-sm flex flex-col">

    <!-- Logo -->
    <div class="px-8 py-7 border-b">

        <a href="/" class="text-center">
            <img src="/image/stora_logo.png" class="w-20" alt="">
        </a>

        <p class="text-sm text-gray-400 mt-1">
            Inventory Management
        </p>

    </div>

    <!-- Menu -->
    <div class="flex-1 overflow-y-auto px-4 py-6">

        <p class="text-xs uppercase text-gray-400 font-semibold mb-3 px-3">
            Main Menu
        </p>

        <nav class="space-y-2">

            <a href="/dashboard"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                {{ request()->is('dashboard') ? 'bg-green-500 text-white shadow' : 'text-gray-600 hover:bg-gray-100' }}">

                📊

                <span>Dashboard</span>

            </a>

            <a href="/items"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                {{ request()->is('items*') ? 'bg-green-500 text-white shadow' : 'text-gray-600 hover:bg-gray-100' }}">

                📦

                <span>Gudang</span>

            </a>

            <a href="/transactions"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                {{ request()->is('transactions*') ? 'bg-green-500 text-white shadow' : 'text-gray-600 hover:bg-gray-100' }}">

                🔄

                <span>Transaksi</span>

            </a>

        </nav>


        <div class="border-t my-8"></div>


        <p class="text-xs uppercase text-gray-400 font-semibold mb-3 px-3">
            Settings
        </p>

        <nav class="space-y-2">

            <a href="/store-settings"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                {{ request()->is('store-settings') ? 'bg-green-500 text-white shadow' : 'text-gray-600 hover:bg-gray-100' }}">

                ⚙️

                <span>Pengaturan Toko</span>

            </a>

        </nav>

    </div>

    <!-- User -->
    <div class="border-t p-5">

        <div class="flex items-center gap-3 mb-5">

            <div class="w-11 h-11 rounded-full bg-green-500 text-white flex items-center justify-center font-bold">

                {{ strtoupper(substr(Auth::user()->name,0,1)) }}

            </div>

            <div>

                <p class="font-semibold text-gray-700">

                    {{ Auth::user()->name }}

                </p>

                <p class="text-xs text-gray-400">

                    {{ Auth::user()->email }}

                </p>

            </div>

        </div>

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button
                class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-xl transition">

                Logout

            </button>

        </form>

    </div>

</aside>