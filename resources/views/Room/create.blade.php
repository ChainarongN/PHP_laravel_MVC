@extends('Post.app')

@section('content')
    <br><br><br>
    {{--<form method="post" action="/posts" >--}}
    {!! Form:: open(['method'=>'POST','action'=>'RoomController@store']) !!}
    {{csrf_field()}}
    <h1>Create Movie</h1><br>
    {{--<div class="form-group">--}}
    {{--<br>--}}
    <table id="table">
        <tr>
            <td>{!! Form ::label('name','Name') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="ro_name" placeholder="Enter name"></td>
        </tr>
        <tr>
            <td>{!! Form ::label('status','Status') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="ro_status" placeholder="Enter status"></td>
        </tr>
    </table>
    <br><br>

    {!! Form :: submit('Create Post',['class'=>"btn btn-warning"]) !!}
    <a class="btn btn-success" href="{{route('room.index')}}" style="width: 15ch">Back</a>
    {!! Form:: close() !!}

    <br>
    {{--@if(count($errors) > 0)--}}
    {{--<div>--}}
    {{--<ul>--}}
    {{--@foreach($errors->all() as $error)--}}
    {{--<li>--}}
    {{--{{$error}}--}}
    {{--</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--@endif--}}

@endsection