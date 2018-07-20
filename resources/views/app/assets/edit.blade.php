@extends('layouts.user')

@section('content')


<h1>Update Asset: {{$asset->name}}</h1>
<br><br>
{!! Form::model($asset, ['method'=>'PATCH', 'action'=>['AssetsController@update', $asset->id]])!!}

    {{ Form::hidden('subcategory_id', $asset->subcategory_id) }}
    {{ Form::hidden('status', $asset->status)}}
    {{ Form::hidden('readiness', $asset->readiness)}}
    {{ Form::hidden('quantity', $asset->quantity) }}
    


   
        <div class="form-group">

            {!!Form::label('name', 'Name:')!!}
            {!!Form::text('name', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('partnumber', 'Part No:')!!}
            {!!Form::text('partnumber', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('serial', 'Serial:')!!}
            {!!Form::text('serial', null, ['class'=>'form-control'])!!}
        </div>
        
       
        <div class="input-group">
            {!!Form::label('location_id', 'Location:')!!}
            {{Form::select('location_id', $locations, $asset->location ? $asset->location->id : 'no location' , ['class'=>'form-control'])}}
        </div>

<div class="form-group">

    {!!Form::submit('Update', ['class'=>'btn btn-info'])!!}
    
</div>
{!!Form::close()!!}

@include('includes.form_error')

@stop