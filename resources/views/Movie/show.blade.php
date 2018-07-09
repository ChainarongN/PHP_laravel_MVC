@extends('Post.app')

@section('content')
    <h2>Show</h2>
    <h4>
        <a class="btn btn-success" href="{{route('posts.edit',$post->mo_id)}}" style="width: 30ch">Edit</a>
        <a class="btn btn-success" href="{{route('posts.index')}}" style="width: 30ch">Back</a>
        <h3>Name</h3> <p style="color: black">{{$post->mo_name}}</p>
        <h3>Type</h3> <p style="color: black">{{$post->mo_type}}</p>
        <h3>Actor</h3> <p style="color: black">{{$post->mo_actor}}</p>
        <h3>Detail</h3> <p style="color: black">{{$post->mo_detail}}</p>
        <h3>Cost</h3> <p style="color: black">{{$post->mo_cost}}</p>
        <h3>Date</h3> <p style="color: black">{{$post->mo_date}}</p>
        <h3>Date_End</h3> <p style="color: black">{{$post->mo_date_end}}</p>
        <h3>Status</h3> <p style="color: black">{{$post->status}}</p>
        <h3>IMG</h3> <img src="/image/{{$post->path}}" style="height: 30ch">
    </h4>


@endsection