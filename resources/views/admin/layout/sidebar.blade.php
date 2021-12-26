<ul class="sidebar-menu">
    <li class="dropdown active"><a href="{{route('admin.dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Dashboard')}}</span></a></li>

    <li class="menu-header">ADMIN PANEL</li>
    <li class="dropdown @if(in_array(Route::current()->getName(), array('admin.general.index', 'admin.rank', 'admin.footer'))) active @else  @endif">
        <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
            <span>{{__('Website Settings')}}</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a href="{{route('admin.general.index')}}" class="nav-link"><i data-feather="monitor"></i><span>Home Page</span></a></li>
            <li class="dropdown"><a href="{{route('admin.rank')}}" class="nav-link"><i data-feather="monitor"></i><span>Rank</span></a></li>
            <li class="dropdown"><a href="{{route('admin.footer')}}" class="nav-link"><i data-feather="monitor"></i><span>Footer</span></a></li>
        </ul>
    </li>

    <!-- Advance Menus -->
    <li class="dropdown @if(in_array(Route::current()->getName(), array('all_orders.index'))) active @else  @endif">
        <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
            <span>{{__('Sales')}}</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a href="{{route('all_orders.index')}}" class="nav-link"><i data-feather="monitor"></i><span>All Orders</span></a></li>
        </ul>
    </li>

    <li class="dropdown @if(in_array(Route::current()->getName(), array('members.list', 'agent.list', 'customers.payment', 'customers.withdraw'))) active @else  @endif">
        <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
            <span>{{__('Members')}}</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a href="{{route('members.list')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Members List')}}</span></a></li>
            <li class="dropdown"><a href="{{route('agent.list')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Agent List')}}</span></a></li>
            <li class="dropdown"><a href="{{route('customers.payment')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Member Payments')}}</span></a></li>
            <li class="dropdown"><a href="{{route('customers.withdraw')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Member Withdraws')}}</span></a></li>
        </ul>
    </li>

    <li class="dropdown @if(in_array(Route::current()->getName(), array('package.index', 'package.wise.member', 'view.member.package'))) active @else  @endif">
        <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
            <span>{{__('Membership Packages')}}</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a href="{{route('package.index')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Package List')}}</span></a></li>
            <li class="dropdown"><a href="{{route('package.wise.member')}}" class="nav-link"><i data-feather="monitor"></i><span>{{__('Package Wise Members')}}</span></a></li>
        </ul>
    </li>
</ul>


