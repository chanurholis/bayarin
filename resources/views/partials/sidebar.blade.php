<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ env('APP_NAME') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">{{ env('APP_NICKNAME') }}</a>
        </div>
        <ul class="sidebar-menu">
            <!-- Dashboard -->
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="/"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            
            <!-- Students -->
            <li class="menu-header">Student</li>
            <li><a class="nav-link" href="/students"><i class="fas fa-users"></i> <span>Students</span></a></li>

            <!-- Classrooms -->
            <li class="menu-header">Classroom</li>
            <li><a class="nav-link" href="/students"><i class="fas fa-university"></i> <span>Classrooms</span></a></li>
    </aside>
</div>