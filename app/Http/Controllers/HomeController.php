<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $products = Product::orderBy('id', 'desc')->get();
        return view('home')->with([
            'products' => $products,
        ]);
    }

    public function checkout($id)
    {
        $user = auth()->user();
        $product = Product::where('id', $id)->first();
        //print_r ($product);
       // die();
        return view('checkout', [
             'intent' => $user->createSetupIntent(),
             'product' => $product,
            ]);
    }

    public function singleCharge(Request $request)
    {
        //return $request->all();
        $amount = $request->amount;
        $amount = $amount * 100;
        $paymentMethod = $request->payment_method;
        //return $request->payment_method->id;
         $user = auth()->user();
         $user->createOrGetStripeCustomer();
         $paymentMethod = $user->addPaymentMethod($paymentMethod);
        $user->charge($amount, $paymentMethod->id, ['off_session' => true]);
         return redirect()->route('home')->withSuccess(['Your Order Placed Successfully']);
    }
}
