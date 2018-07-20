@extends('layouts/admin')
@section('content')

          <h1>Manage Users</h1>
          <br>

          
          @if($users)
          <div class="row">
            <div class="col-md-12">
              
              <div class="table-responsive">
                
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Site</th>
                      <th>Role</th>
                      <th>Status</th>                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->sites ? $user->sites->first()->name : 'No site'}}</td>
                      <td>{{$user->role ? $user->role->name : 'Not assigned'}}</td>
                      <td>{{$user->status == 1 ? 'Active' : 'Inactive'}}</td>
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                             
                            <li><a href='{{route('users.edit', $user->id)}}'>Edit</a></li>
                            
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