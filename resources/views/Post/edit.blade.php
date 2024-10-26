@extends('layouts.main')

@section('content')
<form class="form col-3 m-auto" method="post" action="{{route('post.update',$post->id)}}">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title" class="form-label">Ttile</label>
      <input type="text" class="form-control" id="title" name='title' value="{{$post->title}}"/>
      @error('title')
        <p class="text-danger mt-3">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description">{{$post->description}}</textarea>
      @error('description')
          <p class="text-danger mt-3">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select class="form-select" name="category_id" id="category_id">
        @foreach ($categories as $category)
            <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
      </select>
      @error('category_id')
          <p class="text-danger mt-3">{{$message}}</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection