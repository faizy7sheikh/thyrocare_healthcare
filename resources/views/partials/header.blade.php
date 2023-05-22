<nav>
    <ul>
        @foreach ($menuItems as $menuItem)
            <li>
                <a href="{{ $menuItem->url }}">{{ $menuItem->title }}</a>
                @if ($menuItem->submenus->count() > 0)
                    <ul>
                        @foreach ($menuItem->submenus as $submenu)
                            <li><a href="{{ $submenu->url }}">{{ $submenu->title }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
