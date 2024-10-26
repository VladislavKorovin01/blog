@extends('layouts.main')

@section('content')
<form class="form col-3 m-auto" method="post" action="{{route('post.update',$post->id)}}">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title" class="form-label">Ttile</label>
      <input type="text" class="form-control" id="title" name='title' value="{{$post->title}}"/>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description">{{$post->description}}</textarea>
    </div>
    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select class="form-select" name="category_id" id="category_id">
        @foreach ($categories as $category)
            <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection