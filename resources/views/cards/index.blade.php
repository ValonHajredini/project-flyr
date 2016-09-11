@extends('layoutes.layout')
@section('content')

    @foreach($cards as $card)
        <h1><a href="cards/{!! $card->id !!}">{!! $card->title !!}</a></h1>
        <p>Created at: <bt>{!! $card->created_at !!}</bt></p>
    @endforeach
@stop