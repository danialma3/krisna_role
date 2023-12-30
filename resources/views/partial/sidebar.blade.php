<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
            <p class="app-sidebar__user-designation">{{ (auth()->user()->is_admin === 1)?'Admin':'Cashier' }}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item {{($active === 'dashboard')?'active':''}}" href="/"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item {{($active === 'member')?'active':''}}" href="/member"><i class="app-menu__icon bi bi-people"></i><span class="app-menu__label">Member</span></a></li>

        @can('is_admin')
        <li class="treeview"><a class="app-menu__item {{($active === 'akun')?'active':''}}" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-gear"></i><span class="app-menu__label">Pengaturan</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/akun"><i class="icon bi bi-circle-user"></i>Akun</a></li>
            </ul>
        </li>
        @endcan
    </ul>
</aside>