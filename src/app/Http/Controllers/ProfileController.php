<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function getProfile(ProfileRequest $request)
    {
        $user_id = Auth::id();
        $profiles = Profile::find($user_id);

        return view ('profile', compact('profiles'));
    }

    public function createProfile(Request $request)
    {
        $profiles = $request->all();
        Profile::create($profiles);

        $items = Item::all();

        return view('goods', compact('items'));
    }

    public function updateProfile(Request $request)
    {
        $users = $request->only(['name']);
        $profiles = $request->all();
        $user_id = Auth::id();
        User::find($user_id)->update($users);
        Profile::find($user_id)->update($profiles);

        return redirect('mypage');
    }
    public function getAddress()
    {
        return view('address');
    }

    public function getMypage()
    {
        return view('mypage');
    }
}
