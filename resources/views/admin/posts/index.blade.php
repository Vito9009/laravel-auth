@extends('layouts.app')

@section('content')
<table class="table table-bordered table-white">
    <thead>
      <tr>
        <th class="align-middle text-center" scope="col">ID</th>
        <th class="align-middle text-center" scope="col">Title</th>
        <th class="align-middle text-center" scope="col">Content</th>
        <th class="align-middle text-center" scope="col">Option</th>
        <th class="align-middle text-center" scope="col">Edit</th>
        <th class="align-middle text-center" scope="col">Delete</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($posts as $post)
            <tr>
                <th class="align-middle text-center" scope="row">{{$post["id"]}}</th>
                <td class="align-middle text-center">{{$post["title"]}}</td>
                <td class="align-middle text-center">{{$post["content"]}}</td>
                <td class="align-middle text-center"><a href="#"><button type="button" class="btn btn-secondary">Read</button></a></td>
                <td class="align-middle text-center"><a href=""><button type="button" class="btn btn-secondary">Edit</button></a></td>
                <td class="align-middle text-center">
                  <form action="" method="post">

                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-secondary" onclick="return confirm('Sei sicuro? Il prodotto verrà eliminato definitivamente')">Delete</button>

                  </form>
                </td>
             </tr>
        @endforeach
    </tbody>
  </table>

@endsection

@dump($posts);