<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

use App\Models\Orders;
use App\Models\Milk;
use App\Models\Booking;

class FarmerController extends Controller
{

    public function storeOrders(Request $request)
    {
        $order = new Order;

        $order->farmer_id = $request->input('farmer_id');
        $order->farmer_name = $request->input('farmer_name');
        $order->order_date = $request->input('order_date');
        $order->order_collected = $request->input('order_collected');
        $order->product_or_service_id = $request->input('product_or_service_id');
        $order->status = $request->input('status', 'Active');

        $order->save();

        return redirect()->back();
    }

    public function updateOrders(Request $request, $id)
    {
        $order = Order::find($id);

        $order->farmer_id = $request->input('farmer_id');
        $order->farmer_name = $request->input('farmer_name');
        $order->order_date = $request->input('order_date');
        $order->order_collected = $request->input('order_collected');
        $order->product_or_service_id = $request->input('product_or_service_id');
        $order->status = $request->input('status', 'Active');

        $order->save();

        return redirect()->back();
    }

    public function destroyOrders($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->back();
    }

        public function storeMilk(Request $request)
    {
        $milk = new Milk;

        $milk->farmer_id = $request->input('uid');
        $milk->quantity = $request->input('quan');
        $milk->quality = $request->input('qual');
        $milk->date = $request->input('date');
        $milk->time = $request->input('time');
        $milk->payable_amount = $request->input('price');

        $milk->save();

        return redirect()->back();
    }

    public function updateMilk(Request $request, $id)
    {
        $milk = Milk::find($id);

        $milk->farmer_id = $request->input('farmer_id');
        $milk->quantity = $request->input('quantity');
        $milk->quality = $request->input('quality');
        $milk->date = $request->input('date');
        $milk->time = $request->input('time');
        $milk->payable_amount = $request->input('payable_amount');

        $milk->save();

        return redirect()->back();
    }

    public function destroyMilk($id)
    {
        $milk = Milk::findOrFail($id);
        $milk->delete();

        return redirect()->back();
    }

     public function cancelOrders($id)
    {
        $order = Orders::find($id);
        $order->status = 'Cancelled';
        $order->save();
        return redirect()->back();
    }
            public function cancelExs($id)
    {
        $exs = ExtensionService::find($id);
        $exs->status = 'Cancelled';
        $exs->save();
        return redirect()->back();
    }

            public function completeOrders($id)
    {
        $order = Orders::find($id);
        $order->status = 'Completed';
        $order->save();
        return redirect()->back();
    }

}
