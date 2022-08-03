<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;

class DemoController extends Controller
{
    //
    public function index(){
        $data['demos'] = Demo::orderBy('id')->paginate();
        return view('Demo.index', $data);
    }
    public function create()
   {
   return view('Demo.demo_create');
   }

    public function store(Request $request)
    {
    $request->validate([
    'name' => 'required',
    'email' => 'required',
   
    ]);
    $demo = new Demo;
    $demo->name = $request->name;
    $demo->email = $request->email;
   $demo->save();
    return redirect()->route('demos.index');
    }

public function show(Demo $demo)
{
return view('demos.show',compact('demo'));
} 
public function edit(Demo $demo)
{
return view('Demo.edit',compact('demo'));
}
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'email' => 'required',

]);
$demo = Demo::find($id);
$demo->name = $request->name;
$demo->email = $request->email;

$demo->save();
return redirect()->route('demos.index');
}
public function destroy(Demo $demo)
{
$demo->delete();
return redirect()->route('demos.index');
}
}