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
                        <h1>Se connecter</h1>
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">{{ __('Adresse email') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Se connecter') }}
                            </button>
                            <a style="width: 100%" class="btn btn-primary" href="/register">Créer un compte</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
