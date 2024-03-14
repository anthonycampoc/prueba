@extends('layouts.login')

@section('content')

<form method="POST" action="{{ route('login') }}" >
    @csrf
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input id="email" type="email" class="mdl-textfield__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <label class="mdl-textfield__label" for="userName">Correo Electronico</label>                         
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input id="password" type="password" class="mdl-textfield__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <label class="mdl-textfield__label" for="pass">Password</label>
    </div>
    <button type="submit" id="SingIn" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:right;">
        {{ __('Login') }} <i class="zmdi zmdi-mail-send"></i>
    </button>

</form>

@endsection
