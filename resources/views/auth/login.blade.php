@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-left: 340px">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center; padding-bottom: 20px; color:darkred">
                        <br><h2><strong>{{ __('ĐĂNG NHẬP') }}</strong></h2></br>
                        </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="margin-bottom: 30px">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 40px">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 50px">
                            <div class="col-md-6 offset-md-4" >
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <u><strong>{{ __('Forgot Your Password?') }}</strong></u>
                                </a>
                            @endif
                        </div>

                        <div class="form-group row mb-0" style="margin-bottom: 40px">
                            <div class="col-md-8 offset-md-4" style="margin-left: 70px">
                                <button type="submit" class="btn btn-primary" style="width: 250px; height: 50px">
                                    <strong>{{ __('Login') }}</strong>
                                </button>
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 30px">
                            <a class="btn btn-link" style="margin-left:150px" href="/WebGiaoThong/public/register">
                                <u><strong>{{ __('Register Now !') }}</strong></u>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
