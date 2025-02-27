<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    //show the cart
    public function showcart()
    {
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login')->with('error', 'You need to login to view cart');
        }

        $cart = session()->get('cart_' . $user->id , []);
        return view('cart.cartitems', compact('cart'));
    }

    public function addtocart(Request $request, $id)
    {
        $user = auth::user();

        if(!$user){
            return redirect()->route('login')->with('error', 'You need to login to add items to cart');
        }

        $item = Item::findOrFail($id);

        // Retrieve cart from session or initialize an empty array
        $cart = session()->get('cart_'. $user->id, []);

        // If item is already in cart, increase quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $item->itemname,
                'price' => $item->price,
                'quantity' => 1,
                'image' => $item->imagename
            ];

            session()->put('cart_' . $user->id, $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Item added to cart!');
    }

    

    //remove item from the cart
    public function removefromcart($id)
    {
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login')->with('error', 'You need to login to remove items from cart');
        }

        $cart = session()->get('cart_' . $user->id, []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart_' . $user->id, $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Item removed from cart!');
    }

    // Clear the cart
    public function clearcart()
    {
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login')->with('error', 'You need to login to clear cart');
        }

        session()->forget('cart_' . $user->id);
        return redirect()->route('')->with('success', 'Cart cleared!');
    }

}
