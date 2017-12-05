@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Edit Permission</h1>
    </div> <!-- end of column -->

    <div class="column">
      <a href="{{route('permissions.show', $permission->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-edit m-r-10"></i> View Permission</a>
    </div>
  </div> <!-- end of .columns.m-t-10 -->
  <hr class="m-t-0">

  <form action="{{route('permissions.update', $permission->id)}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="field">
      <label for="display_name">Name (Display Name)</label>
      <p class="control">
        <input type="text" class="input" name="display_name" id="display_name" value="{{$permission->display_name}}">
      </p>
    </div>

    <div class="field">
      <label for="name">Slug <smal>(Cannot be changed)</smal></label>
      <p class="control">
        <input type="text" class="input" name="name" id="name" value="{{$permission->name}}" disabled>
      </p>
    </div>

    <div class="field">
      <label for="description">Description</label>
      <p class="control">
        <input type="text" class="input" name="description" id="description" placeholder="Describe what this permission does" value="{{$permission->description}}">
      </p>
    </div>

    <button class="button is-primary">Save Changes</button>
  </form>

</div> <!-- end of .flex-container -->
@endsection
