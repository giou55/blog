@extends('layouts.app')

<?php
if(count($posts) > 0) {
    switch ($category) {
        case "proorismoi":
            $category = "Προορισμοί";
            break;
        case "drastiriotites":
            $category = "Δραστηριότητες";
            break;
        case "geuseis":
            $category = "Γεύσεις";
            break;
        case "eidhseis":
            $category = "Ειδήσεις";
            break;
        case "exoplismos":
            $category = "Εξοπλισμός";
            break;
        case "vouno":
            $category = "Βουνό";
            break;
        case "thalassa":
            $category = "Θάλασσα";
            break;
        default:
            $category = "Άρθρα";
    }
} else {
    $category = "Άρθρα";
}
?>

@section('content')
    @if(count($posts) > 0)
        <h1>{{$category}}</h1>
        {{$posts->links()}}
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Δημοσιεύτηκε στις {{$post->created_at}} από {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Δεν βρέθηκαν άρθρα</p>
    @endif
@endsection