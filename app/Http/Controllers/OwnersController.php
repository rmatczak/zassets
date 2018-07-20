<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Owner;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Request;
use function redirect;
use function view;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $owners = Owner::get();
        return view('app.owners.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('app.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $owners = Owner::create($request->all());
        return redirect('app/owners');
        
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
        $owner = Owner::findOrFail($id);
        
        return view('app.owners.owns', compact('owner'));
        
  
        
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
        $owner = Owner::findOrFail($id);
        return view('app.owners.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $owner = Owner::findOrFail($id);
        $owner->update($request->all());
        return redirect('/app/owners');
        
        
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
