@extends('layouts.admin')

@section('content')


<h1>Create Users</h1>

{!! Form::open(['method'=>'POST', 'action'=>'UsersController@store'])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('email', 'Email:')!!}
    {!!Form::email('email', null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('site_id', 'Site:')!!}
    {!!Form::select('site_id', $sites, null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('role_id', 'Role:')!!}
    {!!Form::select('role_id', $roles, null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('status', 'Status:')!!}
    {!!Form::select('status', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('password', 'Password:')!!}
    {!!Form::password('password',  ['class'=>'form-control'])!!} 

</div>

    {!!Form::submit('Create', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop