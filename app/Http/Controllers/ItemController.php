<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function show(Item $item) {
        $transactions = $item->transaction()->latest()->get();
        return view ('items.show', compact('item', 'transactions'));
    }
}
