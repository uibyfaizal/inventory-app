<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request, Item $item)
    {
        abort_if($item->user_id !== auth()->id(), 403);
        // Perintah dibawah artinya: Pastikan semua data dari user valid. Contoh: item_id harus ada di table items. type cuman boleh IN atau OUT, quantity minimal 1
        $request->validate([
            // 'item_id' => 'required|exists:items,id',
            'type' => 'required|in:IN,OUT',
            'quantity' => 'required|integer|min:1',
            'taken_by' => 'required|string'
        ]);

        // Artinya Ambil barang berdasarkan ID Kalau tidak ada → error otomatis
        // $item = Item::findOrFail($request->item_id);
        
        // Validasi Stock
        if ($request->type === 'OUT' && $request->quantity > $item->stock) {
            return back()->with('error', 'Stock tidak mencukupi');
        }
        

        // Simpan Transaction
        Transaction::create([
            'item_id' => $item->id,
            'type' => $request->type,
            'quantity' => $request->quantity,
            'taken_by' => $request->taken_by,
            'note' => $request->note
        ]);

        // Update Stock
        if($request->type === 'OUT') {
            $item->stock -= $request->quantity;
        } else {
            $item->stock += $request->quantity;
        }

        $item->save();

        return redirect()->route('items.show', $item->id)->with('success', 'Transaksi berhasil!');
    }

    public function create(Item $item)
    {
        abort_if($item->user_id !== auth()->id(), 403);

        return view('transactions.create', compact('item'));
    }
}
