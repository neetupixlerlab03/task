<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use Illuminate\Http\Request;
class PhoneController extends Controller
{
 public function PhoneList()
    {
     $phones = Phone::all();
        return view('Phone.phone', compact('phones'));
    }
    public function index()
    {
     $data['phones'] = Phone::orderBy('id')->paginate();
     return view('Phone.index', $data);
    }
     public function create()
    {
        return view('Phone.create');
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
            $phone = new Phone;
            $phone->name = $request->name;
            $phone->price = $request->price;
            $phone->description = $request->description;
            $phone->image = $path;
            $phone->save();
         return redirect()->route('phones.index')->with('success','Phone has been created successfully.');
    }
    public function show($id)
    {
        
        
        $phone=Phone::find($id);
        return view('Phone.edit',compact('phone'));
    } 
    public function edit(Phone $phone)
    {
      
        return view('phone.edit',compact('phone'));
    }
        public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $phone = Phone::find($id);
        if($request->hasFile('image')){
        $request->validate(['image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);
            $path = $request->file('image')->store('public/images');
            $phone->image = $path;
        }
         $phone->name = $request->name;
         $phone->price = $request->price;
         $phone->description = $request->description;
         $phone->save();
        return redirect()->route('phones.index');
        }
        public function destroy($id)
        {
            
        
        $phone = Phone::find($id);
        return redirect()->route('phones.index' ,$phone->id);
    }
}
    
    


