@extends('layouts.app')

@section('judul')
    Login | Pemantauan Kualitas Udara
@endsection

@section('content')
    <style>
        .login-form-text {
            color: #4CAF50;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .helper-text {
            color: #f44336;
        }
        .btn.light-blue.darken-4 {
            background-color: #0277bd;
        }
        .btn.light-blue.darken-4:hover {
            background-color: #01579b;
        }
        .btn.grey {
            background-color: #9e9e9e;
        }
        .btn.grey:hover {
            background-color: #757575;
        }
        h4.center-align {
            color: #4CAF50;
        }
    </style>

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h4 class="center-align">Pemantauan</h4>
        <div class="row">
            <div class="input-field col s12 center">
                <p class="center login-form-text">Login Sistem Pemantauan Kualitas Udara</p>
            </div>
        </div>

        <div class="row margin {{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-field col s12">
                <i class="mdi-communication-email prefix"></i>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                <label for="email">Username</label>
                @if ($errors->has('email'))
                    <span class="helper-text red-text">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row margin {{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-field col s12">
                <i class="mdi-action-lock prefix"></i>
                <input id="password" name="password" type="password" required>
                <label for="password">Password</label>
                @if ($errors->has('password'))
                    <span class="helper-text red-text">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <p>
                    <label>
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} />
                        <span>Remember me</span>
                    </label>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <button type="submit" class="btn waves-effect waves-light light-blue darken-4 col s12">
                    Login
                </button>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <a href="{{ url('/') }}" class="btn waves-effect waves-light grey col s12">Back</a>
            </div>
        </div>
    </form>
@endsection

@section('js')
    $(document).ready(function(){
        @if (session()->has('warning'))
            Materialize.toast('{{ Session::get('warning') }}', 4000);
        @elseif (session()->has('register'))
            setTimeout(function() {
                Materialize.toast('{{ Session::get('register') }}', 4000);
            }, 2000);
            setTimeout(function() {
                Materialize.toast('{{ Session::get('pesan') }}', 3000);
            }, 5000);
        @endif
    });
@endsection
