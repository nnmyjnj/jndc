@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-10">

    <div class="column">
      <h1 class="title">Manage Permissions</h1>
    </div>

    <div class="column">
      <a href="{{route('permissions.create')}}" class="button is-primary is-pull-right m-t-10">
        <i class="fa fa-user-plus"> Create New Permission</i>
      </a>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <table class="table is-narrow is-fullwidth">
        <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach($permissions as $permission)
                <tr>
                  <td>{{$permission->display_name}}</td>
                  <td>{{$permission->name}}</td>
                  <td>{{$permission->description}}</td>
                  <td>
                    <a href="{{route('permissions.show', $permission->id)}}" class="button is-outlined is-small m-r-5">View</a>
                    <a href="{{route('permissions.edit', $permission->id)}}" class="button is-outlined is-small">Edit</a>
                  </td>
                </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div><!-- end of card -->
</div>
@endsection
