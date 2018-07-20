@extends('layouts/user')
@section('content')

          <h1>Manage Locations</h1>
          <br>


          @if($locations)
          <div class="row">
            <div class="col-md-12">
              
              <div class="table-responsive">
                
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Site</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($locations as $location)
                    <tr>
                      <td>{{$location->id}}</td>
                      <td>{{$location->name}}</td>
                      <td>{{$location->sites->first()->name}}</td>
                      
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                             
                            <li><a href='{{route('locations.edit', $location->id)}}'>Edit</a></li>
                            
                           
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

