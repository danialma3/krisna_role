    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">KRISNA GYM</a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-gear me-2 fs-5"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-person me-2 fs-5"></i> Profile</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </header>