@extends('layouts.user')

@section('content')


<h1>Edit Location</h1>

{!! Form::model($location, ['method'=>'PATCH', 'action'=>['LocationsController@update', $location->id]])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('site_id', 'Site:')!!}
    {!!Form::select('site_id', $sites, null, ['class'=>'form-control'])!!} 

</div>


    {!!Form::submit('Edit', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop

