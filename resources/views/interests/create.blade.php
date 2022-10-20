@extends('layouts.app')

@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
    {{$error}}
        <br>

    @endforeach

@endif



@if(Auth::user()->admin)
ADMIN
@endif


    <form action="{{route('interests.store')}}" method="post">
        @csrf
        <input name="title" type="text">
        <br>
        <select name="interest" class="form" id="control-714036">
            <option value="Force users" selected="true" >Force users</option>
            <option value="History">History</option>
            <option value="Empire" >Empire</option>
        </select>
        <br>
        <input type="text" class="form"   name="description">
         <br>
        <button type="submit" class="submit btn-default btn">upload
            <br>
        </button>



    </form>






@endsection
