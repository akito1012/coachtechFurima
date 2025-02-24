<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Condition;
use App\Models\User;
use App\Models\Item;
use App\Models\CategoryItem;
use App\Http\Controllers\AuthController;

class ItemController extends Controller
{
    public function getSell()
    {
        $categories = Category::all();
        $conditions = Condition::all();

        return view('sell', compact('categories', 'conditions'));
    }

    public function createSell(Request $request)
    {
        $items = [
            'condition_id' => $request->condition_id,
            'img' => $request->img,
            'name' => $request->name,
            'bland' => $request->bland,
            'price' => $request->price,
            'explanation' => $request->explanation
        ];
        Item::create($items);

        $items_categories = [
            'item_id' => $request->id,
            'category_id' => $request->category_id,
        ];
        ItemCategory::create($items);

        return view('mypage');
    }

    public function getItem($item_id)
    {
        $items = Item::find($item_id);
        $condition = Condition::find($items->condition_id);
        $categories = Item::with('categories')->find($item_id);
        

        return view('item', compact('items', 'condition', 'categories'));
    }

    public function getPurchase()
    {
        return view('purchase');
    }
}
