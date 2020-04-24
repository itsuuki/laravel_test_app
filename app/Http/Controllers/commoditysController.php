<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\commodity;

class commoditysController extends Controller
{
    public function index(Request $request)
    {
        $commoditys = [];

        return view('commoditys.index', ['commoditys' => $commoditys]);
    }
    public function create()
    {
        return view('commoditys.create');
    }

    public function store(Request $request)
    {
        $value = new commodity();

        $value->name = $request->input('name');

        $value->price = $request->input('price');

        $value->save();
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
