<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
     //  dd('here');
        $products = DB::table('cart')->paginate(8);

        return view('products', ['products' => $products]);
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    // cart()
    {
        return view('cart');
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store($id)
    // ADDTOCART
    {
        $product = Cart::findOrFail($id);
           
        $cart = session()->get('cart', []);
   
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
           
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    
}
