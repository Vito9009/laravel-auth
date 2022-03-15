@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center my-5">Scrivi un nuovo articolo</h3>

        <form action="{{route('admin.posts.store')}}" method="POST">

            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" placeholder="Titolo" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="30" placeholder="Testo articolo"></textarea>
            </div>

            <button type="submit" class="btn btn-secondary my-5 text-center">Salva</button>
        </form>
    </div>

@endsection