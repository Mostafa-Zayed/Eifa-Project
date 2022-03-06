<nav class="collapse">
    <ul class="nav nav-pills" id="mainNav">
        @foreach($pages as $page)
            <li class="dropdown-secondary">
                <a class="nav-link @if($page->url == '/') {{ 'active' }}@endif" href="{{url($page->url)}}">{{ucwords($page->name)}}</a>
            </li>
        @endforeach
    </ul>
</nav>
