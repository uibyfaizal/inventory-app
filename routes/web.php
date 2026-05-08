<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/items', function(Request $request){
    $categories = Category::all();

    $items = Item::with('category');

    // Filter Category
    if ($request->category) {
        $items->where('category_id', $request->category);
    }
    
    $items = $items->get();

    return view('items.index', compact('items', 'categories'));
});

// Halaman Form
Route::get('/items/create', function(){
    $categories = Category::all();
    return view('items.create', compact('categories'));
});

// Simpan Data / Tambah Data
Route::post('/items', function(Request $request){
    \App\Models\Item::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'stock' => $request->stock,
        'price' => $request->price
    ]);

    $request->validate([
        'name' => 'required',
        'stock' => 'required|integer',
        'price' => 'required|integer',
        'category_id' => 'required'
    ]);

    return redirect('/items')->with('success', 'Data berhasil ditambahkan');
});

// Menghapus Data
Route::delete('/items/{id}', function($id) {
    \App\Models\Item::findOrFail($id)->delete();
    return redirect('/items')->with('success', 'Data berhasil dihapus');
}); 

// Mengubah (Update) Data | Halaman Edit
Route::get('/items/{id}/update', function($id){
    $item = \App\Models\Item::findOrFail($id);
    return view('items.update', compact('item'));
});

// Proses Halaman Edit Data Barang
Route::put('/items/{id}', function(Illuminate\Http\Request $request, $id) {
    $item = \App\Models\Item::findOrFail($id);

    $item->update([
        'name' => $request->name,
        'stock' => $request->stock,
        'price' => $request->price
    ]);

    return redirect('/items')->with('success', 'Data berhasil diubah');
});

// Untuk Halaman Route
Route::get('/transactions/create', function() {
    return view('transactions.create');
});

// Route Model Binding | Untuk Halaman Detail

Route::get('/items/{item}/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');

Route::post('/items/{item}/transactions', [TransactionController::class, 'store'])->name('transactions.store');

// Halaman Detail ????
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');