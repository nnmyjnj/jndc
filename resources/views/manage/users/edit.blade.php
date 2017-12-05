@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title is-3">Edit User</h1>
    </div>
  </div>
  <hr class="m-t-0">

  <div class="columns">
    <div class="column">
      <form action="{{ route('users.update', $user->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}

        <div class="field">
          <label for="name" class="label">Name:</label>
          <p class="control">
            <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
          </p>
        </div>

        <div class="field">
          <label for="email" class="label">Email:</label>
          <p class="control">
            <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
          </p>
        </div>

        <div class="field block">
          <label for="password" class="label">Password:</label>
          <div class="field">
            <div class="control">
              <label class="radio">
                <b-radio name="password_options" native-value="keep" v-model="password_options">Do Not Change Password</b-radio>
                {{--<input type="radio" name="password_options" value="keep" v-model="password_options">
                Do Not Change Password--}}
              </label>
            </div>
            <div class="field m-t-15">
              <label class="radio">
                {{--<input type="radio" name="password_options" value="auto" v-model="password_options">
                Auto-Generate New Password--}}
                <b-radio name="password_options" native-value="auto" v-model="password_options">Auto-Generate New Password</b-radio>
              </label>
            </div>
            <div class="field">
              <label class="radio">
                {{--<input type="radio" name="password_options" value="manual" v-model="password_options">
                Manually Set New Password--}}
                <b-radio name="password_options" native-value="manual" v-model="password_options">Auto-Generate New Password</b-radio>
              </label>
              <p class="control m-t-10">
                <input type="text" class="input" name="password" id="password" v-if="password_options=='manual'" placeholder="Manually give a password to this user">
              </p>
            </div>
          </div>
        </div>

        <button class="button is-primary">Edit User</button>

      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
         password_options: 'keep'
      }
    });
  </script>
@endsection
