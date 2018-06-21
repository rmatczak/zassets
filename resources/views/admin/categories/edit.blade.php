@extends('layouts.admin')

@section('content')


<h1>Update Category</h1>

{!! Form::model($category,['method'=>'PATCH', 'action'=>['CategoriesController@update', $category->id]])!!} 
    
<div class="form-group">
    
    {!!Form::label('name', 'Name:')!!}
    {!!Form::text('name', null, ['class'=>'form-control'])!!} 

</div>


    {!!Form::submit('Update', ['class'=>'btn btn-info'])!!}
    

{!!Form::close()!!}

@include('includes.form_error')

@stop

