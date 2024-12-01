@includeif('layouts.head')
<body>
<main>
    @includeif('layouts.header')
    <section class="admin">
        <div class="dashboard-container" id="dashboard-container">
            @includeIf('layouts.admin.sidebar')
            <!-- Main Content -->
            <main class="main-content">
                <!-- Header -->
                <header class="header">
                    <h2>Admin Dashboard</h2>
                    <div class="profile">
                        <img src="profile-placeholder.png" alt="Admin Profile">
                        <span>Admin</span>
                    </div>
                </header>
                @yield('content')
            </main>
        </div>
    </section>
    @includeif('layouts.footer')
</main>
<script src="{{ asset('js/script.js') }}"></script>
</body>
