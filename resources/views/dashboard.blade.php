@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Πίνακας ελέγχου</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Δημιουργία νέου άρθρου</a>
                    <h3>Τα άρθρα μου</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Τίτλος</th>
                                <th>Κατηγορία</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <?php
                                    switch ($post->category) {
                                        case "proorismoi":
                                            $post->category = "Προορισμοί";
                                            break;
                                        case "drastiriotites":
                                            $post->category = "Δραστηριότητες";
                                            break;
                                        case "geuseis":
                                            $post->category = "Γεύσεις";
                                            break;
                                        case "eidhseis":
                                            $post->category = "Ειδήσεις";
                                            break;
                                        case "exoplismos":
                                            $post->category = "Εξοπλισμός";
                                            break;
                                        case "vouno":
                                            $post->category = "Βουνό";
                                            break;
                                        case "thalassa":
                                            $post->category = "Θάλασσα";
                                            break;
                                        default:
                                            $post->category = "Άρθρα";
                                    }
                                ?>
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->category}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Επεξεργασία</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Διαγραφή', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>Δεν υπάρχουν άρθρα από εσάς.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
