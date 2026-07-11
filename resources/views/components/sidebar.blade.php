<!-- Mobile Overlay -->
<div id="sidebarOverlay"
    class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden"
    onclick="toggleSidebar()">
</div>

<!-- Sidebar -->
<aside id="sidebar"
    class="fixed top-0 left-0 z-50
    h-screen
    w-56
    bg-white
    border-r border-gray-200
    shadow-lg
    transform -translate-x-full
    lg:translate-x-0
    transition-all duration-300 ease-in-out
    flex flex-col">

    <!-- Logo -->
    <div class="px-6 py-5 border-b">

        <a href="/" class="block">
            <img src="/image/stora_logo.png"
                class="w-16"
                alt="Stora">
        </a>

        <p class="text-xs text-gray-400 mt-1">
            Inventory Management
        </p>

    </div>

    <!-- Menu -->
    <div class="flex-1 overflow-y-auto px-3 py-5">

        <p class="text-[11px] uppercase tracking-wider text-gray-400 font-semibold mb-3 px-3">
            Main Menu
        </p>

        <nav class="space-y-1">

            <!-- Dashboard -->
            <a href="/dashboard"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm transition
                {{ request()->is('dashboard')
                    ? 'bg-green-500 text-white shadow'
                    : 'text-gray-600 hover:bg-green-50 hover:text-green-600' }}">

                <span class="text-base">📊</span>

                <span>Dashboard</span>

            </a>

            <!-- Gudang -->
            <a href="/items"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm transition
                {{ request()->is('items*')
                    ? 'bg-green-500 text-white shadow'
                    : 'text-gray-600 hover:bg-green-50 hover:text-green-600' }}">

                <span class="text-base">📦</span>

                <span>Gudang</span>

            </a>

            <!-- Transaksi -->
            <a href="/transactions"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm transition
                {{ request()->is('transactions*')
                    ? 'bg-green-500 text-white shadow'
                    : 'text-gray-600 hover:bg-green-50 hover:text-green-600' }}">

                <span class="text-base">🔄</span>

                <span>Transaksi</span>

            </a>

        </nav>

        <div class="border-t my-6"></div>

        <p class="text-[11px] uppercase tracking-wider text-gray-400 font-semibold mb-3 px-3">
            Settings
        </p>

        <nav>

            <a href="/store-settings"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm transition
                {{ request()->is('store-settings')
                    ? 'bg-green-500 text-white shadow'
                    : 'text-gray-600 hover:bg-green-50 hover:text-green-600' }}">

                <span class="text-base">⚙️</span>

                <span>Pengaturan</span>

            </a>

        </nav>

    </div>

    <!-- User -->
    <div class="border-t p-4">

        <div class="flex items-center gap-3 mb-4">

            <div
                class="w-9 h-9 rounded-full bg-green-500 text-white flex items-center justify-center text-sm font-semibold">

                {{ strtoupper(substr(Auth::user()->name,0,1)) }}

            </div>

            <div class="min-w-0">

                <p class="text-sm font-semibold text-gray-700 truncate">

                    {{ Auth::user()->name }}

                </p>

                <p class="text-xs text-gray-400 truncate">

                    {{ Auth::user()->email }}

                </p>

            </div>

        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button
                class="w-full py-2 text-sm rounded-lg bg-red-500 hover:bg-red-600 text-white transition">

                Logout

            </button>

        </form>

    </div>

</aside>

<script>

const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('sidebarOverlay');

function toggleSidebar() {

    sidebar.classList.toggle('-translate-x-full');

    overlay.classList.toggle('hidden');

}

overlay.addEventListener('click', () => {

    sidebar.classList.add('-translate-x-full');

    overlay.classList.add('hidden');

});

document.addEventListener('keydown', (e) => {

    if (e.key === "Escape") {

        sidebar.classList.add('-translate-x-full');

        overlay.classList.add('hidden');

    }

});

</script>