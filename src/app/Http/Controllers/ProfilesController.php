<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Profile;
use App\Models\Item;
use App\Models\Purchase;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\AddressRequest;

class ProfilesController extends Controller
{
    public function getProfile()
    {
        $user_id = Auth::id();
        $profiles = Profile::find($user_id);

        return view ('profile', compact('profiles'));
    }

    public function createProfile(AddressRequest $request)
    {
        $profiles = $request->all();
        Profile::create($profiles);

        $items = Item::all();
        $tab = "";

        return view('goods', compact('items', 'tab'));
    }

    public function updateProfile(AddressRequest $request)
    {
        $users = $request->only(['name']);
        $profiles = $request->all();
        $user_id = Auth::id();
        User::find($user_id)->update($users);
        Profile::find($user_id)->update($profiles);

        return redirect('mypage');
    }
    public function getAddress($item_id)
    {
        $items = Item::find($item_id);
        $user_id = Auth::id();
        $profiles = Profile::find($user_id);

        return view('address', compact('items', 'profiles'));
    }

    public function updateAddress($item_id, AddressRequest $request)
    {
        $profiles = $request->all();
        $user_id = Auth::id();
        Profile::find($user_id)->update($profiles);

        

        return redirect()->route('purchase', ['item_id' => $request->item_id]);
    }

    public function getMypage(Request $request)
    {
        $user_id = Auth::id();
        $profiles = Profile::find($user_id);
        $tab = $request->tab;
            if($tab == 'buy'){
                $items = Item::all();
                $items = Profile::with('items')->find($profiles->id);
            }else{
                $items = Item::where('user_id', $user_id)->get();
            }

        return view('mypage', compact('profiles', 'items', 'tab'));
    }
}
