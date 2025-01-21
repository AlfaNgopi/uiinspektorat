@foreach ($menus as $menu)
<li class="nav-item dropdownhover m-0">
    <a class="nav-link" style="font-size: small;" href="{{ $menu['url'] }}">{{ $menu['text'] }}</a>

    @if (array_key_exists('submenu', $menu) && $menu['submenu'])
    <ul class="dropdown-menu dropdown-menu-dark">
        @include('partition.menu', ['menus' => $menu['submenu']])
    </ul>
    @endif
</li>
@endforeach