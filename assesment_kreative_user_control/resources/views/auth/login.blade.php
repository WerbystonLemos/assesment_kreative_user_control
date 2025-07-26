@extends('layouts.app')

<link href="{{asset('css/login/main.css')}}" rel="stylesheet" type="text/css" />

@section('content')
<div id="container_form_login"  class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div  id="img_logo">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </div>

                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div id="container_actions" class="mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            <a class="btn btn-link" href="{{ route('register') }}">
                                Cadastrar
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
