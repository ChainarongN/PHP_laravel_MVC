@extends('Post.app')

@section('content')
    <ul>
        <br>
        <h1>Movie</h1>
        <br>
        @foreach($posts as $post)
            <li>
                <a class="btn btn-default" href="{{route('room.show',$post->ro_id)}}" style="width: 30ch">{{$post->ro_name}}</a>
            </li>
        @endforeach
    </ul>

@endsection