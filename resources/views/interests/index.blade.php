@extends('layouts.app')
@section('content')

         <article>

{{--             <h1>{{$interest['title']}}</h1>--}}

{{--         <h2>{{$interest['interest']}}</h2>--}}

         </article>


         can't find your post?
             <form method="get" action="{{url('/search')}}">
             <input type="text" name="search" placeholder="Zoek">


                 @foreach($interests as $interest)
                     <h1>{{$interest['title']}}</h1>

                     {{$interest['interest']}}
                     {{$interest['description']}}
                 @endforeach
             </form>


         <br>
         <a href="{{route('home')}} ">go back to home page</a>

@endsection
