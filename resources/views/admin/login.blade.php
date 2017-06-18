@extends('layouts.login')

@section('content')

<h1><a href="index.html">Admin  </a></h1>
<div class="login-bottom">
    <h2>Login</h2>
    <form action="{{route('admin.do_login')}}" method="post">
        {{csrf_field()}}
        <?php
        if ($errors->count()) {
            ?>
            <div class="col-md-12">
                <p class="alert alert-danger">
                    <?php
                    foreach ($errors->all() as $key => $error) {
                        echo "$error<br />";
                    }
                    ?>
                </p>
            </div>
            <?php
        }
         ?>
    <div class="col-md-6">
        <div class="login-mail">
            <input type="text" placeholder="Email" required="" name="email" value="{{old('email')}}">
            <i class="fa fa-envelope"></i>
        </div>
        <div class="login-mail">
            <input type="password" placeholder="Password" required="" name="password" value="{{old('password')}}">
            <i class="fa fa-lock"></i>
        </div>
    </div>
    <div class="col-md-6 login-do">
        <label class="hvr-shutter-in-horizontal login-sub">
            <input type="submit" value="Masuk">
        </label>
    </div>

    <div class="clearfix"> </div>
    </form>
</div>

@stop
