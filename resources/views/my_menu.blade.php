<ul>
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}" class="nav-link">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>