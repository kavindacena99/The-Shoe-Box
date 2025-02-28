<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addtocart(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must log in to add items to the cart.');
        }

        $user = Auth::user();
        $item = Item::findOrFail($id);

        // Check if item is already in the cart
        $cartItem = Cart::where('user_id', $user->id)->where('item_id', $item->id)->first();

        if ($cartItem) {
            // Increase quantity if item already exists
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Add new item to cart
            Cart::create([
                'user_id' => $user->id,
                'item_id' => $item->id,
                'quantity' => 1
            ]);
        }

        return redirect()->route('cart.show')->with('success', 'Item added to cart.');
    }

    public function showcart()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must log in to view your cart.');
        }

        $cartItems = Cart::where('user_id', Auth::id())->with('item')->get();

        //dd($cartItems);
        return view('cart.cartitems',compact('cartItems'));
    }

    public function removefromcart($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must log in to modify your cart.');
        }

        $cartItem = Cart::where('user_id', Auth::id())->where('id', $id)->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->route('cart.show')->with('success', 'Item removed from cart.');
        }

        return redirect()->route('cart.show')->with('error', 'Item not found in cart.');
    }
}
