
<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('assets/img/profile.jpg') }}">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        Hizrian
                        <span class="user-level">Administrator</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item {{ active(['home','bic-admin']) }}">
                <a href="{{ Route('home') }}">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                    <span class="badge badge-count">10</span>
                </a>
            </li>
            <li class="nav-item {{ active(['program','edit-program','tambah-program','bic-admin/program']) }}">
                <a href="{{ Route('program') }}">
                    <i class="la la-tasks"></i>
                    <p>Program</p>
                    <span class="badge badge-count">3</span>
                </a>
            </li>
            <li class="nav-item {{ active(['pengumuman','edit-pengumuman','tambah-pengumuman','bic-admin/pengumuman']) }}">
                <a href="{{ Route('pengumuman') }}">
                    <i class="la la-newspaper-o"></i>
                    <p>Pengumuman</p>
                    <span class="badge badge-count">3</span>
                </a>
            </li>
            <li class="nav-item {{ active(['beasiswa','edit-beasiswa','tambah-beasiswa','bic-admin/beasiswa']) }}">
                <a href="{{ Route('beasiswa') }}">
                    <i class="la la-mortar-board"></i>
                    <p>Beasiswa</p>
                    <span class="badge badge-count">9</span>
                </a>
            </li>
            <li class="nav-item {{ active(['grade','edit-grade','tambah-grade','bic-admin/grade']) }}">
                <a href="{{ Route('grade') }}">
                    <i class="la la-archive"></i>
                    <p>Grade</p>
                    <span class="badge badge-count">6</span>
                </a>
            </li>
            <li class="nav-item {{ active(['profil-admin','update-admin','bic-admin/profil-admin']) }}">
                <a href="{{ Route('profil-admin') }}">
                    <i class="la la-male"></i>
                    <p>Profil Admin</p>
                    <span class="badge badge-count">0</span>
                </a>
            </li>
            <li class="nav-item {{ active(['profil-user','bic-admin/profil-user']) }}">
                <a href="{{ Route('profil-user') }}">
                    <i class="la la-user"></i>
                    <p>Profil User</p>
                    <span class="badge badge-count">5</span>
                </a>
            </li>
        </ul>
    </div>
</div>
