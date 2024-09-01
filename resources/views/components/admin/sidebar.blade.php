<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title">Dashboard</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->type == \App\Models\User::SUPERADMIN)
                    <li>
                        <a href="{{ route('admin.user.index') }}" class="waves-effect">
                            <i class="mdi mdi-account-box-multiple"></i>
                            <span>User</span>
                        </a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('admin.reservation.index') }}" class="waves-effect">
                        <i class="mdi mdi-account"></i>
                        <span>Reservation</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.contact_us.index') }}" class="waves-effect">
                        <i class="mdi mdi-chat-alert"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
