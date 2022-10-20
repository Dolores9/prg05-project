
@extends('layouts.app')

@section('content')

<h1> hallo admin</h1>
@if(Auth::user()->admin)
    <h1> hallo admin</h1>
@endif






@endsection
