@extends('layouts.app')
@section('content')

         <article>

{{--             <h1>{{$interest['title']}}</h1>--}}

{{--         <h2>{{$interest['interest']}}</h2>--}}

         </article>


         <table>
             <tr>
                 <td>Interest</td>
                 <td> Description</td>
             </tr>
             @foreach($interests as $interest)
                 <h1>{{$interest['title']}}</h1>


             <tr>
                 <td>{{$interest['interest']}}</td>
                 <td>{{$interest['description']}}</td>
             </tr>
             @endforeach()
         </table>





<a href="{{route('home')}} ">go back to home page</a>
@endsection
