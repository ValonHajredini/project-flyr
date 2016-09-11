@extends('layoutes.layout')
@section('content')

{!! $card->title!!}

    <h2>My notes HEre</h2>
    <ul>
        @foreach($card->notes as $note)

        <li>{!! $note->body  !!}</li>
        @endforeach
    </ul>
@stop