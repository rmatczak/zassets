<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Document;
use App\Location;
use App\Position;
use App\Site;
use App\Subcategory;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
//        $document = Document::findOrFail(6);
//        $document = $document->doctypes->name;
//        dd($document);
       
        $documents = Document::all();
        
        return view('app.documents.index', compact('documents'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        $userid = $user->id;
        $site = $user->sites->first()->id;
        
        $subcategories = Subcategory::pluck('name', 'id');
        
        $locations = Location::pluck('name', 'id');
        
        $vendors = Vendor::pluck('name','id');
        
        return view('app.documents.create', compact('vendors', 'userid', 'site', 'subcategories', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        
        
        $doctype = $request->doctype_id; 
        
//        dd($request);
        /*
        1 = inbound
        2 = outbound
        3 = handover
        4 = return
        5 = destroy
        */
        if ($doctype == 1) {
            $document = Document::create($request->all());

            $site = Site::find($request->site);
            $document->sites()->save($site);
              
            if (!empty($request->name)){
                for($i=0; $i<count($request->name); $i++){
                    if(!empty($request->name[$i])){
                        $assetinput = [
                            'subcategory_id' => $request->subcategory_id[$i],
                            'name' => $request->name[$i],
                            'partnumber' => $request->partnumber[$i],
                            'serial' => $request->serial[$i],
                            'quantity' => $request->quantity[$i],
                            'status' => 1,
                            'readiness' => $request->readiness,
                            'location_id' => $request->location_id[$i]
                        ];
                        
                        $asset = Asset::create($assetinput);
                        
                        $positioninput = [
                            'document_id' => $document->id,
                            'asset_id' => $asset->id,
                            'quantity' => $request->quantity[$i]
                        ];
                        
                        
                        Position::create($positioninput);
                    }
                }
            }
            
            
            
            
            
            
            
        }
        elseif ($doctype == 2){
            $document = Document::create($request->all());

            $site = Site::find($request->site);
            $document->sites()->save($site);
            
            $assets = Asset::findOrFail($request->checkBoxArray);
            
            foreach ($assets as $asset){
                
                $assetinput = [
                    'quantity' => 0,
                    'status' => 0,
                    'readiness' => 0,
                    'location_id' => 0
                ];
                
                $asset->update($assetinput);
                
                if ($asset->has('owners')){
                    $asset->owners()->detach();
                }
                
                
               
//                        
                        $positioninput = [
                            'document_id' => $document->id,
                            'asset_id' => $asset->id,
                            'quantity' => $request->quantity[$i]
                        ];
                        
                        
                        Position::create($positioninput);
            }
        }
        elseif ($doctype == 3){
            $document = Document::create($request->all());

            $site = Site::find($request->site);
            $document->sites()->save($site);
            
            $assets = Asset::findOrFail($request->checkBoxArray);
            
            foreach($assets as $asset){
                
                $assetinput = [
                    
                    'status' => 2,
                    'location_id' => 0
                ];
                
                $asset->update($assetinput);
                $asset->owners()->sync($request->owner_id);
                
                $positioninput = [
                            'document_id' => $document->id,
                            'asset_id' => $asset->id,
                            'quantity' => $request->quantity[$i]
                        ];
                        
                        
                        Position::create($positioninput);
            }
            
            
        }
        elseif ($doctype == 4) {
        
        }
        elseif ($doctype == 5){
            
        }
        
        return redirect('/app/documents');
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
        $document = Document::findOrFail($id);
        $positions = Position::all()->where('document_id' == $id);
        
        return view('app.documents.show', compact('document', 'positions'));
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
    
    public function receive() {
        
    }
    
    public function send() {
        $user = Auth::user();
               
        $userid = $user->id;
        $site = $user->sites->first()->id;
               
        $vendors = Vendor::pluck('name','id');
        
        $assets = Asset::all();
        
        return view('app.documents.send', compact('assets', 'userid', 'site', 'vendors'));
    }
    
    public function handover() {
        $user = Auth::user();
               
        $userid = $user->id;
        $site = $user->sites->first()->id;
               
        $owners = Owner::pluck('name','id');
        
        $assets = Asset::all()->whereStatus(1)->whereReadiness(1);
        
        return view('app.documents.handover', compact('assets', 'userid', 'site', 'owners'));
    }
    
    public function returnprotocol() {
        $user = Auth::user();
               
        $userid = $user->id;
        $site = $user->sites->first()->id;
               
        $owners = Owner::pluck('name','id');
    }
    
    public function decommission() {
        
    }
}
