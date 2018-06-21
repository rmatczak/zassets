@extends('layouts.admin')

@section('content')


<h1>Edit Site</h1>

{!! Form::model($site, ['method'=>'PATCH', 'action'=>['SitesController@update', $site->id]])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('shortname', 'Short name:')!!}
    {!!Form::text('shortname', null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('street', 'Street:')!!}
    {!!Form::text('street', $site->address->first()->street, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('city', 'City:')!!}
    {!!Form::text('city', $site->address->first()->city, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('zipcode', 'Zipcode:')!!}
    {!!Form::text('zipcode', $site->address->first()->zipcode, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('country', 'Country:')!!}
    {!!Form::text('country', $site->address->first()->country, ['class'=>'form-control'])!!} 

</div>

    {!!Form::submit('Submit', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop