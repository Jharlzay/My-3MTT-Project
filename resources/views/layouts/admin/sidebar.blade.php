<!-- Sidebar -->
<aside class="sidebar">
    <div class="logo">
        <h1>VMIS Admin</h1>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('dashboard')  }}" class="{{ Route::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="{{ route('admin.officers') }}">User Management</a></li>
            <li><a href="{{ route('admin.vehicles') }}">Vehicle Database</a></li>
            <li><a href="{{ route('admin.reports') }}">Reports</a></li>
            <li><a href="{{ route('admin.settings') }}">Settings</a></li>
        </ul>
    </nav>
</aside>
