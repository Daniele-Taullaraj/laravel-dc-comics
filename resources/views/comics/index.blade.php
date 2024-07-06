@extends('layouts.app')

@section('content')
<h1>titoli  dei fumetti</h1>
@foreach ($comics as $comic)
<h5>I titoli : <a href="{{ route('comics.show', $comic->id )}}">{{$comic->title}}</a></h1>
@endforeach
@endsection
