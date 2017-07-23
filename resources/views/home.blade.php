@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <p>
                      <h1 style="font-size: 25 !important">
                      dataForUserAboutMe: User.user_about_me
                      dataForZZZZZZZZZZZ: User.zzzz_zzzzz_zz
                      </h1>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
