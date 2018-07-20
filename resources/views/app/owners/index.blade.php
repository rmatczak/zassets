@extends('layouts/user')
@section('content')

          <h1>Manage Owners</h1>
          <br>

          
          @if($owners)
          <div class="row">
            <div class="col-md-12">
              
              <div class="table-responsive">
              
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>AD login</th>
                      <th>Department</th>
                      <th>Position</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($owners as $owner)
                    <tr>
                      <td>{{$owner->id}}</td>
                      <td>{{$owner->name}}</td>
                      <td>{{$owner->email}}</td>
                      <td>{{$owner->adlogin}}</td>
                      <td>{{$owner->department}}</td>
                      <td>{{$owner->position}}</td>
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                             
                            <li><a href='{{route('owners.edit', $owner->id)}}'>Edit</a></li>
                            <li><a href='{{route('documents.return', $owner->id)}}'>Asset return</a></li>
                            <li><a href='{{route('owners.show', $owner->id)}}'>Assets</a></li>
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