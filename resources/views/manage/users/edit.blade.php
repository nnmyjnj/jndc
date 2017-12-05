@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title is-3">Edit User</h1>
    </div>
  </div>
  <hr class="m-t-0">

  <form action="{{ route('users.update', $user->id)}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="columns">
      <div class="column">


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
                </label>
              </div>
              <div class="field m-t-15">
                <label class="radio">
                  <b-radio name="password_options" native-value="auto" v-model="password_options">Auto-Generate New Password</b-radio>
                </label>
              </div>
              <div class="field">
                <label class="radio">
                  <b-radio name="password_options" native-value="manual" v-model="password_options">Manually Set New Password</b-radio>
                </label>
                <p class="control m-t-10">
                  <input type="text" class="input" name="password" id="password" v-if="password_options=='manual'" placeholder="Manually give a password to this user">
                </p>
              </div>
            </div>
          </div>

      </div><!--end of first column -->

      <div class="column">{{-- roles --}}
        <label for="roles" class="label">Roles:</label>
        <input type="hidden" name="roles" :value="rolesSelected">

        <div class="field block">
          @foreach($roles as $role)
            <div class="field">
            <b-checkbox v-model="rolesSelected" native-value="{{$role->id}}">
              {{ $role->display_name }}
            </b-checkbox>
            </div>
          @endforeach
        </div>
      </div>

      </div> <!-- end of first columns -->
      <div class="columns">
        <div class="column">
          <hr>
          <button type="submit" class="button is-primary is-pull-right" style="width: 250px;">Edit User</button>
        </div>
      </div>
    </form>
  </div>


@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
         password_options: 'keep',
         rolesSelected: {!! $user->roles->pluck("id") !!}
      }
    });
  </script>
@endsection
