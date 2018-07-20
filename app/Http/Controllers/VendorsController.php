<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\VendorsRequest;
use App\Vendor;
use function redirect;
use function view;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendors = Vendor::all();
        return view('admin.vendors.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorsRequest $request)
    {
        //
        $address = [
            'street'=>$request->street,
            'city'=>$request->city,
            'zipcode'=>$request->zipcode,
            'country'=>$request->country
        ];
       
        $vendorinput = [
            'name'=>$request->name
        ];
        $vendor = Vendor::create($vendorinput);
        $vendor->address()->create($address);
        return redirect('/admin/vendors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vendor = Vendor::findOrFail($id);
        
        return view('admin.vendors.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VendorsRequest $request, $id)
    {
        //
        $vendor = Vendor::findOrFail($id);
        
        $vendorinput = [
            'name'=>$request->name
        ];
        $vendor->update($vendorinput);
        
        $addressinput = [
            'street'=>$request->street,
            'city'=>$request->city,
            'zipcode'=>$request->zipcode,
            'country'=>$request->country
        ];
        
        $vendor->address()->update($addressinput);

        
        
        return redirect('/admin/vendors');
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
