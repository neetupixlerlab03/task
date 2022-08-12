<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tests'] = Test::orderBy('id')->paginate();
     return view('Test.index', $data);
    }
    public function create()
    {
      return view('Test.create');
    }
    public function store(Request $request)
    {
      $request->validate([
            'name'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'price'=>'required',

      ]);
      $path = $request->file('image')->store('public/images');
            $test = new Test;
            $test->name = $request->name;
            $test->image = $path;
            $test->price = $request->price;
            $test->save();
            
         return redirect()->route('tests.index');
    }

    
    public function show($id)
    {
        $test=Test::find($id);
        return view('test.edit',compact('test'));
    }

    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
