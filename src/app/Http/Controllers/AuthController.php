<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Item;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()){
            $user_id = Auth::id();
            $users = User::find($user_id);
            $profiles = Profile::find($user_id);
            $items = Item::all();
                if(isset($profiles)){
                    $tab = $request->tab;
                        if($tab == 'mylist'){
                            $items = User::with('items')->find($user_id);
                        }else{
                        $items = Item::where('user_id', '!=', $user_id)->get();
                    }
                    return view('goods', compact('items', 'users', 'tab'));
                }else{
                    return view('profile');
                }
        }
        else{
            $items = Item::all();
            $tab = "";

            return view('goods', compact('items', 'tab'));
        }
    }

        public function searchItem(Request $request){
        if(@isset($request->search)){
            $items = Item::where('name', 'like', "%{$request->search}%")->get();
            return view('goods', compact('items'));
        }
    }

}
