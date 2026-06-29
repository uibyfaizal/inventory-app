<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
use App\Models\Category;
use App\Models\Item;
use App\Models\StoreSetting;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
// use Illuminate\Session\Store;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Homepage (PUBLIC)
|--------------------------------------------------------------------------
*/
//PUBLIC
Route::get('/', function () {
        return view('homepage');
    });

// PROTECTED
Route::middleware('auth')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */
    Route::get('/dashboard', function () {    

        $userId = auth()->id();

        $totalItems = Item::where('user_id', $userId)->count();

        $totalCategories = Category::where('user_id', $userId)->count();

        $totalTransactions = Transaction::whereHas('item', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->count();

        $lowStockItems = Item::where('user_id', $userId)
            ->where('stock', '<=', 5)
            ->count();

        // Tujuan code ini untuk menghitung jumlah transaksi berdasarkan per tanggal
        $transactionsChart = \App\Models\Transaction::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('dashboard', compact(
            'totalItems',
            'totalCategories',
            'totalTransactions',
            'lowStockItems',
            'transactionsChart'
        ));

    });

    /*
    |--------------------------------------------------------------------------
    | EXPORT REPORT PDF
    |--------------------------------------------------------------------------
    */

    Route::get('/items/export/pdf', function () {
        $items = Item::with('category')
            ->where('user_id', auth()->id())
            ->get();


        $transactions = Transaction::with('item')
            ->whereHas('item', function ($query) {
                $query->where('user_id', auth()->id());
            })
            ->latest()
            ->get();

        $store = StoreSetting::where('user_id', auth()->id())->first();

        $pdf = Pdf::loadView('items.pdf', [
            'items' => $items,
            'transactions' => $transactions,
            'store' => $store
        ]);

        return $pdf->download('laporan-inventory.pdf');
    });

    /*
    |--------------------------------------------------------------------------
    | ITEMS PAGE
    |--------------------------------------------------------------------------
    */

    // Halaman Semua Barang
    Route::get('/items', [ItemController::class, 'index'])->name('items.index');


    /*
    |--------------------------------------------------------------------------
    | CREATE ITEM
    |--------------------------------------------------------------------------
    */

    // Halaman Form Tambah Barang
    Route::get('/items/create', function () {

        $defaultCategories = [
            'Makanan',
            'Bahan',
            'Elektronik',
            'Peralatan'
        ];

        foreach ($defaultCategories as $categoryName) {
            Category::firstOrCreate([
                'name' => $categoryName,
                'user_id' => auth()->id()
            ]);
        }

        $categories = Category::where('user_id', auth()->id())->get();

        return view('items.create', compact('categories'));

    });

    // Simpan Data Barang
    Route::post('/items', [ItemController::class, 'store']);

    /*
    |--------------------------------------------------------------------------
    | DELETE ITEM
    |--------------------------------------------------------------------------
    */

    // Hapus Barang
    Route::delete('/items/{id}', function ($id) {

        Item::findOrFail($id)->delete();

        return redirect('/items')->with('success', 'Data berhasil dihapus');

    });


    /*
    |--------------------------------------------------------------------------
    | UPDATE ITEM
    |--------------------------------------------------------------------------
    */

    // Halaman Edit
    Route::get('/items/{id}/update', function ($id) {

        $item = Item::findOrFail($id);

        $categories = Category::all();

        return view('items.update', compact('item', 'categories'));

    });

    // Proses Update
    Route::put('/items/{id}', function (Request $request, $id) {

        $categoryId = $request->category_id;

        // jika user mengisi kategori baru
        if ($request->new_category) {
            $category = Category::create([
                'name' => $request->new_category,
                'user_id' => auth()->id()
            ]);

            $categoryId = $category->id;
        }

        $item = Item::findOrFail($id);

        $item->update([
            'name' => $request->name,
            'category_id' => $categoryId,
            'stock' => $request->stock,
            'price' => $request->price
        ]);

        return redirect('/items')->with('success', 'Data berhasil diubah');

    });

    /*
    |--------------------------------------------------------------------------
    | DETAIL ITEM
    |--------------------------------------------------------------------------
    */

    // Halaman Detail Barang
    Route::get('/items/{item}', [ItemController::class, 'show'])
        ->name('items.show');


    /*
    |--------------------------------------------------------------------------
    | TRANSACTIONS
    |--------------------------------------------------------------------------
    */

    // Halaman Form Transaksi
    Route::get('/items/{item}/transactions/create', [TransactionController::class, 'create'])
        ->name('transactions.create');

    // Simpan Transaksi
    Route::post('/items/{item}/transactions', [TransactionController::class, 'store'])
        ->name('transactions.store');

    // Daftar barang Transaksi
    Route::get('/transactions', function() {

        $items = Item::where('user_id', auth()->id())->get();

        return view('transactions.index', compact('items'));
    })->name('transactions.index');

    Route::get('/transactions/{item}', function(Item $item) {

    abort_if($item->user_id !== auth()->id(), 403);

    $transactions = Transaction::where('item_id', $item->id)
        ->latest()
        ->get();

    return view(
        'transactions.show',
        compact('item', 'transactions')
    );

})->name('transactions.show');



    // Form Ambil barang
    Route::get('/items/{item}/take', function (Item $item) {
        return view('items.take', compact('item'));
    })->name('items.take');


    // Route Halaman Toko
    Route::get('/store-settings', function() {
        $store = StoreSetting::where('user_id', auth()->id())->first();

        return view('store-settings', compact('store'));
    })->name('store-settings');

    Route::post('/store-settings', function(Request $request) {
        $store = StoreSetting::where('user_id', auth()->id())->first();

        if($store) {
            $store->update([
                'store_name' => $request->store_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address
            ]);
        } else {
            StoreSetting::create([
                'store_name' => $request->store_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'user_id' => auth()->id()
            ]);
        }

        return back()->with('success', 'Pengaturan toko behasil disimpan');
    });


    // Login Page Authentication
    Route::post('/store/settings', function(Request $request) {});
});

require __DIR__.'/auth.php';