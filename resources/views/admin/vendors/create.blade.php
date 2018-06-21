@extends('layouts.admin')

@section('content')


<h1>Create Vendor</h1>

{!! Form::open(['method'=>'POST', 'action'=>'VendorsController@store'])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('street', 'Street:')!!}
    {!!Form::text('street', null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('city', 'City:')!!}
    {!!Form::text('city', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('zipcode', 'Zipcode:')!!}
    {!!Form::text('zipcode', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('country', 'Country:')!!}
    {!!Form::text('country', null, ['class'=>'form-control'])!!} 

</div>

    {!!Form::submit('Create', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop