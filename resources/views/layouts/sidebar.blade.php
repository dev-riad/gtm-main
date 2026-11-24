<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <a href="{{ url('/home') }}" class="brand-link" style="background-color: #1f1e4e">
        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
             alt="Global Tuition Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Global Tuition</span>
    </a>


    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
