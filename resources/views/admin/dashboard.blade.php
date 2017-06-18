@extends('admin.layout')

@section('content')
<!--banner-->
<div class="banner">

        <h2>
        <a href="<?=route('admin.dashboard');?>">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Dashboard</span>
        </h2>
</div>
<!--//banner-->
<!--content-->
<div class="" style="min-height:500px">
    <div class="col-md-12 graph-box1 clearfix">
        <div class="grid-1">
            Selamat Datang <?=$admin->nama;?>
        </div>
    </div>
@stop
