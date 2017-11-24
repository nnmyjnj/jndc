@extends('layouts.app')

@section('content')
<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-80">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title is-centered">Login</p>
      </header>
      <div class="card-content">
        <form action="{{ route('login') }}" method="POST" role="form">
          {{ csrf_field() }}

          <div class="field">
            <label for="email" class="label">Email</label>
            <p class="control">
              <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="example@example.com">
            </p>
            @if ($errors->has('email'))
              <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" id="password">
            </p>
            @if ($errors->has('password'))
              <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
          </div>

          <b-checkbox class="m-t-20" name="remember" {{ old('remember') ? 'checked' : '' }}>Remenber Me</b-checkbox>

          <button class="button is-primary is-outlined is-fullwidth m-t-30">Log In</button>
        </form>
      </div>{{-- end of card content --}}

    </div>{{-- end of card --}}
    <h5 class="has-text-centered m-t-30">
      <a href="{{ route('password.request') }}" class="is-muted">Forgot Your Password?</a>
    </h5>
  </div>
</div>
@endsection
