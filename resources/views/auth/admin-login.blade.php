@extends('layouts.front2')

@section('content')



<body style="background-color: #272933;" class="login fade-in" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    <div style="background-color: #272933;" class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="{{asset('assets/img/account/user-icon.png')}}" alt="Key icon">
                    </div>
                    <div class="login-logo">
                        <a href="#?login-theme-3">
                            <img src="{{asset('files/1/2091/0251/files/TechBasha-Logo.jpg')}}" alt="Techbasha" width="100%" height="135px">
                        </a>
                    </div>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        <form role="form" method="POST" action="{{ route('admin.login.submit') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email"></label>

                            <input type="text" placeholder="Email" class="input-field form-control user"  id="email" type="email" name="email" value="{{ old('email') }}" required autofocus/>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password"></label>

                            <input type="password" placeholder="Password" class="input-field form-control password" id="password" type="password"  name="password" required/>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                            <div class="div-login" style="margin:auto;text-align:center">
                             
                                <button style="display: inline;" id="submit-form" class="btn btn-login ladda-button" data-style="expand-left" type="submit"><span class="ladda-label">login</span></button>
                            </div> 
                        </form>
                        <div class="login-links">
                            <a href="{{ route('admin.password.request') }}">Forgot password?</a>
                            
                            <br>
                            
                        </div>
                    </div>
                </div>
                <div class="social-login row">
                    <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                        <a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
                    </div>
                    <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                        <a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
 



@endsection