
<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ active(['home','bic-admin']) }}">
                <a href="{{ Route('home') }}">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                    
                </a>
            </li>
            <li class="nav-item {{ active(['program','edit-program','tambah-program','bic-admin/program']) }}">
                <a href="{{ Route('program') }}">
                    <i class="la la-tasks"></i>
                    <p>Program</p>
                    
                </a>
            </li>
            <li class="nav-item {{ active(['pengumuman','edit-pengumuman','tambah-pengumuman','bic-admin/pengumuman']) }}">
                <a href="{{ Route('pengumuman') }}">
                    <i class="la la-newspaper-o"></i>
                    <p>Pengumuman</p>
                    
                </a>
            </li>
            <li class="nav-item {{ active(['beasiswa','edit-beasiswa','tambah-beasiswa','bic-admin/beasiswa']) }}">
                <a href="{{ Route('beasiswa') }}">
                    <i class="la la-mortar-board"></i>
                    <p>Beasiswa</p>
                    
                </a>
            </li>
            <li class="nav-item {{ active(['grade','edit-grade','tambah-grade','bic-admin/grade']) }}">
                <a href="{{ Route('grade') }}">
                    <i class="la la-archive"></i>
                    <p>Grade</p>
                    
                </a>
            </li>
            <li class="nav-item d-none {{ active(['profil-admin','update-admin','bic-admin/profil-admin']) }}">
                <a href="{{ Route('profil-admin') }}">
                    <i class="la la-male"></i>
                    <p>Profil Admin</p>
                    
                </a>
            </li>
            <li class="nav-item {{ active(['profil-user','bic-admin/profil-user']) }}">
                <a href="{{ Route('profil-user') }}">
                    <i class="la la-user"></i>
                    <p>Profil User</p>
                    
                </a>
            </li>
        </ul>
    </div>
</div>
