@extends('layouts.app')

@section('content')


    <form>
        <input type="text">
        <br>
        <select class="form" id="control-714036">
            <option value="force users" selected="true" >Force users</option>
            <option value="history">History</option>
            <option value="empire" >Empire</option>
        </select>
        <br>
        <input type="text" class="form"   name="upload">
         <br>
        <button type="submit" class="submit btn-default btn">upload
            <br>
        </button>



    </form>






@endsection
