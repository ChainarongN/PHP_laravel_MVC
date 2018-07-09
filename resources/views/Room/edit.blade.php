@extends('Post.app')

@section('content')
    {{csrf_field()}}
    <br>
    <h1>Edit Page </h1><br><br>
    {{--<form method="post" action="/posts/{{$post->id}}">--}}
    {!! Form:: model($post,['method'=>'PATCH','action'=>['RoomController@update',$post->ro_id]]) !!}

    {!! Form :: label('name','Name') !!}
    {!! Form :: text('ro_name',null,['class'=>'form-control']) !!}<br>

    {!! Form :: label('status','Status') !!}
    {!! Form :: text('ro_status',null,['class'=>'form-control']) !!}<br>


    {!! Form :: submit('Update Post',['class'=>'btn btn-info']) !!}


    {{--<input type="hidden" name="_method" value="PUT">--}}
    {{--<input type="text" name="title" placeholder="Enter title" value="{{$post->title}}" style="border: solid 2px black;background-color: black;color: red">--}}
    {{--<input type="submit" name="submit" value="Edit data"  class="btn btn-info btn-lg">--}}

    {!! Form:: close() !!}

    {!! Form :: open(['method'=>'DELETE','action'=>['RoomController@destroy',$post->ro_id]]) !!}
    {!! Form :: submit('Delete Post',['class'=>'btn btn-danger']) !!}
    {!! Form :: close() !!}

    {{--<form method="post" action="/posts/{{$post->id}}">--}}
    {{--{{csrf_field()}}--}}
    {{--<input type="hidden" name="_method" value="DELETE" >--}}
    {{--<input type="submit" value="DELETE" id="d1"  class="btn btn-info btn-lg">--}}
    {{--</form>--}}


@endsection