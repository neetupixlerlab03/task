<?php

namespace App\Http\Controllers;
use App\Models\NewProduct ;

use Illuminate\Http\Request;

class NewProductController extends Controller
{
    
    public function productList()
    {
    
        
        $newproducts = NewProduct::all();

        return view('NewProducts.products', compact('newproducts'));
    }
    
    public function index()
    {
        $data['newproducts'] = NewProduct::orderBy('id')->paginate();
    
        return view('NewProducts.index', $data);
    }

    
    public function create()
    {
        return view('NewProducts.create');
    }

    
    public function store(Request $request)
    {
        
            $request->validate([
                'name' => 'required',
                'price' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'description' => 'required',
            ]);
            $path = $request->file('image')->store('public/images');
            $newproduct = new NewProduct;
            $newproduct->name = $request->name;
            $newproduct->price = $request->price;
            $newproduct->description = $request->description;
            $newproduct->image = $path;
            $newproduct->save();
         
            return redirect()->route('newproducts.index')
                            ->with('success','NewProduct has been created successfully.');
    }

    
    public function show(NewProduct  $newproduct)
    {
        return view('newproducts.show',compact('newproduct'));
    }

    
    public function edit(NewProduct  $newproduct)
    {
        return view('NewProducts.edit',compact('newproduct'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        
        $newproduct = NewProduct::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $newproduct->image = $path;
        }
        $newproduct->name = $request->name;
        $newproduct->price = $request->price;
        $newproduct->description = $request->description;
        $newproduct->save();
    
        return redirect()->route('newproducts.index')
                        ->with('success','NewProduct updated successfully');
    }

    
    public function destroy(NewProduct  $newproduct)
    {
        $newproduct->delete();
    
        return redirect()->route('newproducts.index')
                        ->with('success','NewProduct has been deleted successfully');
    }
}
