<footer class="bottom">
    <div class="container d-flex justify-content-between align-items-center py-4">
        <div>
            <button class="text-uppercase">sign-up now!</button>
        </div>
        <div>
            <ul class="d-flex align-items-center">
                <span>Follow Us</span>
                @foreach ($iconimgs as $icon)
                    <li>
                        <a href="#"><img src="{{Vite::asset($icon['img'])}}" alt="{{$icon['title']}}"/></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>