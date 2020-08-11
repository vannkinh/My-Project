@extends('layouts.app')
@section('content')
    {{-- <h1>Welcome to Laravel</h1>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div>
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No post found</p>
        
    @endif --}}


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)

      <tr>
        <td>{{$post->id}}</td>
        {{-- <td>{{$post->title}}</td> --}}
        <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
        <td>{{$post->body}}</td>

      <tr>
        @endforeach

    </tbody>
  </table>
</div>




@endsection
