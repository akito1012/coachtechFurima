<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Item;

class PurchaseMiddleware
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
        if(@isset($request->payment)){
            $payment = $request->payment;
            $paymentCheck = $request->input('payment');
            $items = Item::find($request->item_id);
            $user_id = Auth::id();
            $profiles = Profile::find($user_id);

        return response()->view('purchase', compact('items', 'profiles', 'payment', 'paymentCheck'));
        }
        return $next($request);
    }
}
