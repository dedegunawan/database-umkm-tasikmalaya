<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="">
            <a href="<?=route('admin.dashboard');?>" class=" hvr-bounce-to-right "><i class="fa fa-dashboard nav_icon "></i>Dashboards</a>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-institution nav_icon"></i> <span class="nav-label">Administrasi Desa</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?=route('admin.desa.statistik');?>" class=" hvr-bounce-to-right"> <i class="fa fa-bar-chart nav_icon"></i>Statistik</a></li>

                <li><a href="<?=route('admin.desa.index');?>" class=" hvr-bounce-to-right"> <i class="fa fa-list nav_icon"></i>Daftar Desa</a></li>

                <li><a href="<?=route('admin.desa.peta');?>" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Desa dalam peta</a></li>

                <li><a href="<?=route('admin.desa.tambah');?>" class=" hvr-bounce-to-right"><i class="fa fa-plus nav_icon"></i>Tambah Desa</a></li>

           </ul>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-shopping-cart nav_icon"></i> <span class="nav-label">Administrasi UMKM</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-bar-chart nav_icon"></i>Statistik</a></li>

                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-list nav_icon"></i>Daftar UMKM</a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>UMKM dalam peta</a></li>

                <li><a href="typography.html" class=" hvr-bounce-to-right"><i class="fa fa-plus nav_icon"></i>Tambah UMKM</a></li>

           </ul>
        </li>

        <li>
            <a href="" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon "></i><span class="nav-label">Profil</span> </a>
        </li>

        <li>
            <a href="" class=" hvr-bounce-to-right"><i class="fa fa-key nav_icon "></i><span class="nav-label">Ubah Password</span> </a>
        </li>

        <li>
            <a href="" class=" hvr-bounce-to-right"><i class="fa fa-sign-out nav_icon "></i><span class="nav-label">Keluar</span> </a>
        </li>

    </ul>
</div>
</div>
