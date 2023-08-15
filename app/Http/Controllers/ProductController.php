<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::all();
      
        return view('product',['products'=>$products]);
    }

    public function detail($id) {
        $product = Product::find($id);
        
        return view('detail', ['product'=>$product]);
    }

    public function search(Request $request) {

        $data = Product::where('name','like','%'.$request->input('query').'%')->get();
        
        return view('search', ['products'=>$data]);
    }

    public function addToCart(Request $request) {
        if($request->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }

        else {
            return redirect('/login');
        }
    }

    public static function cartItem() {
        $userId = Session::get('user')['id'];
       return Cart::where('user_id',$userId)->count();
        
    }

    public function cartList() {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', "=", 'products.id')
        ->where('cart.user_id',  $userId)
        ->select('products.*', 'cart.id as cart_id', )
        ->get();
       
        return view('cartlist', ['products'=>$products]);
    }
    
    public function cartRemove($id) {
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    public function orderNow() {
        

        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products', 'cart.product_id', "=", 'products.id')
        ->where('cart.user_id',  $userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
        
    }

    public function orderPlace(Request $request) {

        $validator = $request->validate([
            'address'=>"required",
            'payment'=>"required",
            
        ]);
                
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach($allCart as $item){
            $order = new Order;
            $order->product_id = $item['product_id'];
            $order->user_id = $item['user_id'];
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
        

    }

    public function myOrder(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id', "=", 'products.id')
        ->where('orders.user_id',  $userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }

    public function register(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }
}
