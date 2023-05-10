@extends('layouts/layout')
@section('content')
    <ul>

        @foreach ($movie as $item)
        <li>
            {{$item->title}}
            
        </li>
        @endforeach
    </ul>
@endsection