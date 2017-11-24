@extends('layouts.app')

@section('content')
<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-80">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title is-centered">Login</p>
      </header>
      <div class="card-content">
        <form action="{{ route('register') }}" method="POST" role="form">
          {{ csrf_field() }}

          <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
              <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" id="name" value="{{ old('name') }}" required>
            </p>
            @if ($errors->has('name'))
              <p class="help is-danger">{{ $errors->first('name') }}</p>
            @endif
          </div>

          <div class="field">
            <label for="email" class="label">Email</label>
            <p class="control">
              <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" id="email" value="{{ old('email') }}" required>
            </p>
            @if ($errors->has('email'))
              <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
          </div>

          <div class="columns">
            <div class="column">
              <label for="password" class="label">Password</label>
              <p class="control">
                <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" id="password" required>
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
              @endif
            </div>
            <div class="column">
              <label for="password-confirm" class="label">Confirm Password</label>
              <p class="control">
                <input class="input{{ $errors->has('password-confirm') ? ' is-danger' : '' }}" type="password" name="password-confirm" id="password-confirm" required>
              </p>
              @if ($errors->has('password-confirm'))
                <p class="help is-danger">{{ $errors->first('password-confirm') }}</p>
              @endif
            </div>
          </div>

          <button class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>
        </form>
      </div>{{-- end of card content --}}

    </div>{{-- end of card --}}
    <h5 class="has-text-centered m-t-30">
      <a href="{{ route('login') }}" class="is-muted">Already have an account?</a>
    </h5>
  </div>
</div>
@endsection
