@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="mt-3 mb-4">Modifica Post</h1>

        <div class="w-50">
            <form action="{{ route('admin.posts.update', $post)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label sc-label">Titolo </label>
                    <input type="text" id="name" name="title"
                    value="{{$post->title }}"
                    class="form-control"
                    placeholder="Titolo">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenuto</label>
                    <textarea
                    class="form-control"
                    name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
                </div>

                <div class="input-group mb-3">

                    <select class="form-select" name="category_id">

                      <option value="">Seleziona una categoria</option>
                      @foreach ($categories as $category)

                      <option
                        @if($category->id == old($category->id, $post->category ? $post->category->id : '' ))
                            selected
                        @endif value="{{$category->id}}">
                        {{$category->name}}
                        </option>
                      @endforeach

                    </select>

                </div>

                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>

    </div>
@endsection
