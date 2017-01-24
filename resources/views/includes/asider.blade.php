<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
        @foreach($menu as $m)
            <li class=" {{ Request::getPathInfo()==$m->link ? 'active' : '' }} treeview">
                <a href="{{url($m->link)}}">
                    <i class="fa fa-dashboard"></i> <span>{{$m->name}}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                {{--<ul class="treeview-menu">--}}
                    {{--<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>--}}
                    {{--<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>--}}
                {{--</ul>--}}
            </li>
            @endforeach
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
