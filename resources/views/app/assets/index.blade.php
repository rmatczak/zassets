@extends('layouts/user')
@section('content')

          <h1>All Assets</h1>
          <br>
          @if($assets)
          <div class="row">
            <div class="col-md-12">
              
              <div class="table-responsive">
                
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Asset</th>
                      <th>Tag</th>
                      <th>Part no.</th>
                      <th>Serial</th>
                      <th>Status</th>
                      <th>Owner</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($assets as $asset)
                    <tr>
                      <td>{{$asset->id}}</td>
                      <td>{{$asset->subcategory ? $asset->subcategory->name : 'uncategorized'}}</td>
                      <td>{{$asset->name}}</td>
                      <td>{{$asset->partnumber}}</td>
                      <td>{{$asset->serial}}</td>
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
                             
                            <li><a href='{{route('assets.edit', $asset->id)}}'>Edit</a></li>
                            
                           
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

