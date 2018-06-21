<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteRequest;
use App\Address;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $sites = Site::all();
        return view('admin.sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.sites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SiteRequest $request)
    {
        //
        $address = [
            'street'=>$request->street,
            'city'=>$request->city,
            'zipcode'=>$request->zipcode,
            'country'=>$request->country
        ];
        
        
        $siteinput = [
            'name'=>$request->name,
            'shortname'=>$request->shortname
        ];
        
        $site = Site::create($siteinput);
        
        $site->address()->create($address);
        return redirect('/admin/site');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $site = Site::findOrFail($id);
        
        
      
        
        return view('admin.sites.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(SiteRequest $request, $id)
    {
        //
        $site = Site::findOrFail($id);
        
        $siteinput = [
            'name'=>$request->name,
            'shortname'=>$request->shortname
        ];
        $site->update($siteinput);
        
        $address = [
            'street'=>$request->street,
            'city'=>$request->city,
            'zipcode'=>$request->zipcode,
            'country'=>$request->country
        ];
        
        

        $site->address()->update($address);
        return redirect('/admin/site');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
