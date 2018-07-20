@extends('layouts/user')
@section('content')

          <h1>Documents</h1>
          <br><br>

          
          @if($documents)
          <div class="row">
            <div class="col-md-12">
              
              <div class="table-responsive">
                
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>No.</th>
                      <th>Type</th>
                      <th>User</th>
                      <th>Site</th>
                      <th>Source</th>
                      <th>Dest.</th>
                      <th>Ticket</th> 
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($documents as $document)
                    <tr>
                      <td>{{$document->id}}</td>
                      <td>{{$document->number}}</td>
                      <td>{{$document->doctype ? $document->doctype->name : 'no'}}</td>
                      <td>{{$document->user->name}}</td>
                      <td>{{$document->sites()->first()->shortname}}</td>
                      
                        @if($document->doctype_id == 1)
                      <td>{{$document->vendor->name}}</td>
                      <td>{{$document->sites->first()->shortname}}</td>    
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
                      <td>{{$document->updated_at}}</td>
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                             
                            <li><a href='{{route('documents.show', $document->id)}}'>Show</a></li>
                           
                           
                          </ul>
                        </div>
                      </td>
                      
                    </tr>
                       @endforeach 
                  </tbody>
                </table>
              </div>
                
            </div>
          </div>
          @endif
        
@stop

