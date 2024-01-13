<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    public function delete($idOrder)
    {
        $order = Order::findOrFail($idOrder);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
    }
}
