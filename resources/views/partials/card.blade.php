<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4 text-light">
    <div class="wp-card-img">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}"/>
    </div>
    <div class="card-body">
        <h5 class="card-text">{{ $comic->title }}</h5>
        <p class="card-text">Categoria: {{ $comic->series }}</p>
        <p class="card-text">{{ $comic->sale_date }}</p>
        <p class="card-text">Di tipo: {{ $comic->type }}</p>
        <h6>Prezzo: {{ $comic->price }}</h6>
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a>
    </div>
</div>