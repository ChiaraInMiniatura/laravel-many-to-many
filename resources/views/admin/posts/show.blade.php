@extends('layouts.app')

@section('content')
<div class="container">

 <h1>SHOW</h1>
 <h4>Titolo: {{ $post->title}}</h4>
 <p>Categoria: {{ $post->category ? $post->category->name  : '-'  }}</p>

 @if ($post->tags)

    @foreach ($post->tags as $tag)
        <span class="badge bg-primary">{{$tag->name}}</span>
    @endforeach

 @endif
 <p>Contenuto: {{ $post->content}}</p>

 <a class="btn btn-success" href="{{route('admin.posts.index')}}">Torna all'elenco post <<</a>

</div>
@endsection
