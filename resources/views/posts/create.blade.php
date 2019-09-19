@extends('layouts.app')

@section('content')
    <h1>Δημιουργία άρθρου</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Τίτλος')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('category', 'Κατηγορία')}}
            {{Form::select('category', ['proorismoi' => 'Προορισμοί', 'drastiriotites' => 'Δραστηριότητες', 'geuseis' => 'Γεύσεις', 'eidhseis' => 'Ειδήσεις', 'exoplismos' => 'Εξοπλισμός', 'vouno' => 'Βουνό', 'thalassa' => 'Θάλασσα'], 'topia', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Κείμενο')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
            {{Form::submit('Υποβολή', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection