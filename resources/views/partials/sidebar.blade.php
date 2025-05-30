<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-text mx-3">{{ __('PT Lematang') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>{{ __('Home') }}</span>
        </a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">



    <li class="nav-item {{ request()->is('admin/categories') || request()->is('admin/categories') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Category') }}</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/questions') || request()->is('admin/questions') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.questions.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Question') }}</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/modules') || request()->is('admin/modules') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.modules.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Modules') }}</span></a>
    </li>


    <li class="nav-item {{ request()->is('admin/results') || request()->is('admin/results') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.results.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Result') }}</span></a>
    </li>



</ul>
