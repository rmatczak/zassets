@extends('layouts/admin')
@section('content')

          <h1>Manage Asset Subcategories</h1>
          <br>

          
          @if($subcategories)
          <div class="row">
            <div class="col-md-12">
              
              <div class="table-responsive">
              
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Asset Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($subcategories as $subcategory)
                    <tr>
                      <td>{{$subcategory->id}}</td>
                      <td>{{$subcategory->name}}</td>
                      <td>{{$subcategory->category->name}}</td>
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href='{{route('subcategories.create', $subcategory->id)}}'>Add subcategory</a></li> 
                            <li><a href='{{route('subcategories.edit', $subcategory->id)}}'>Edit</a></li>
              
                           
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



