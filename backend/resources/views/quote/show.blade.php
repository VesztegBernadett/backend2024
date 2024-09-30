@extends('layouts.main')

@section("title", $title ?? "Idézet")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">{{$title}}</h1>
                <blockquote class="blockquote">
                {{$quote}}
                </blockquote>
                <p class="text-end">{{$name}}</p>
        </div>
    </div>
</div>
@endsection