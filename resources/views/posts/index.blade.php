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
    <h1>{{$category}}</h1>
    {{$posts->links()}}

    @if(count($posts) > 0)
        <div class="container jumbotron">
            <div>
                <div class="row" style="display: flex;flex-wrap: wrap;">
                @foreach($posts as $post)
                        <div class="col-md-6 col-xs-12" style="margin:20px 0">
                            <img style="width:80%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Δημοσιεύτηκε στις <b>{{ date('d-m-Y', strtotime($post->created_at)) }}</b> από <b>{{$post->user->name}}</b></small>
                        </div>
                @endforeach
                </div>
            </div>
        </div>
    @else
        <p>Δεν βρέθηκαν άρθρα</p>
    @endif
@endsection