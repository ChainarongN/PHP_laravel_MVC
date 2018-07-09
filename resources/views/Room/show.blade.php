@extends('Post.app')

@section('content')
    <h2>Show</h2>
    <h4>
        <a class="btn btn-success" href="{{route('room.edit',$post->ro_id)}}" style="width: 30ch">Edit</a>
        <a class="btn btn-success" href="{{route('room.index')}}" style="width: 30ch">Back</a>
        <h3>Name</h3> <p style="color: black">{{$post->ro_name}}</p>
        <h3>Status</h3> <p style="color: black">{{$post->ro_status}}</p>
    </h4>


@endsection