<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\StoreSetting;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $items = Item::with('category')
            ->where('user_id', $userId);

        // Search
        if (request('search')) {
            $items->where(
                'name',
                'like',
                '%' . request('search') . '%'
            );
        }

        // Filter kategori
        if (request('category')) {
            $items->where(
                'category_id',
                request('category')
            );
        }

        // Sorting
        if (request('sort') == 'oldest') {
            $items->oldest();
        } else {
            $items->latest();
        }

        $items = $items
            ->paginate(10)
            ->withQueryString();

        $categories = Category::where('user_id', auth()->id())->get();

        $store = StoreSetting::where('user_id', auth()->id())->first();

        return view(
            'items.index',
            compact(
                'items',
                'categories',
                'store'
            )
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required',
            'new_category' => 'required_if:category_id,other'
        ]);

        $categoryId = $request->category_id;

        // Jika memilih kategori "Lainnya"
        if ($request->category_id == 'other') {

            $category = Category::create([
                'name' => $request->new_category,
                'user_id' => auth()->id()
            ]);
            
            $categoryId = $category->id;
        }

        Item::create([
            'name' => $request->name,
            'stock' => $request->stock,
            'category_id' => $categoryId,
            'user_id' => auth()->id(),
        ]);

        return redirect('/items')->with('success', 'Item berhasil ditambahkan');
    }

    public function show(Item $item)
    {
        abort_if($item->user_id !== auth()->id(), 403);

        $transactions = $item->transaction()->latest()->get();

        return view('items.show', compact('item', 'transactions'));
    }
}