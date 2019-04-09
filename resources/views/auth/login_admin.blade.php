@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card loginForm">
                    <div class="card-body">
                        <div class="col-lg-12 col-sm-12 col-12 user-img text-center">
                            <img class="rounded-circle" src="https://secure.i.telegraph.co.uk/multimedia/archive/02870/babysuit-6_2870212k.jpg">
                        </div>
                        <div class="col-lg-12 col-sm-12 col-12 form-input">
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf
                                <input id="email" type="hidden" name="email" value="{{ $email }}" >
                                <input id="admin" type="hidden" name="admin" value="1" required autofocus>
                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Se connecter') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
