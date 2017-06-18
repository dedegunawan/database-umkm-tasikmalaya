@extends('layouts.admin_page')

@section('sidebar')
    @include('admin.partial.sidebar')
@stop

@section('header')
    <nav class="navbar-default navbar-static-top" role="navigation">
         @include('admin.partial.header')
         <div class=" border-bottom">

           @include('admin.partial.left_navbar')

           @include('admin.partial.right_navbar')
           <div class="clearfix">
           </div>
           @include('admin.partial.sidebar')
        </div>

    </nav>
@stop
