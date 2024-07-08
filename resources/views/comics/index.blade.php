@extends('layouts.app')

@section('content')
<h1>titoli  dei fumetti</h1>
@foreach ($comics as $comic)
<div>
<h5 class="d-inline me-3">I titoli : <a href="{{ route('comics.show', $comic->id )}}">{{$comic->title}}</a></h1>
<a href="{{route('comics.edit', $comic)}}" >MOFICICA il {{$comic->id}} elemento</a>
</div>
    @endforeach
@endsection
