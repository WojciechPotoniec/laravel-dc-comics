  <footer class="mid">
    <div class="container d-flex">
      <div class="left">
        <ul class="text-light">
          @foreach ($mainlists as $list)
          <h4>
            {{$list['title']}}
          </h4>
          @endforeach
          @foreach ($list['list'] as $item)
          <li>
            <a href="#">{{ $item }}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="right">
      </div>
    </div>
  </footer>