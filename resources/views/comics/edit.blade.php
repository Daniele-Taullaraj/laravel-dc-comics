@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>modifica il fumetto {{$comic->title}}</h3>
                </div>
                <div class="card-body">
                    <form>
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="thumb" class="form-label">URL dell'immagine</label>
                            <input type="url" class="form-control" id="thumb" name="thumb" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="series" class="form-label">Serie</label>
                            <input type="text" class="form-control" id="series" name="series" required>
                        </div>

                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data di vendita</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date" required>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
