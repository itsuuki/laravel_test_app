<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\commodity;

class commoditysController extends Controller
{
    public function index(Request $request)
    {
        $commoditys = commodity::orderBy('created_at', 'desc')->get();
        return view('commoditys.index', ['commoditys' => $commoditys]);
    }
    public function create()
    {
        
        return view('commoditys.create');
    }

    public function store(Request $request)
    {
        // $request->photo->storeAs('public/commoditys');
        $value = new commodity();
        
        $value->name = $request->input('name');
        
        $value->price = $request->input('price');

        // $value->photo = $request->input('photo');
        // $value->image = $request->input('image');
        // $value = $request->image->store('image');

        $value->image = $request->file('image')->store('images');
 
        $value->save();
        return view('home');
    }
}
// protected $guarded = array('id');

// public static $rules = array(
//     'name' => 'required',
//     'price' => 'integer',
// );

// public function getData()
// {
//     return $this->id . ': ' . $this->name .':' . $this->price;
// }


// ->route('/commoditys/index');