<footer class="top">
    <div class="container">
        <ul>
            @foreach ($listCard as $card)
                <li>
                    <img src="{{Vite::asset($card['img'])}}" alt="{{ $card['title'] }}">
                    <a href="#">{{ $card['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</footer>