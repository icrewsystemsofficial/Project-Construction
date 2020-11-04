@extends('layouts.app')

@section('content')
    <h2>{{$tit}}</h2>
    @if(count($data) > 0)
        <ul>
            @foreach($data as $i)
                <li>{{$i}}</li>
            @endforeach
        </ul>
    @endif
@endsection