<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Milk;
use App\Models\Cart;
use App\Models\Orders;
use App\Models\ExtensionService;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/register',[HomeController::class,'register']);

Route::get('/profile', [IndexController::class, 'userProfile'])->name('profile');

Route::get('/statistics', function () {
                        $users = user::all();
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();
                        $userCount = $users->count();
                        $orders = DB::table('orders')
                        ->where('Status', 'Completed')
        ->select(DB::raw('YEAR(created_at) as year'), DB::raw('SUM(order_price) as total_order_price'))
        ->groupBy('year')
        ->get();
    return view('admin.statistics', compact('userCount', 'userdetails', 'orders'));
});

Route::get('/users', function () {
                        $users = User::where('user_type', '!=', '0')->get();
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();
                        $userCount = $users->count();
    return view('admin.users', compact('userCount', 'userdetails', 'users'));
});

Route::get('/statistics1', function () {
                        $users = user::all();
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();
                        $userCount = $users->count();
                        $orders = DB::table('orders')
                        ->where('farmer_id', $userId)
                        ->where('Status', 'Completed')
        ->select(DB::raw('YEAR(created_at) as year'), DB::raw('SUM(order_price) as total_order_price'))
        ->groupBy('year')
        ->get();
    return view('farmer.statistics', compact('userCount', 'userdetails','orders'));
});

Route::get('/milk', function () {
    $users1 = User::where('user_type', '!=', '0')->get();
                        $milk = Milk::where('quantity', '>', 0)->get();
                        $farmers = User::whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('milks')
                  ->whereColumn('users.id', 'milks.farmer_id')
                  ->where('milks.quantity', '>', 0);
        })->get();
                        $users = user::all();
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();
    return view('admin.milk', compact('milk', 'userdetails', 'farmers', 'users1'));
});

Route::get('/milk1', function () {
                        $userId = auth()->id();    
                        $milk = Milk::where('milks.farmer_id', $userId)->get();
                        $users = user::all();
                        $userdetails = User::where('id', $userId)->first();
    return view('farmer.milk', compact('milk', 'userdetails', 'userId'));
});

Route::get('/exs1', function () {
            $exss = ExtensionService::all();
                        $users = user::all();
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();

    return view('farmer.exs', compact('exss', 'userdetails'));
});

Route::get('/exs', function () {
                        $users = user::all();
                        $userId = auth()->id();
            $exss = ExtensionService::all();                        
                        $userdetails = User::where('id', $userId)->first();
    return view('admin.exs', compact('exss', 'userdetails', 'userId'));
});

Route::get('/orders', function () {
    $userId = Auth::id();

    // Retrieve user's own orders
    $myorders = Orders::where('farmer_id', $userId)->get();

    // Retrieve orders that are not created by the user
    $otherorders = Orders::where('farmer_id', '!=', $userId)->get();

    // Initialize variables to hold related data
    $myProductOrServiceIds = collect();
    $otherProductOrServiceIds = collect();
    $milks = collect();
    $services = collect();
    $contactDet = collect();
    $contactDet1 = collect();
    $total = 0;

    if ($otherorders->isNotEmpty()) {
        $otherProductOrServiceIds = $otherorders->pluck('product_or_service_id');
        $services = ExtensionService::whereIn('id', $otherProductOrServiceIds)->get();
        $contactDet = User::whereIn('id', $otherorders->pluck('farmer_id'))->get();
    }

    // Retrieve authenticated user's details
    $userdetails = User::findOrFail($userId);

    return view('admin.orders', compact('myorders', 'otherorders', 'milks', 'services', 'contactDet', 'contactDet1', 'userdetails', 'userId', 'total'));
});

Route::get('/orders1', function () {
    $userId = Auth::id();

    // Retrieve user's own orders
    $myorders = Orders::where('farmer_id', $userId)->get();

    // Retrieve orders that are not created by the user
    $otherorders = Orders::where('farmer_id', '!=', $userId)->get();

    // Retrieve the product or service IDs from orders
    $myProductOrServiceIds = $myorders->pluck('product_or_service_id');
    $otherProductOrServiceIds = $otherorders->pluck('product_or_service_id');

    // Retrieve related services and milks
    $services = ExtensionService::whereIn('id', $myProductOrServiceIds)->get();
    $milks = Milk::whereIn('id', $otherProductOrServiceIds)->get();

    // Retrieve contact details of farmers who created other orders
    $contactDet = User::whereIn('id', $otherorders->pluck('farmer_id'))->get();

        // Retrieve contact details of farmers who created other orders
    $contactDet1 = User::whereIn('id', $myorders->pluck('farmer_id'))->get();

    $total = $myorders->sum('item_price');

    // Retrieve authenticated user's details
    $userdetails = User::findOrFail($userId);

    return view('farmer.orders', compact('myorders', 'otherorders', 'services', 'milks', 'contactDet', 'contactDet1', 'userdetails', 'userId', 'total'));
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/add_user',[AdminController::class,'registerUser']);
Route::post('/add_user1',[AdminController::class,'registerUser1']);
Route::post('/update_user',[AdminController::class,'updateUser']);

Route::get('admin/logout',[AdminController::class,'logout']);

Route::get('cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('cart1', [CartController::class, 'showCart1'])->name('cart.show');
Route::post('cart/add', [CartController::class, 'addItem'])->name('cart.add');
Route::delete('cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');
Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::post('cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

// Route::get('orders', [OrderController::class, 'index']);
// Route::post('orders', [OrderController::class, 'store']);
// Route::get('orders/{id}', [OrderController::class, 'show']);
// Route::put('orders/{id}', [OrderController::class, 'update']);
// Route::delete('orders/{id}', [OrderController::class, 'destroy']);
Route::get('completeOrder/{id}/', [AdminController::class, 'completeOrder']);
Route::get('acceptOrder/{id}/', [AdminController::class, 'acceptOrder']);
Route::get('denyOrder/{id}/', [AdminController::class, 'denyOrder']);
Route::get('completeOrder/{id}/', [FarmerController::class, 'completeOrders']);
Route::get('cancelOrder/{id}/', [AdminController::class, 'cancelOrders']);
Route::get('cancelOrder/{id}/', [FarmerController::class, 'cancelOrders']);

// Route::get('milk', [MilkController::class, 'index']);
Route::post('storeMilks', [FarmerController::class, 'storeMilk']);
// Route::get('milk/{id}', [MilkController::class, 'show']);
// Route::put('milk/{id}', [MilkController::class, 'update']);
Route::get('/destroyMilk/{id}', [FarmerController::class, 'destroyMilk']);
// Route::post('milk/{id}/activate', [MilkController::class, 'activate']);

// Route::get('extension-services', [extension_servicesController::class, 'index']);
Route::post('storeExS', [AdminController::class, 'storeExs']);
// Route::get('extension-services/{id}', [extension_servicesController::class, 'show']);
Route::put('extension-services/{id}', [AdminController::class, 'updateExs']);
Route::get('/destroyExS/{id}',[AdminController::class,'destroyExS']);
Route::get('/deleteUser/{id}',[AdminController::class,'deleteUser']);
// Route::post('extension-services/{id}/activate', [extension_servicesController::class, 'activate']);