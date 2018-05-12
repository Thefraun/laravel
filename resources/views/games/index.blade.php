@extends('layouts.master') @section('content')
<div class="container">
    <h1 class="text-center pb-5"> Games </h1>
    <div class="row">
        <div class="col-sm-2">
            <a class="btn btn-primary mb-4" href="/games/create">
	Create
</a>
        </div>
    </div>
    @foreach ($games as $game)
    <div class="card bg-dark mb-3">
        <h3 class="card-title">
			<a href="games/{{ $game->id }}">
				{{ $game->title }}
			</a>
		</h3>
        <p class="card-text">
            {{ $game->body }}
        </p>
    </div>
    @endforeach
</div>
@endsection