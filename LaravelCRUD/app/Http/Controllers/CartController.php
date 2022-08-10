<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function cartList()
    {
       
        $cartItems = Cart::get();
        
        return view('NewProducts.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        
        Cart::create([
            
          
            'price' => $request->price,
            'quantity' => 1,
            'product_id'=>$request->id,
            
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
    Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
    ///cart insert
    public function index()
    {
        $data['carts'] = Cart::orderBy('id')->paginate();
       
        return view('NewProducts.index', $data);
    }

    public function create()
   {
   return view('NewProducts.cart');
   }
   public function store(Request $request)
    {
        
            $request->validate([
                
                'name' => 'required',
                'quantity'=>'required',
                'price' => 'required',
                'user_id'=>'required',
                
            ]);
            
            
            $cart = new Cart;
            $cart->name = $request->name;
            $cart->quantity = $request->quantity;
            $cart->price = $request->price;
            $cart->user_id = $request->user_id;

            
            $cart->save();
            
         
            return redirect()->route('carts.index')
                            ->with('success','cart has been created successfully.');
    }

}