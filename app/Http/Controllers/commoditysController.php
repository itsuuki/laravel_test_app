<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\commodity;

class commoditysController extends Controller
{
    public function index(Request $request)
    {
        $commoditys = commodity::orderBy('created_at', 'desc')->get();
        // $is_image = false;
        // if (storage::disk('local')->exists('public/profile_images')) {
        //     $is_image = true;
        // }

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

        $value->image = $request->input('local/image');

        // $value->save();
        return redirect()->route('top');
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
