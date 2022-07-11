@extends('layouts.app')

@section('content')
<div class="container">

 <h1>Crea un Post</h1>

 @if ( $errors->any() )

 <div class="alert alert-danger" role="alert">

    <ul>

     @foreach ($errors->all() as $error )
         <li>{{$error}}</li>
     @endforeach

     </ul>

  </div>

 @endif

 <form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" value="{{old('title')}}" class="form-control" id="title" name="title" placeholder="Titolo">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Contenuto</label>
      <textarea class="form-control" name="content" id="content" cols="30" rows="10"> {{old('content')}} </textarea>

    </div>

    <div class="input-group mb-3">

        <select class="form-select" name="category_id">

          <option value="">Seleziona una categoria</option>
          @foreach ($categories as $category)

          <option @if ($category->id == old('category_id')) selected @endif value="{{$category->id}}">{{$category->name}}</option>
          @endforeach

        </select>

    </div>
    <div class="mb-3">

        @foreach ($tags as $tag)

        <input type="checkbox"
            name="tags[]"
            id="tag{{$loop->iteration}}"
            @if (in_array($tag->id, old('tags', []) ) ) checked @endif
            value="{{$tag->id}}">
        <label for="">{{$tag->name}}</label>

        @endforeach


    </div>

    <button type="submit" class="btn btn-primary">Crea</button>

</div>
@endsection
