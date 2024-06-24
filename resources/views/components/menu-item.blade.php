@if (count($listmenu) == 0)
    <li class="nav-item">
        <a class="nav-link" href="{{$menu_item->link }}">{{ $menu_item->name }}</a>
    </li>
@else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{$menu_item->link }}" role="button" data-bs-toggle="dropdown">
            {{$menu_item->name }}
        </a>
        <ul class="dropdown-menu">
            @foreach ($listmenu as $item)
                <li><a class="dropdown-item" href="{{ $item->link }}">{{ $item->name }}</a></li>
            @endforeach
        </ul>
    </li>

@endif



{{-- @if (count($listmenu) == 0)
    <li><a href="{{ $menu_item->link }}">{{ $menu_item->name }}</a></li>
@else
    <li class="dropdown">
        <a href="{{ $menu_item->link }}" class="dropbtn">{{ $menu_item->name }}</a>
        <div class="dropdown-content">
            @foreach ($listmenu as $item)
                <a class="dropdown-item" href="{{ $item->link }}">{{ $item->name }}</a>
            @endforeach
        </div>
    </li>
@endif --}}
