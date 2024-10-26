@extends('layouts.main')

@section('content')
<div class="col-1">
    <form class="mb-3" action="{{route('post.delete',$post->id)}}" method="post">
        @csrf
        @method('delete')
        <input class="btn btn-danger" type="submit" value="Delete"/>
    </form>
    <a class="btn btn-outline-warning mb-3 d-block" href="{{route('post.edit', $post->id)}}">Edit</a>
    <a class="btn btn-primary mb-3 d-block" href="{{route('post.index')}}">Back</a>
</div>

    <div>
        {{$post->title}}
    </div>
@endsection