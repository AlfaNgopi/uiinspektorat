@foreach ($menus as $menu)
<li class="nav-item dropdownhover m-0">
    <a class="nav-link" style="font-size: small;" href="{{ $menu['url'] }}">{{ $menu['text'] }}</a>

    @if ($menu->children->isNotEmpty())
    <ul class="dropdown-menu dropdown-menu-dark">
        @include('partition.menu', ['menus' => $menu->children])
    </ul>
    @endif
</li>
@endforeach