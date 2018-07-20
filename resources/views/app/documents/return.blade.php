@extends('layouts/user')
@section('content')

          <h1>Handover</h1>
                    
          {!! Form::open(['method'=>'POST', 'action'=>'DocumentsController@store'])!!}
            {{ Form::hidden('doctype_id','4')}}
            {{ Form::hidden('user_id', $userid)}}
            {{ Form::hidden('site', $site)}} 
            {{ Form::hidden('status','1')}}
            {{ Form::hidden('owner_id', $owner->id)}}
            {{ Form::hidden('location', '1')}}
            
            <div class="form-group">
    
                {!!Form::label('number', 'Document number:')!!}
                {!!Form::text('number', null, ['class'=>'form-control'])!!} 

            </div>
            
                      
            <div class="form-group">
    
                {!!Form::label('ticket', 'Ticket:')!!}
                {!!Form::text('ticket', null, ['class'=>'form-control'])!!} 

            </div>
            
            @if($owner)
            
            
          <div class="row">
            <div class="col-md-12">
              
                
                <div class="form-group">
                    <select name="checkBoxArray" class="form-control">
                        <option value="send">Send</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send" class="btn btn-info form-control">
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
                    </tr>
                  </thead>
                  <tbody>
                      
                      @foreach($owner->assets as $asset)
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





