@extends('layouts.admin')

@section('content')


<h1>Create Category</h1>

{!! Form::open(['method'=>'POST', 'action'=>'CategoriesController@store'])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>


    {!!Form::submit('Create', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop

