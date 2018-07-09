@extends('Post.app')

@section('content')
    <br><br><br>
    {{--<form method="post" action="/posts" >--}}
    {!! Form:: open(['method'=>'POST','action'=>'PostController@store','files',true]) !!}
    {{csrf_field()}}
    <h1>Create Movie</h1><br>
    {{--<div class="form-group">--}}
    {{--<br>--}}
    <table id="table">
        <tr>
            <td>{!! Form ::label('name','Name') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="mo_name" placeholder="Enter name"></td>
        </tr>
        <tr>
            <td>{!! Form ::label('type','Type') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="mo_type" placeholder="Enter Type"></td>
        </tr>
        <tr>
            <td>{!! Form ::label('actor','Actor') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="mo_actor" placeholder="Enter actor"></td>
        </tr>
        <tr>
            <td>{!! Form ::label('detail','Detail') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="mo_detail" placeholder="Enter detail"><br></td>
        </tr>
        <tr>
            <td>{!! Form ::label('cost','Cost') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="mo_cost" placeholder="Enter cost"></td>
        </tr>
        <tr>
            <td>{!! Form ::label('date','Date') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="mo_date" placeholder="Enter date"></td>
        </tr>
        <tr>
            <td>{!! Form ::label('date_end','Date_end') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="mo_date_end" placeholder="Enter date_end"></td>
        </tr>
        <tr>
            <td>{!! Form ::label('status','Status') !!}</td>
            <td>&nbsp;&nbsp;<input type="text" name="status" placeholder="Enter Status"></td>
        </tr>
        <tr>
            <td>{!! Form ::label('img','IMG') !!}</td>
            <td>
                {!! Form::file('path',['class'=>'form-control']) !!}
            </td>
        </tr>
    </table>
    <br><br>

    {!! Form :: submit('Create Post',['class'=>"btn btn-warning"]) !!}
    <a class="btn btn-success" href="{{route('posts.index')}}" style="width: 15ch">Back</a>
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