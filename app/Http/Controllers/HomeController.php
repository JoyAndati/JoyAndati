<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Milk;
use App\Models\Orders;

class HomeController extends Controller
{
    public function redirect(){


        if (Auth::id()) {
            if (Auth::user()->user_type=='0') {
                        $users = user::all();
                        $userId = auth()->id();
                        $userCount = user::all()->count();
                        $userdetails = User::where('id', $userId)->first();
                        $farmCount = user::where('user_type', 'farmer')->count();
                        $adminCount = user::where('user_type','0')->count();
                        $mintk = Orders::where('Status', 'Completed')->count();
                        $mvar = Milk::all()->avg('quality');
                        $mcol = Milk::all()->count();
                        $ordC = Orders::all()->count();
                        $ordS = Orders::where('Status', 'Completed')->count();
                        return view('admin.home', compact('farmCount', 'adminCount', 'userdetails', 'mvar', 'mintk', 'mcol', 'ordC', 'ordS', 'userCount'));
                    } 
        else if (Auth::user()->user_type=='farmer') {
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();
                        $mqual = Milk::where('farmer_id', $userId)->avg('quality');
                        $mquan = Milk::where('farmer_id', $userId)->count();
                        $milkEntries = Milk::where('farmer_id', $userId)->get();
    $amountEarned = 0;
    foreach ($milkEntries as $milk) {
        $amountEarned += $milk->quantity * $milk->payable_amount;
    }
    $amo = Orders::where('farmer_id', $userId)->where('Status', 'Completed')->sum('order_price');
                        $serv = Orders::where('farmer_id', $userId)->count();
                        return view('farmer.home', compact('userdetails', 'mquan', 'mqual', 'amountEarned', 'amo', 'serv'));
                    }    
        }else{
                   return view('users.home');
        }

    }

        public function index(){
        return view('users.home');
    }

            public function register(){
        return view('users.register');
    }
    
}