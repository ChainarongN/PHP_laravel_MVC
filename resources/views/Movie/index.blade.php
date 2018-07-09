@extends('Post.app')

@section('content')
    <ul>
        <br>
        <h1>Movie</h1>
        <br>
        @foreach($posts as $post)
            <li>
                <a class="btn btn-default" href="{{route('posts.show',$post->mo_id)}}" style="width: 30ch">{{$post->mo_name}}</a>
            </li>
        @endforeach
    </ul>

@endsection