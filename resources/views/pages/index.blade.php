@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>films</h1>
<ul>
    @foreach ($movies as $movie)
    <li>

    </li>
    @endforeach
</ul>
@endsection