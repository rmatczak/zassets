@extends('layouts.admin')

@section('content')


<h1>Update Category</h1>

{!! Form::model($subcategory,['method'=>'PATCH', 'action'=>['SubcategoriesController@update', $subcategory->id]])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>
<div class="form-group">
    
    {!!Form::label('category_id', 'Category:')!!}
    {!!Form::text('category_id', $category, null, ['class'=>'form-control'])!!} 

</div>

    {!!Form::submit('Update', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop

