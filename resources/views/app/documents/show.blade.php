@extends('layouts/user')
@section('content')

          <h1>Document details</h1>
          <br>
          @if($document)
          <div class="row">
            <div class="col-md-12">
              
              <div class="table-responsive">
                
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Number</th>
                      <th>Type</th>
                      <th>User</th>
                      <th>Site</th>
                      <th>Source</th>
                      <th>Destination</th>
                      <th>Ticket</th> 
                      <th>Created at</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      
                      <td>{{$document->number}}</td>
                      <td>{{$document->doctype ? $document->doctype->name : 'no'}}</td>
                      <td>{{$document->user->name}}</td>
                      <td>{{$document->sites()->first()->name}}</td>
                      
                        @if($document->doctype_id == 1)
                      <td>{{$document->vendor->name}}</td>
                      <td>{{$document->sites()->first()->shortname}}</td>    
                        @elseif($document->doctype_id == 2)
                      <td>{{$document->sites()->first()->shortname}}</td>
                      <td>{{$document->vendor->name}}</td>
                        @elseif($document->doctype_id == 3)
                      <td>{{$document->sites()->first()->shortname}}</td>
                      <td>{{$document->owner()->first()->name}}</td>
                        @elseif($document->doctype_id == 4)
                      <td>{{$document->owner()->first()->name}}</td>
                      <td>{{$document->sites()->first()->shortname}}</td>
                        @endif
                      
                      <td>{{$document->ticket}}</td>
                      <td>{{$document->created_at}}</td>
                      
                      
                          
                          
                        
                      
                      
                    </tr>
                       
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Documents positions</h4>
                <br>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Asset</th>
                      <th>Tag</th>
                      <th>Part no.</th>
                      <th>Serial</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($positions as $position)
                    <tr>
                        
                        @php
                        $asset=App\Asset::findOrFail($position->asset_id)
                        @endphp
                        
                      <td>{{App\Subcategory::find($asset->subcategory_id)->name}}</td>
                      <td>{{$position->asset()->first()->name}}</td>
                      <td>{{$position->asset()->first()->partnumber}}</td>
                      <td>{{$position->asset()->first()->serial}}</td>
                     
                                            
                    </tr>
                       @endforeach 
                  </tbody>
                </table>
              </div>  
            </div>
          </div>
          @endif
        
@stop



