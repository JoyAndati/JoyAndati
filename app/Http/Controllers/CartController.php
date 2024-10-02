<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Milk;
use App\Models\User;
use App\Models\Orders;
use App\Models\ExtensionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
public function showCart()
{
    // Get authenticated user ID
    $userId = Auth::id();

    // Fetch user details
    $userdetails = User::where('id', $userId)->first();

    // Fetch cart items for the authenticated user
    $cart = Cart::with('items')->where('user_id', $userId)->first();
    $cartItems = $cart ? $cart->items : collect();

    // Check if the cart is empty
    $isCartEmpty = $cartItems->isEmpty();

    $total = $cartItems->map(function($item) {
        return $item->item_price * $item->quantity;
    })->sum();

    return view('admin.cart', compact('userdetails', 'userId', 'cartItems', 'total', 'isCartEmpty'));
}

public function showCart1()
{
    // Get authenticated user ID
    $userId = Auth::id();

    // Fetch user details
    $userdetails = User::where('id', $userId)->first();

    // Fetch cart items for the authenticated user
    $cart = Cart::with('items')->where('user_id', $userId)->first();
    $cartItems = $cart ? $cart->items : collect();

    // Check if the cart is empty
    $isCartEmpty = $cartItems->isEmpty();

    $total = $cartItems->map(function($item) {
        return $item->item_price * $item->quantity;
    })->sum();

    return view('farmer.cart', compact('userdetails', 'userId', 'cartItems', 'total', 'isCartEmpty'));
}

   public function addItem(Request $request)
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        $item = new CartItem([
            'product_or_service_id' => $request->input('product_or_service_id'),
            'product_type' => $request->input('product_type'),
            'item_price' => $request->input('payable_amount'),
            'quantity' => $request->input('quantity')
        ]);

        $cart->items()->save($item);

        return redirect()->route('cart.show');
    }

    public function removeItem($id)
    {
        $item = CartItem::findOrFail($id);
        $item->delete();

        return redirect()->route('cart.show');
    }

    public function updateQuantity(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = CartItem::findOrFail($id);
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return redirect()->back()->with('success', 'Cart item quantity updated successfully.');
    }

    public function checkout()
    {

        $userId = Auth::id();

        $cart = Cart::with('items')->where('user_id', Auth::id())->first();

        foreach ($cart->items as $item) {
            $order = new Orders;
            $order->farmer_id = $item->cart->user_id;
            $order->farmer_name = Auth::user()->name; // assuming farmer name is the authenticated user's name
            $order->order_date = now(); // current date and time
            $order->order_collected = 'No'; // default value
            $order->product_or_service_id = $item->product_or_service_id;
            $order->status = 'Active'; // default value
            $order->order_price = $item->item_price * $item->quantity;
            $order->save();
        }

        // Clear the cart after checkout
        $cart->items()->delete();

        return redirect()->route('cart.show')->with('success', 'Order placed successfully!');
    }
}

