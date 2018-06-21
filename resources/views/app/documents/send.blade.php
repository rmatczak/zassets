@extends('layouts/user')
@section('content')

          <h1>Assets</h1>
          <p>Here goes tables and users.</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">New Users <span class="badge">42</span></a></li>
                <li><a href="#">Active Users <span class="badge">107</span></a></li>
                <li><a href="#">Expired Users <span class="badge">3</span></a></li>
              </ul>          
            </div>
          </div>
          
          
          
          
          
          
          {!! Form::open(['method'=>'POST', 'action'=>'DocumentsController@store'])!!}
            {{ Form::hidden('doctype_id','2')}}
            {{ Form::hidden('user_id', $userid)}}
            {{ Form::hidden('site', $site)}} 
            {{ Form::hidden('status','0')}}
            {{ Form::hidden('readiness','0')}}
            
            <div class="form-group">
    
                {!!Form::label('vendor_id', 'Destination:')!!}
                {!!Form::select('vendor_id', $vendors, null, ['class'=>'form-control'])!!} 

            </div>
            
            <div class="form-group">
    
                {!!Form::label('ticket', 'Ticket:')!!}
                {!!Form::text('ticket', null, ['class'=>'form-control'])!!} 

            </div>
            
            @if($assets)
            
            
          <div class="row">
            <div class="col-md-12">
              <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Sort by</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">First Name</a></li>
                  <li><a href="#">Last Name</a></li>
                  <li><a href="#">Username</a></li>
                </ul>
              </div>
                
                <div class="form-group">
                    <select name="checkBoxArray" class="form-control">
                        <option value="send">Send</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control">
                </div>
                
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Documents table</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                        <th><input type="checkbox" id="options"></th>
                        <th>#</th>
                        <th>Asset</th>
                        <th>Tag</th>
                        <th>Part no.</th>
                        <th>Serial</th>
                        <th>Status</th>
                        <th>Readiness</th>
                        <th>Location</th>
                        <th>Owner</th>
                    </tr>
                  </thead>
                  <tbody>
                      
                      @foreach($assets as $asset)
                    <tr>
                        <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$asset->id}}"></td>  
                        <td>{{$asset->id}}</td>
                        <td>{{$asset->subcategory ? $asset->subcategory->first()->name : 'uncategorized'}}</td>
                        <td>{{$asset->name}}</td>
                        <td>{{$asset->partnumber}}</td>
                        <td>{{$asset->serial}}</td>
                        <td>{{$asset->status}}</td>
                        <td>{{$asset->readiness}}</td>
                        <td>{{$asset->location ? $asset->location->name : 'no location'}}</td>
                        <td>{{$asset->owners->first() ? $asset->owners->first()->name : 'no owner'}}</td>
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                             
                            <li><a href='#'>Show</a></li>
                           
                           
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
            {!! Form::close() !!}
          @endif
        
@stop

