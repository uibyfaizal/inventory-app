<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
use App\Models\Category;
use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('homepage');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {    

    $totalItems = Item::count();

    $totalCategories = Category::count();

    $totalTransactions = Transaction::count();

    $lowStockItems = Item::where('stock', '<=',5)->count();

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
| ITEMS PAGE
|--------------------------------------------------------------------------
*/

// Halaman Semua Barang
Route::get('/items', function () {

    $categories = Category::all();

    $items = Item::with('category');

    // FILTER CATEGORY
    if (request('category')) {
        $items->where('category_id', request('category'));
    }

    // SEARCH
    if (request('search')) {
        $items->where('name', 'like', '%' . request('search') . '%');
    }

    $items = $items->get();

    return view('items.index', compact('items', 'categories'));

})->name('items.index');


/*
|--------------------------------------------------------------------------
| CREATE ITEM
|--------------------------------------------------------------------------
*/

// Halaman Form Tambah Barang
Route::get('/items/create', function () {

    $categories = Category::all();

    return view('items.create', compact('categories'));

});

// Simpan Data Barang
Route::post('/items', function (Request $request) {

    Item::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'stock' => $request->stock,
        'price' => $request->price
    ]);

    return redirect('/items')->with('success', 'Data berhasil ditambahkan');

});


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

    $item = Item::findOrFail($id);

    $item->update([
        'name' => $request->name,
        'category_id' => $request->category_id,
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