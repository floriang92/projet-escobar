@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('images/logo.png') }}" alt="IMG" class="mt-5">
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title">
                    Inscription
                </span>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="nom" id="nom" placeholder="Nom">
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="prenom" id="prenom" placeholder="Prénom">
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="entreprise" id="entreprise" placeholder="Entreprise">
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="gsm" id="gsm" placeholder="Gsm">
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="confemail" id="confemail" placeholder="Confirm Email">
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm Password">
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>



                <div class="text-center p-t-136">
                    <a class="txt2" href="{{ route('login') }}">
                        <i class="fa fa-long-arrow-left m-r-5" aria-hidden="true"></i>
                        retour au login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection