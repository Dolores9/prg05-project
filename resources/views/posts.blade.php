@extends('layouts.app')
@section('content')

         <article>
             <h1>Anakin skywalker</h1>

            <h3>Why anakin Skywalker is so cool!:)</h3>
             <p>
                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
             </p>
{{--             <p>{{$post->title}}</p>--}}
         </article>


         <table>
             <tr>
                 <td> ID </td>
                 <td>Interest</td>
                 <td> Description</td>
             </tr>
             @foreach($interests as $interest)
             <tr>
                 <td>{{$interest['id']}} </td>
                 <td>{{$interest['interest']}}</td>
                 <td>{{$interest['description']}}</td>
             </tr>
             @endforeach()
         </table>





<a href="{{route('home')}} ">go back to home page</a>
@endsection
