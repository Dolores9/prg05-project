@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<h2>Welcome to ...</h2>
<h1>Star Wars Blog</h1>

<ul>
    <li><a href="">about this site</a></li>
    <li><a href="{{route('interests.create')}}">post something</a> </li>
    <li><a href="{{route('admin')}}">Admin?</a> </li>

</ul>


<h1>Hello there star wars fan</h1>




<a href="{{route('interests.index')}}">go to blog posts!</a>

@endsection
