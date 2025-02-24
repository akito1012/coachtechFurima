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
            $profiles = Profile::find($user_id);
            if(isset($profiles)){
                $items = Item::all();

                return view('goods', compact('Items'));
            }else{
                return view('profile');
            }
        }
        else{
            $items = Item::all();

            return view('goods', compact('items'));
        }

    }

}
