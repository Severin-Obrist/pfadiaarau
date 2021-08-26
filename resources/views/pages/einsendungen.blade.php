@extends('layouts.app')

@section('content')
    <h1> Welcome @ {{$title}} </h1>
    <p>Einsendungen</p>
    @if (count($groups) > 0)
        <ul>
            @foreach ($groups as $group)
                <li>{{$group}}</li>
            @endforeach
        </ul>
    @endif
@endsection
