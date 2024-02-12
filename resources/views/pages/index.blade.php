@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>films</h1>
<div class="container">
    <div class="row">
        <ul class="d-flex flex-wrap">
            @foreach ($movies as $movie)
            <li class="list-group-item col-3 my-3 p-2">
                <a href="#">
                    <div class="border bg-primary text-white">
                        <div>
                            titolo:{{$movie['title']}}
                        </div>
                        <div>
                            nazionalita:{{$movie['nationality']}}
                        </div>
                        <div>
                            data uscita:{{$movie['date']}}
                        </div>
                        <div>
                            voto generale:{{$movie['vote']}}
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>

    </div>
</div>
@endsection