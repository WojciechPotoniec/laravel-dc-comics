<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4 text-light">
    <div class="wp-card-img">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}" />
    </div>
    <div class="card-body">
        <h5 class="card-text">{{ $comic->title }}</h5>
        <p class="card-text">Categoria: {{ $comic->series }}</p>
        <p class="card-text">{{ $comic->sale_date }}</p>
        <p class="card-text">Di tipo: {{ $comic->type }}</p>
        <h6>Prezzo: {{ $comic->price }}</h6>
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
            @csrf
            {{-- aggiungiamo il metodo --}}
            @method('DELETE')
            <input type="submit" value="Rimuovi" class="btn btn-danger" id="comicDelete">
        </form>
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$comic->title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare questo prodotto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary">Si, cancella</button>
            </div>
        </div>
    </div>
</div>