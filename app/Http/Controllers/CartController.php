<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cartItem = CartItem::where('product_id', $request->product_id)->first();

        if ($cartItem) {
            $cartItem->update([
                'quantity' => $cartItem->quantity + $request->quantity,
                'price' => $cartItem->product->price * ($cartItem->quantity + $request->quantity),
            ]);
        } else {
            $cartItem = new CartItem([
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $request->price * $request->quantity,
            ]);

            $cartItem->save();
        }

        return redirect()->back();
    }
}
