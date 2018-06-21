@extends('layouts.admin')

@section('content')


<h1>Create Subcategory</h1>

{!! Form::open(['method'=>'POST', 'action'=>'SubcategoriesController@store'])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>

<div class="form-group">
    
    {!!Form::label('category_id', 'Category:')!!}
    {!!Form::select('category_id', $categories, null, ['class'=>'form-control'])!!}
    
</div>


    {!!Form::submit('Create Subcategory', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop

