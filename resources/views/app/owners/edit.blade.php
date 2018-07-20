@extends('layouts.user')

@section('content')


<h1>Edit Owner</h1>

{!! Form::model($owner, ['method'=>'PATCH', 'action'=>['OwnersController@update', $owner->id]])!!} 
    
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



    {!!Form::submit('Edit', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop