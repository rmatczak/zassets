@extends('layouts.user')

@section('content')


<h1>Create Location</h1>

{!! Form::open(['method'=>'POST', 'action'=>'LocationsController@store'])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('site_id', 'Site:')!!}
    {!!Form::select('site_id', $sites, null, ['class'=>'form-control'])!!} 

</div>


    {!!Form::submit('Create', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop