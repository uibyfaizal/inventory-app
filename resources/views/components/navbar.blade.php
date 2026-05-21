<div>
<header class="bg-white">
  <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
    
    <!-- Logo (SUDAH DIGANTI) -->
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5 text-lg font-semibold text-gray-900">
        <div class="flex justify-center">
            <img src="/image/logo-sigudang.png" class="w-10" alt="logo">
            SiGudang
        </div>
      </a>
    </div>

    <div class="flex lg:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <!-- Desktop Menu (PRODUCT DIHAPUS) -->
    <el-popover-group class="hidden lg:flex lg:gap-x-12">
      <a href="/" class="text-sm/6 text-gray-900 hover:text-blue-400">Beranda</a>
      <a href="/items" class="text-sm/6 text-gray-900 hover:text-blue-400">Gudang</a>
      <a href="/transactions" class="text-sm/6 text-gray-900 hover:text-blue-400 disabled">Transaksi</a>
      <a href="/dashboard" class="text-sm/6 text-gray-900 hover:text-blue-400">Dashboard</a>
    </el-popover-group>

    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm/6 font-semibold text-gray-900 hover:text-blue-400">
        <x-button>Login &rarr;</x-button>
      </a>
    </div>
  </nav>

  <!-- Mobile Menu -->
  <el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
      <div tabindex="0" class="fixed inset-0 focus:outline-none">
        <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          
          <!-- Logo Mobile (SUDAH DIGANTI) -->
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5 text-lg font-semibold text-gray-900">
              📦Inventory Barang
            </a>
            <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              
              <!-- PRODUCT MOBILE DIHAPUS -->
              <div class="space-y-2 py-6">
                <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 text-gray-900 hover:bg-gray-50">Beranda</a>
                <a href="/items" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 text-gray-900 hover:bg-gray-50">Gudang</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 text-gray-900 hover:bg-gray-50">Transaksi</a>
                <a href="/dashboard" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 text-gray-900 hover:bg-gray-50">Dashboard</a>
              </div>

              <div class="py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                  <x-button>Login &rarr;</x-button>
                </a>
              </div>

            </div>
          </div>

        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>
</header>
</div>