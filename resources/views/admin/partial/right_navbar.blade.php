<?php
$admin = auth('admin')->user();

?>
<div class="drop-men" >
    <ul class=" nav_1">

        <li class="dropdown at-drop">
          @include('admin.partial.globe_notification')
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?=$admin->nama;?><i class="caret"></i></span><img src="<?=url('assets/images/avatar.png');?>" style="max-width:60px"></a>
          <ul class="dropdown-menu " role="menu">
            <li><a href="<?=route('admin.logout');?>"><i class="fa fa-sign-out"></i>Keluar</a></li>
          </ul>
        </li>

    </ul>
 </div><!-- /.navbar-collapse -->
