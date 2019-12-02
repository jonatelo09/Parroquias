@extends('layouts.form')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Crear Cuenta!</h1>
          </div>
          <form class="user" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" " id="exampleFirstName" placeholder="User Name" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-sm-6">
                <input type="text" name="firstname" class="form-control form-control-user" id="exampleLastName" placeholder="First Name" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="lastname" class="form-control form-control-user" id="exampleFirstName" placeholder="Last Name" required>
              </div>
              <div class="col-sm-6">
                <input type="text" name="phone" class="form-control form-control-user" id="phone" placeholder="Telefono..." required>
              </div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" name="email" placeholder="Email Address" required>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="password-confirm" name="password_confirmation" placeholder="Repeat Password" required>
              </div>
            </div>
            <a href="login.html" class="btn btn-primary btn-user btn-block">
              Registrar Cuenta
            </a>
            <hr>
          </form>
          <hr>
          <div class="text-center">
            <a class="small" href="forgot-password.html">Forgot Password?</a>
          </div>
          <div class="text-center">
            <a class="small" href="login.html">Already have an account? Login!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
<!--
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->