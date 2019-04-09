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
                        <h1>Créer un compte</h1>
                        <br>
                        <p>Pour consulter la liste de naissance, il faut créer un compte ... rien de bien méchant, juste le nom et l'adresse email, même pas de mot de passe ;)</p>
                        <div class="col-lg-12 col-sm-12 col-12 form-input">
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Créer un compte') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Nom') }}</label>
                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label text-md-right">{{ __('Adresse email') }}</label>
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Créer un compte') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

