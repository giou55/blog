@extends('layouts.app')

@section('content')
<div class="jumbotron">

    <a href="/category/{{$post->category}}" class="btn btn-default">Πίσω</a>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Διαγραφή', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}

            <a href="/posts/{{$post->id}}/edit" class="btn btn-default pull-right" style="margin-right: 20px;">Επεξεργασία</a>
        @endif
    @endif

    <h2>{{$post->title}}</h2>
    <img style="width:70%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Δημοσιεύτηκε στις <b>{{ date('d-m-Y', strtotime($post->created_at)) }}</b> από <b>{{$post->user->name}}</b></small>
</div>
@endsection