<ul class="sidebar-menu">
    <li class="dropdown active"><a href="{{route('/admin')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Dashboard')}}</span></a></li>

    <li class="menu-header">ADMIN PANEL</li>
    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
            <span>{{__('Website Settings')}}</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a href="{{route('admin.general.index')}}" class="nav-link"><i data-feather="monitor"></i><span>Home Page</span></a></li>
            <li class="dropdown"><a href="{{route('admin.rank')}}" class="nav-link"><i data-feather="monitor"></i><span>Rank</span></a></li>
            <li class="dropdown"><a href="{{route('admin.footer')}}" class="nav-link"><i data-feather="monitor"></i><span>Footer</span></a></li>
            <li class="dropdown"><a href="{{route('admin.customer')}}" class="nav-link"><i data-feather="monitor"></i><span>Customer</span></a></li>
        </ul>
    </li>

    <!-- Advance Menus -->
    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
            <span>{{__('Sales')}}</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a href="{{route('admin.rank')}}" class="nav-link"><i data-feather="monitor"></i><span>Rank</span></a></li>
            <li class="dropdown"><a href="{{route('admin.footer')}}" class="nav-link"><i data-feather="monitor"></i><span>Footer</span></a></li>
            <li class="dropdown"><a href="{{route('admin.customer')}}" class="nav-link"><i data-feather="monitor"></i><span>Customer</span></a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
            <span>{{__('Members')}}</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a href="{{route('members.list')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Member List')}}</span></a></li>
            <li class="dropdown"><a href="{{route('admin.rank')}}" class="nav-link"><i data-feather="monitor"></i><span>Rank</span></a></li>
            <li class="dropdown"><a href="{{route('admin.footer')}}" class="nav-link"><i data-feather="monitor"></i><span>Footer</span></a></li>
            <li class="dropdown"><a href="{{route('admin.customer')}}" class="nav-link"><i data-feather="monitor"></i><span>Customer</span></a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
            <span>{{__('Members Packages')}}</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a href="{{route('admin.general.index')}}" class="nav-link"><i data-feather="monitor"></i><span>Home Page</span></a></li>
            <li class="dropdown"><a href="{{route('admin.rank')}}" class="nav-link"><i data-feather="monitor"></i><span>Rank</span></a></li>
            <li class="dropdown"><a href="{{route('admin.footer')}}" class="nav-link"><i data-feather="monitor"></i><span>Footer</span></a></li>
            <li class="dropdown"><a href="{{route('admin.customer')}}" class="nav-link"><i data-feather="monitor"></i><span>Customer</span></a></li>
        </ul>
    </li>

    <li class="dropdown"><a href="{{route('admin.customer')}}" class="nav-link"><i data-feather="monitor"></i><span>Found Transfer</span></a></li>
    <li class="dropdown"><a href="{{route('admin.customer')}}" class="nav-link"><i data-feather="monitor"></i><span>Notice</span></a></li>
    <li class="dropdown"><a href="{{route('admin.customer')}}" class="nav-link"><i data-feather="monitor"></i><span>Helpline</span></a></li>

</ul>

