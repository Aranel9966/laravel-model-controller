@extends('layouts/layout')
@section('content')
    <div class="container d-flex flex-row ">

        @foreach ($movie as $item)
        <div class="card ">
            {{$item->title}}
            
        </div>
        @endforeach
    </div>
@endsection