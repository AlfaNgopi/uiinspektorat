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
                <a href="{{route($m['link'])}}" class="nav-link active">
                @else
                <a href="{{route($m['link'])}}" class="nav-link">
                @endif
                        <i class="nav-icon {{$m['icon']}}"></i>
                        <p>
                            {{$m['name']}}
                        </p>
                    </a>

            </li>
            @else
            
                @if($pagename == $m['name'])
                <li class="nav-item menu menu-open">
                <a href="#" class="nav-link active">
                    @else
                    <li class="nav-item">
                    <a href="#" class="nav-link">
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
                                @if($sm['link'] == '#')
                                <!-- 1 -->
                                <a href="#" class="nav-link active">
                                @else
                                <!-- 2 -->
                                <a href="{{route($sm['link'])}}" class="nav-link active">
                                @endif
                            @else
                                @if($sm['link'] == '#')
                                    <!-- 3 -->
                                    <a href="#" class="nav-link">
                                @else
                                    <!-- 4 -->
                                    <a href="{{route($sm['link'])}}" class="nav-link">
                                @endif
                                
                            
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