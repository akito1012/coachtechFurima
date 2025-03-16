<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Condition;
use App\Models\User;
use App\Models\Profile;
use App\Models\Item;
use App\Models\ItemUser;
use App\Models\CategoryItem;
use App\Models\Comment;
use App\Models\Purchase;
use App\Http\Controllers\AuthController;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\PurchaseRequest;
use App\Http\Requests\ExhibitionRequest;

class ItemController extends Controller
{
    public function getSell()
    {
        $categories = Category::all();
        $conditions = Condition::all();

        return view('sell', compact('categories', 'conditions'));
    }

    public function createSell(ExhibitionRequest $request)
    {
        $items = $request->all();
        $items = Item::create($items);
        $categories = $request->category_ids;
        foreach($categories as $category){
            $items->categories()->attach([$category]);
        }

        $user_id = Auth::id();
        $profiles = Profile::find($user_id);
        $tab = "";
        $tab = $request->tab;
            if($tab == 'buy'){
                $items = Item::all();
                $items = Profile::with('items')->find($profiles->id);
            }else{
                $items = Item::where('user_id', $user_id)->get();
            }


        return view('mypage', compact('profiles', 'tab', 'items'));
    }

    public function getItem($item_id)
    {
        $items = Item::find($item_id);
        $condition = Condition::find($items->condition_id);
        $categories = Item::with('categories')->find($item_id);
        $like_count = $items->users()->count();
        $comment_count = Comment::where('item_id', $item_id)->count();
        $comments = Comment::where('item_id', $item_id)->get();
        foreach($comments as $comment){
            $comment = Comment::with(['users', 'profiles'])->get();
        }
        
        return view('item', compact('items', 'condition', 'categories', 'like_count', 'comment_count', 'comments'));
    }

    public function postItemCommentLike($item_id, CommentRequest $request)
    {
        $item_id = $request->item_id;
        $items = Item::find($item_id);
        $condition = Condition::find($items->condition_id);
        $categories = Item::with('categories')->find($item_id);
        
        $like = $request->like;
        if(@isset($like)){
            $user = User::find(Auth::id());
            $like = $user->items()->where('item_id', $item_id)->exists();
            if($like){
                $user->items()->detach([$item_id]);
            }else{
                $user->items()->attach([$item_id]);
            }
            return back();

        }
        $comment_submit = $request->comment_submit;
        if(@isset($comment_submit)){
            $comments = [
                'user_id' => Auth::id(),
                'profile_id' => Auth::id(),
                'item_id' => $request->item_id,
                'comment' => $request->comment,
            ];
            $comments = Comment::create($comments);
            return back();
        }
    }

    public function getPurchase($item_id)
    {
        $items = Item::find($item_id);
        $user_id = Auth::id();
        $profiles = Profile::find($user_id);

        return view('purchase', compact('items', 'profiles'));
    }

    public function postPurchase(PurchaseRequest $request)
    {

        $items = Item::find($request->item_id);
        $items->profile()->attach($request->profile_id, ['payment' => $request->payment]);

        $items = Item::all();
        $tab = "";

        return view('goods', compact('items', 'tab'));
    }
}
