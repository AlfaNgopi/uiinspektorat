<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            @foreach($menu as $m)

            @if(count($m['sub_menu']) == 0)
            <li class="nav-item">

                @if($pagename == $m['name'])
                <a href="{{$m['name']}}" class="nav-link active">
                @else
                <a href="{{$m['name']}}" class="nav-link active">
                @endif
                    <i class="nav-icon {{$m['icon']}}"></i>
                        <p>
                        {{$m['name']}}
                        </p>
                    </a>

            </li>
            @else
            <li class="nav-item menu">
                @if($pagename == $m['name'])
                <a href="#" class="nav-link active">
                @else
                <a href="#}" class="nav-link">
                @endif
                    <i class="nav-icon {{$m['icon']}}"></i>
                    <p>
                        {{$m['name']}}
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @foreach($m['sub_menu'] as $sm)
                    <li class="nav-item">
                        @if($subpagename == $sm['name'])
                        <a href="{{$sm['link']}}" class="nav-link active">
                        @else
                        <a href="{{$sm['link']}}" class="nav-link">
                        @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{$sm['name']}}</p>
                        </a>

                    </li>
                    @endforeach
                </ul>
            </li>
            @endif
            @endforeach
            


        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>