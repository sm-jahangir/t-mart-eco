<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders(Request $request)
    {
        $orders = Order::all();
        return view('backend.orders.index', compact('orders'));
    }
    public function details($id)
    {
        $order = Order::find($id);
        // return $order = Order::where('id', $id)->get();
        return view('backend.orders.details', compact('order'));
    }
}
