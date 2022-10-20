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


                 <a href="{{route('delete', ['id' => $interest['id']])}}" >delete</a>
             @endforeach
         </table>



         <a href="">edit</a>
{{--         <a href="{{route('delete', ['id' => $interest['id']])}}" >delete</a>--}}





<a href="{{route('home')}} ">go back to home page</a>
@endsection
