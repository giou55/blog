@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <a href="/category/{{$post->category}}" class="btn btn-default">Πίσω</a>
    <h2>{{$post->title}}</h2>
    <img style="width:70%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Δημοσιεύτηκε στις {{$post->created_at}} από {{$post->user->name}}</small>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Επεξεργασία</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Διαγραφή', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    </div>
@endsection