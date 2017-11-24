@extends('layouts.app')

@section('content')
  @if (session('status'))
      <div class="notification is-success">
          {{ session('status') }}
      </div>
  @endif

  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-80">
      <div class="card">
        <header class="card-header">
          <p class="card-header-title is-centered">Reset Password</p>
        </header>
        <div class="card-content">
          <form action="{{ route('password.email') }}" method="POST" role="form">
            {{ csrf_field() }}

            <div class="field">
              <label for="email" class="label">E-Mail Address</label>
              <p class="control">
                <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="example@example.com">
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
              @endif
            </div>

            <button class="button is-primary is-outlined is-fullwidth m-t-30">Send Password Reset Link</button>
          </form>
        </div>{{-- end of card content --}}

      </div>{{-- end of card --}}
      <h5 class="has-text-centered m-t-30">
        <a href="{{ route('login') }}" class="is-muted"><i class="fa fa-caret-left m-r-10"></i>Back to Login</a>
      </h5>
    </div>
  </div>
@endsection
