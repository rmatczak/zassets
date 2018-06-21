@extends('layouts.admin')

@section('content')


<h1>Edit Vendor</h1>

{!! Form::model($vendor, ['method'=>'PATCH', 'action'=>['VendorsController@update', $vendor->id]])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('street', 'Street:')!!}
    {!!Form::text('street', $vendor->address->first()->street, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('city', 'City:')!!}
    {!!Form::text('city', $vendor->address->first()->city, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('zipcode', 'Zipcode:')!!}
    {!!Form::text('zipcode', $vendor->address->first->zipcode, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('country', 'Country:')!!}
    {!!Form::text('country', $vendor->address->first()->country, ['class'=>'form-control'])!!} 

</div>

    {!!Form::submit('Submit', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop