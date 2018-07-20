@extends('layouts/user')
@section('content')



           @if($owner)
          <h1>Assets owned by {{$owner->name}}</h1>
                    
          <br><br>
            
           
            
            
          <div class="row">
            <div class="col-md-12">
              
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                        
                        <th>#</th>
                        <th>Asset</th>
                        <th>Tag</th>
                        <th>Part no.</th>
                        <th>Serial</th>
                        
                    </tr>
                  </thead>
                  <tbody>
                      
                      @foreach($owner->assets as $asset)
                    <tr>
                        
                        <td>{{$asset->id}}</td>
                        <td>{{$asset->subcategory ? $asset->subcategory->name : 'uncategorized'}}</td>
                        <td>{{$asset->name}}</td>
                        <td>{{$asset->partnumber}}</td>
                        <td>{{$asset->serial}}</td>
                        
                      
                      
                    </tr>
                    
                       @endforeach 
                    
                  </tbody>
                </table>
              </div>
                
            </div>
              
          </div>
            
          @endif
        
@stop





