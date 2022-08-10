<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddCart;
use DB;
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
        AddCart::where("id", $request->id )->update(
           
            [
            'quantity' =>  $request->quantity
              
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('addcarts.List');
    }

    
    public function  removeCart($id)
    {
       
        AddCart::where("id",$id )->delete();
        
    
        return redirect()->route('addcarts.List');
                       
    }

    public function clearAllCart()
    {
        // AddCart::delete();
        DB::table('add_carts')->delete();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('addcarts.List');
    }
    

}



 
