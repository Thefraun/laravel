@extends('layouts.master') @section('content')
<div class="container">
    <h1 class="text-center"> Review </h1>
    <div class="card bg-dark">
        @if (!empty($game->image))
    	<img class="card-img-top" src="/storage/{{ $game->image }}">
        @endif
        <h3 class="card-title">{{ $game->title}}</h3>
        <h3 class="card-text">{{$game->body}}</h3>
        <div class="row">
        	<div class="col-sm-2">
            <a class="btn btn-danger" href="/games/delete/{{$game->id}}">Delete</a>
        </div>
        </div>
    </div>
    <hr>
    <div class="comments">
        @foreach ($game->comments as $comment)
        <div class="row mb-2 justify-content-center">
            <div class="col-sm-8">
                <div class="card bg-dark">
                    <div class="card-title p-2">
                        {{ \App\User::find($comment->user_id)->name }}<br>
                        <span class="small">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="card-block p-2">
                        {{ $comment->body }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <br>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card bg-dark">
                    <div class="card-block">
                        @if (Route::has('login')) @auth
                        <form action="/games/{{ $game->id}}/comments" method="POST">
                            {{csrf_field()}}
                            <div class="form-group p-2">
                                <textarea name="body" class="form-control" placeholder="something to say?"></textarea>
                            </div>
                            <div class="form-group text-right p-2">
                                <button class="btn btn-success" type="submit">add comment</button>
                            </div>
                        </form>
                        @else
                        <div class="p-3 text-center">
                            <a class="btn btn-success" href="/login">login to comment</a>
                        </div>
                        @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection