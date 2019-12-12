<div class="scrollbar-sidebar" id="left-sidebar">
    <nav class="app-sidebar__inner scrollbar-container">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Cruise Ship</li>
            <li	class="mm-active">
                <a href="#"><i class="metismenu-icon pe-7s-config"></i>Manager<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                <ul>
                    <li><a href=""><i class="metismenu-icon"></i>Cruise Ship</a></li>
                    <li><a href=""><i class="metismenu-icon"></i>Services on Ship</a></li>
                </ul>
            </li>

            <li class="app-sidebar__heading">Tour</li>
            <li>
                <a href="#"><i class="metismenu-icon pe-7s-config"></i>Manager<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                <ul>
                    <li><a href=""><i class="metismenu-icon"></i>Infos</a></li>
                    <li><a href=""><i class="metismenu-icon"></i>Other Services</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="metismenu-icon pe-7s-cart"></i>Booking<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                <ul>
                    <li><a href=""><i class="metismenu-icon"></i>List</a></li>
                    <li><a href=""><i class="metismenu-icon"></i>Discount Code</a></li>
                </ul>
            </li>

            <li class="app-sidebar__heading">Customer</li>
            <li>
                <a href="#"><i class="metismenu-icon pe-7s-config"></i>Manager<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                <ul>
                    <li><a href=""><i class="metismenu-icon"></i>Info</a></li>
{{--                    <li><a href="#"><i class="metismenu-icon"></i>Customer Questions</a></li>--}}
                </ul>
            </li>
            @if (Auth::user()->role === config('roles.admin'))
                <li class="app-sidebar__heading">Admin</li>
                <li>
                    <a href="#"><i class="metismenu-icon pe-7s-config"></i>Manager<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                    <ul>
                        <li><a href="{{ route('admin.user.index') }}"><i class="metismenu-icon"></i>User</a></li>
                        <li><a href="{{ route('admin.user.index') }}"><i class="metismenu-icon"></i>Center</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>
</div>
