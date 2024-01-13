<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\EventController;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = $this->getCartItems();

        return view('cart.details', compact('cartItems'));
    }

    public function sendOrder(Request $request)
    {
        $cart = $this->getCartItems();
        $details = [];


        foreach ($cart as $item) {

            $details[] = ['id' => $item['id'], 'name' => $item['name']];
        }

        $serializedDetails = serialize($details);

        $order = Order::create(['details' => $serializedDetails]);
        session()->forget('cart');
        $emptyCartCookie = cookie('cart', json_encode([]), 0);

        return redirect()->route('user.dashboard')->with('success', 'Order sent successfully')->cookie($emptyCartCookie);
    }

    public function addItem($eventId)
    {
        $event = EventController::find($eventId);

        if (!$event) {
            return redirect()->route('events.userIndex');
        }

        $cart = $this->getCartItems();

        $cart[] = $event->toArray();

        return $this->updateCart($cart);
    }

    public function removeItem($eventId)
    {
        $cart = $this->getCartItems();

        // Remove the item from the cart based on the event ID
        $cart = array_filter($cart, function ($item) use ($eventId) {
            return $item['id'] != $eventId;
        });

        return $this->updateCart($cart);
    }

    private function getCartItems()
    {
        $cart = Cookie::get('cart');

        return json_decode($cart, true) ?? [];
    }

    private function updateCart($cart)
    {
        $cookie = cookie('cart', json_encode($cart), 60 * 24 * 7); // 7 days

        return redirect()->route('cart.index')->cookie($cookie);
    }
}
