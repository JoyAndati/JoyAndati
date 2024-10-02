<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Orders;
use App\Models\ExtensionService;

class AdminController extends Controller
{

    public function logout(){
        session()->forget('adminLogin');
        return redirect('/login');
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
    
     public function registerUser(Request $request){
        $user = new user;
        $file = \Request::file('image');
        $destination = 'user_images';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('fname');
        $phone_number = $request->input('phone');
        // $user_type = $request->input('user_type');
        $user_type = 'farmer';
        $email = $request->input('email');
        $password=Hash::make($request->input('password'));

        $user->profile_photo_path=$mainFilename;
        $user->name=$name;
        $user->phone_number=$phone_number;
        $user->user_type=$user_type;
        $user->email=$email;
        $user->password=$password;

        $user->save();

        return redirect()->back();
    }

         public function registerUser1(Request $request){
        $user = new user;
        $file = \Request::file('image');
        $destination = 'user_images';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('fname');
        $phone_number = $request->input('phone');
        // $user_type = $request->input('user_type');
        $user_type = 'farmer';
        $email = $request->input('email');
        $password=Hash::make($request->input('password'));

        $user->profile_photo_path=$mainFilename;
        $user->name=$name;
        $user->phone_number=$phone_number;
        $user->user_type=$user_type;
        $user->email=$email;
        $user->password=$password;

        $user->save();

        return view('users.home');
    }

         public function updateUser(Request $request){
        $id = $request->input('uid');
        $user = user::find($id);
        $file = \Request::file('image');
        $destination = 'user_images';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('fname');
        $phone_number = $request->input('phone');
        // $user_type = $request->input('user_type');
        $user_type = 'farmer';
        $email = $request->input('email');
        $password=Hash::make($request->input('password'));

        $user->profile_photo_path=$mainFilename;
        $user->name=$name;
        $user->phone_number=$phone_number;
        $user->user_type=$user_type;
        $user->email=$email;
        $user->password=$password;

        $user->save();

        return redirect()->back();
    }

        public function deleteUser($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }

        public function activateUser($id){
        $data = User::find($id);
        $data->Status='Active';
        $data->save();
        return redirect()->back();
    }

   public function acceptOrder($id)
    {
        $order = Orders::find($id);
        $order->Status = 'Accepted';
        $order->save();

        $params = [
            'from_name' => Auth::user()->name,
            'from_email' => Auth::user()->email,
            'message' => 'Your order has been accepted!',
            'type' => 'Order Accepted'
        ];

        return redirect()->back()->with([
            'success' => 'Order accepted successfully.',
            'emailParams' => $params
        ]);
    }

    public function denyOrder($id)
    {
        $order = Orders::find($id);
        $order->Status = 'Denied';
        $order->save();

        $params = [
            'from_name' => Auth::user()->name,
            'from_email' => Auth::user()->email,
            'message' => 'Your order has been denied.',
            'type' => 'Order Denied'
        ];

        return redirect()->back()->with([
            'success' => 'Order denied successfully.',
            'emailParams' => $params
        ]);
    }

    public function completeOrder($id)
    {
        $order = Orders::find($id);
        $order->Status = 'Completed';
        $order->save();

        $params = [
            'from_name' => Auth::user()->name,
            'from_email' => Auth::user()->email,
            'message' => 'Your order has been completed!',
            'type' => 'Order Completed'
        ];

        return redirect()->back()->with([
            'success' => 'Order completed successfully.',
            'emailParams' => $params
        ]);
    }

            public function payOrderss($id)
    {
        $order = Orders::find($id);
        $order->status = 'Paid';
        $order->save();
        return redirect()->back();
    }

    public function updateExS(Request $request, $id)
    {
        $extensionService = ExtensionService::find($id);

        $extensionService->type = $request->input('type');
        $extensionService->product_or_service = $request->input('product_or_service');
        $extensionService->date = $request->input('date');
        $extensionService->quantity = $request->input('quantity');

        $extensionService->save();

        return redirect()->back();
    }

    public function storeExs(Request $request)
    {
        $extensionService = new ExtensionService;

        $extensionService->type = $request->input('type');
        $extensionService->product_or_service = $request->input('name');
        $extensionService->date = $request->input('date');
        $extensionService->time = $request->input('time');        
        $extensionService->payable_amount = $request->input('price');
        $extensionService->user_id = $request->input('uid'); 

        $extensionService->save();

        return redirect()->back();
    }

    public function destroyExS($id)
    {
        $extensionService = ExtensionService::findOrFail($id);
        $extensionService->delete();

        return redirect()->back();
    }

        public function completeExs($id)
    {
        $exs = ExtensionService::find($id);
        $exs->status = 'Completed';
        $exs->save();
        return redirect()->back();
    }

            public function payExs($id)
    {
        $exs = ExtensionService::find($id);
        $exs->status = 'Paid';
        $exs->save();
        return redirect()->back();
    }

}
