@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
    <h1>Edit Post</h1>
    {!! Form::open(['action'=>['PostsController@update',$post->id],'methode'=>'POST']) !!}
        <div>
            {{Form::label('title','Title')}}
            {{Form::text('title', $post->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div>
            {{Form::label('title','Title')}}
            {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{form::submit('submit',['class'=>'primary'])}}
    {!! Form::close() !!}

@endsection
   
