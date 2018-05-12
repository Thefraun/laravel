@extends('layouts.master') @section('content')
<div class="container">
    <form method="POST" action="/games" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Game title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" type="text" name="body" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input class="form-control" type="file" name="file">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
        @if (count($errors))
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </form>
</div>
@endsection