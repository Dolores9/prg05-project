
@extends('layouts.app')

@section('content')


@if(Auth::user()->admin)

@endif



@foreach($interests as $interest)
    <h1>{{$interest['title']}}</h1>



    {{$interest['interest']}}
    {{$interest['description']}}
    <a href="{{route('delete', ['id' => $interest['id']])}}" >delete</a>
{{--    <a href="{{route('interests.edit')}}">edit</a>--}}




@endforeach





@endsection
