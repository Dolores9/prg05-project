@extends('layouts.app')
@section('content')

         <article>

{{--             <h1>{{$interest['title']}}</h1>--}}

{{--         <h2>{{$interest['interest']}}</h2>--}}

         </article>

         @foreach($interests as $interest)
                 <h1>{{$interest['title']}}</h1>

                 {{$interest['interest']}}
                 {{$interest['description']}}
         @endforeach

         <br>
         <a href="{{route('home')}} ">go back to home page</a>
@endsection
