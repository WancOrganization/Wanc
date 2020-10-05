<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="/admin/dashboard" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="/admin/feedback" class="nav-link {{ (request()->is('admin/feedback*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Feedback</p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="/admin/services" class="nav-link {{ (request()->is('admin/services*')) ? 'active' : '' }}">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Services</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="/admin/get-in-touch" class="nav-link {{ (request()->is('admin/get-in-touch*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Get In Touch</p>
                    </a>
                </li>
                <li class="nav-item bg-danger" style="border-radius: 6px">
                    <a href="{{ route('logout' ) }}" class="nav-link {{ (request()->is('logout')) ? 'active' : '' }}"
                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>

    </ul>
</nav>
