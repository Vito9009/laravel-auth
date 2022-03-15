@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center my-5">Modifica l'articolo</h3>

        <form action="{{route('admin.posts.update', $post->id)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" placeholder="Nome del fumetto" id="title" name="title" value="{{$post->title}}">
            </div>

            <div class="form-group">
                <label for="content">Description</label>
                <textarea class="form-control" id="content" name="content" rows="30" placeholder="Testo articolo">{{$post->content}}</textarea>
            </div>

            <div class="form-group d-none">
                <label for="published">Published</label>
                <input class="form-control" type="text" placeholder="Titolo" id="published" name="published" value="{{$post->published}}">
            </div>

            <div class="form-group d-none">
                <label for="slug">Slug</label>
                <input class="form-control" type="text" placeholder="Titolo" id="slug" name="slug" value="{{$post->slug}}">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-secondary my-5 text-center">Salva</button>
            </div>

            <div class="text-center">
                <a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-secondary">Torna alla home</button></a>
            </div>
        </form>
    </div>

@endsection