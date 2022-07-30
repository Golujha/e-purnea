<?php

namespace App\Http\Controllers;
use App\Models\Business;


use Illuminate\Http\Request;

class BusinessController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'proprietor' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pin_code' => 'required',
            'image' => 'required|image',
            'email' => 'required',
            'website' => 'required',
            'address' => 'required',
            'primary_contact' => 'required',
            'secondary_contact' => 'required',
            'description' => 'required',
        ]);

        $filename = $request->image->getClientOriginalName();

        $request->image->move(public_path("image"),$filename);

        $data['image'] = $filename;

        Business::create($data);

        return redirect()->route("homepage");
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    
}
