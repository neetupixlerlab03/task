<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddCart;

class AddCartController extends Controller
{
    public function addcartList()
    {
       
        $cartItems = AddCart::get();
        
        return view('Phone.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        $phone = AddCart::where('phone_id',$request->phone_id)->first();
        if($phone){
            AddCart::where('phone_id',$request->phone_id)
            ->update([
                'price' => $request->price,
                'quantity' => $phone->quantity+$request->quantity,
                'phone_id'=>$request->phone_id,
                     ]);
        }
        else{
            AddCart::create([
                'price' => $request->price,
                'quantity' => $request->quantity,
                'phone_id'=>$request->phone_id,
                     ]);

        }
        
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->route('addcarts.List');
    }

    public function updateCart(Request $request)
    {
        AddCart::update(
            $request->id,
            [
            'quantity' => [
            'relative' => false,
             'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('addcarts.list');
    }

    public function removeCart(Request $request)
    {
        AddCart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('addcarts.list');
    }

    public function clearAllCart()
    {
        AddCart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('addcarts.list');
    }
    

}



 
