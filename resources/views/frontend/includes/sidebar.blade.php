<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('/dashboard'))
                }}" href="{{ route('frontend.index') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>
                
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/galleries'))
                }}" href="{{ route('admin.galleries.index') }}">
                    <i class="nav-icon fas fa-file"></i>
                    @lang('menus.backend.sidebar.galleries')
                </a>
            </li>
            
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
