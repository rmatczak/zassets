@extends('layouts.user')

@section('content')


<h1>Create Users</h1>

{!! Form::open(['method'=>'POST', 'action'=>'DocumentsController@store'])!!} 
{{ Form::hidden('doctype_id',1)}}
{{ Form::hidden('status',1)}} 
<div class="form-group">
    
    {!!Form::label('number', 'Number:')!!}
    {!!Form::text('number', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('vendor_id', 'Vendor:')!!}
    {!!Form::select('vendor_id', $vendors, null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('ticket', 'Ticket:')!!}
    {!!Form::text('ticket', null, ['class'=>'form-control'])!!} 

</div>

    {!!Form::submit('Create Document', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop