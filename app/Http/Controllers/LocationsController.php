<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationsRequest;
use App\Location;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function redirect;
use function view;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $locations = Location::all();
        return view('app.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $sites = Site::pluck('name', 'id');
        return view('app.locations.create', compact('sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(LocationsRequest $request)
    {
        //
        $location = Location::create($request->all());
        $site = Site::find($request->site_id);
        $location->sites()->save($site);
        
        return redirect('/app/locations');
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
        $location = Location::findOrFail($id);
        $sites = Site::pluck('name', 'id');
        return view('app.locations.edit', compact('location', 'sites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(LocationsRequest $request, $id)
    {
        //
        $location = Location::findOrFail($id);
        $location->update($request->all());
        $site = Site::find($request->site_id);
        $location->sites()->sync($site);
        return redirect('/app/locations');
        
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
