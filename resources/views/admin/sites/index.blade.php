@extends('layouts/admin')
@section('content')

          <h1>Manage Sites</h1>
          <br>

          @if($sites)
          <div class="row">
            <div class="col-md-12">
             
              <div class="table-responsive">
             
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Short name</th>
                      <th>Street</th>
                      <th>City</th>
                      <th>Zip</th>
                      <th>Country</th> 
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($sites as $site)
                    <tr>
                      <td>{{$site->id}}</td>
                      <td>{{$site->name}}</td>
                      <td>{{$site->shortname}}</td>
                      <td>{{$site->address ? $site->address->first()->street : 'No street'}}</td>
                      <td>{{$site->address ? $site->address->first()->city : 'No city'}}</td>
                      <td>{{$site->address ? $site->address->first()->zipcode : 'No zipcode'}}</td>
                      <td>{{$site->address ? $site->address->first()->country : 'No country'}}</td>
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                             
                            <li><a href='{{route('site.edit', $site->id)}}'>Edit</a></li>
                            
                           
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

