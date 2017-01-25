<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
        @foreach($menu as $m)
            <li class=" {{ Request::getPathInfo()==$m['link'] ? 'active' : '' }} treeview">
                <a href="{{url($m['link'])}}">
                    <i class="fa fa-dashboard"></i> <span>{{$m['name']}}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                @if($m['child']!=null)
                    @foreach($m['child'] as $c)
                <ul class="treeview-menu">
                    <li class=""><a href="{{url($c['link'])}}"><i class="fa fa-circle-o"></i> {{$c['name']}}</a></li>

                </ul>
                    @endforeach
                    @endif
            </li>
            @endforeach
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
