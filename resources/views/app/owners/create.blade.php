@extends('layouts.user')

@section('content')


<h1>Create Owner</h1>

{!! Form::open(['method'=>'POST', 'action'=>'OwnersController@store'])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('email', 'E-mail:')!!}
    {!!Form::email('email', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('adlogin', 'Login AD:')!!}
    {!!Form::text('adlogin', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('department', 'Department:')!!}
    {!!Form::text('department', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('position', 'Position:')!!}
    {!!Form::text('position', null, ['class'=>'form-control'])!!} 

</div>


    {!!Form::submit('Create User', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop