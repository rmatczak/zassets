@extends('layouts/user')
@section('content')

          <h1>Handover</h1>
          <br>         
          
          
          
          
          {!! Form::open(['method'=>'POST', 'action'=>'DocumentsController@store'])!!}
            {{ Form::hidden('doctype_id','3')}}
            {{ Form::hidden('user_id', $userid)}}
            {{ Form::hidden('site', $site)}} 
            {{ Form::hidden('status','2')}}
            
            <div class="form-group">
    
                {!!Form::label('number', 'Document number:')!!}
                {!!Form::text('number', null, ['class'=>'form-control'])!!} 

            </div>
            
            <div class="form-group">
    
                {!!Form::label('owner_id', 'Owner:')!!}
                {!!Form::select('owner_id', $owners, null, ['class'=>'form-control'])!!} 

            </div>
            
            <div class="form-group">
    
                {!!Form::label('ticket', 'Ticket:')!!}
                {!!Form::text('ticket', null, ['class'=>'form-control'])!!} 

            </div>
            
            @if($assets)
            
            
          <div class="row">
            <div class="col-md-12">
              
                
                <div class="form-group">
                    <select name="checkBoxArray" class="form-control">
                        <option value="send">Send</option>
                    </select>
                </div>
                <div class="form-group">
                    <input value="Send" type="submit" class="btn btn-info form-control">
                </div>
                
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Assets</h4>
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
                    </tr>
                  </thead>
                  <tbody>
                      
                      @foreach($assets as $asset)
                    <tr>
                        <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$asset->id}}"></td>  
                        <td>{{$asset->id}}</td>
                        <td>{{$asset->subcategory ? $asset->subcategory->name : 'uncategorized'}}</td>
                        <td>{{$asset->name}}</td>
                        <td>{{$asset->partnumber}}</td>
                        <td>{{$asset->serial}}</td>
                        <td>{{$asset->status}}</td>
                        <td>{{$asset->readiness}}</td>
                        <td>{{$asset->location ? $asset->location->name : 'no location'}}</td>
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
            @include('includes.form_error')
          @endif
        
@stop

