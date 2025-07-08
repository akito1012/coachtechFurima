<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;
use App\Models\ItemUser;

class LikeCountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $item_id = $request->item_id;
        $items = Item::find($item_id);

        if($request->has('like')){
            $user = User::find(Auth::id());
            $like = $user->items()->where('item_id', $item_id)->exists();
            if($like){
                $user->items()->detach([$item_id]);
            }else{
                $user->items()->attach([$item_id]);
            }
            return back();

        }else{
            return $next($request);
        }
    }
}
