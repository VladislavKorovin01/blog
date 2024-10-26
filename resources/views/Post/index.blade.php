@extends('layouts.main')

@section('content')
    <div>
        <a class="btn btn-primary" href="{{route('post.create')}}">Add post</a>
    </div>
    @foreach ($posts as $post)
    <a class="text-black" href="{{route('post.show',$post->id)}}">
        <div>{{{$post->id}}} {{$post->title}} {{$post->description}}</div>
    </a>
    @endforeach
@endsection