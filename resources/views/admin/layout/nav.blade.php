<div class="scrollbar-sidebar" id="left-sidebar">
    <nav class="app-sidebar__inner scrollbar-container">
        <ul class="vertical-nav-menu">
            @if (Auth::user()->role === config('roles.admin'))
                <li class="app-sidebar__heading">Admin</li>
                <li class="mm-active">
                    <a href="#"><i class="metismenu-icon pe-7s-config"></i>Manager<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                    <ul>
                        <li><a href="{{ route('admin.user.index') }}"><i class="metismenu-icon"></i>User</a></li>
                        <li><a href="{{ route('admin.center.index') }}"><i class="metismenu-icon"></i>Center</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>
</div>
