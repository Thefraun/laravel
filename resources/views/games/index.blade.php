@extends('layouts.master') @section('content')
<div class="container">
    <h1 class="text-center pb-5"> Games </h1>
    <div class="row">
        @hasanyrole('admin')
        <div class="col-sm-2">
            <a class="btn btn-primary mb-4" href="/games/create">
    Create
</a>
        </div>
        @endhasanyrole
    </div>
    @foreach ($games as $game)
    <div class="card bg-dark mb-3">
        <div class="card-header">
            @hasanyrole('admin')
            <a class="btn btn-sm btn-danger float-right" href="/games/delete/{{ $game->id }}">Delete</a>
            @endhasanyrole
            <h3 class="card-title">{{ $game->title }}</h3>
            <div class="card-body">
                <div class="row">
                    @foreach ($game->images as $image) @if ($loop->first)
                    <div class="col-sm-4 pb-2">
                        <img src="/storage/{{ $image->path }}" class="w-100">
                    </div>
                    @endif @endforeach
                    <div class="col-sm-8">
                        <p class="card-text">
                            {{ str_limit($game->body, 500, '...') }}
                        </p>
                        <a href="/games/{{ $game->id }}" class="btn btn-success">
                        Read More
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection