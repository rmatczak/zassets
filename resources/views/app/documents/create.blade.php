@extends('layouts.user')

@section('content')


<h1>Create Document</h1>

{!! Form::open(['method'=>'POST', 'action'=>'DocumentsController@store'])!!} 
{{ Form::hidden('doctype_id','1')}}
{{ Form::hidden('user_id', $userid)}}
{{ Form::hidden('site', $site)}} 
{{ Form::hidden('status','1')}}
{{ Form::hidden('readiness','1')}} 
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


<div class="form-group fieldGroup">
    <h3>Document position</h3>
        <div class="input-group">
            {!!Form::label('subcategory_id', 'Item:')!!}
            {!!Form::select('subcategory_id[]', $subcategories, null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">

            {!!Form::label('name', 'Name:')!!}
            {!!Form::text('name[]', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('partnumber', 'Part No:')!!}
            {!!Form::text('partnumber[]', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('serial', 'Serial:')!!}
            {!!Form::text('serial[]', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('quantity', 'Quantity:')!!}
            {!!Form::text('quantity[]', null, ['class'=>'form-control'])!!}
        </div>
        <div class="input-group">
            {!!Form::label('location_id', 'Item:')!!}
            {!!Form::select('location_id[]', $locations, null, ['class'=>'form-control'])!!}
        </div>
    
            <div class="input-group-addon"> 
                <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
            </div>
        </div>
    

<div class="form-group fieldGroupCopy" style="display: none;">
    <div class="input-group">
        <h3>Document position</h3>
        <div class="input-group">
            {!!Form::label('subcategory_id', 'Item:')!!}
            {!!Form::select('subcategory_id[]', $subcategories, null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">

            {!!Form::label('name', 'Name:')!!}
            {!!Form::text('name[]', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('partnumber', 'Part No:')!!}
            {!!Form::text('partnumber[]', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('serial', 'Serial:')!!}
            {!!Form::text('serial[]', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('quantity', 'Quantity:')!!}
            {!!Form::text('quantity[]', null, ['class'=>'form-control'])!!}
        </div>
        <div class="input-group">
            {!!Form::label('location_id', 'Item:')!!}
            {!!Form::select('location_id[]', $locations, null, ['class'=>'form-control'])!!}
        </div>
        <div class="input-group-addon"> 
            <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
        </div>
    </div>
</div>






<div class="form-group">

    {!!Form::submit('Create Document', ['class'=>'btn btn-info'])!!}
    
</div>
{!!Form::close()!!}

@include('includes.form_error')

@stop