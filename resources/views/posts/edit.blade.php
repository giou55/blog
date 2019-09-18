@extends('layouts.app')

@section('content')
    <h1>Επεξεργασία άρθρου</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Τίτλος')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('category', 'Κατηγορία')}}
            {{Form::select('category', ['persons' => 'Πρόσωπα', 'city' => 'Πόλη', 'stories' => 'Ιστορίες', 'taste' => 'Γεύση', 'news' => 'Νέα', 'art' => 'Τέχνες'], 'persons', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Κείμενο')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 
                                                   'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Υποβολή', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection