@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10 m-b-0">
      <div class="column">
        <h1 class="title">Add New Blog Post</h1>
      </div>
      <div class="column">
        {{--<a href="{{route('posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Post</a>--}}
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{ route('posts.store') }}" method="POST">
      {{ csrf_field() }}

      <div class="columns">
        <div class="column is-three-quaters-desktop">
          <b-field>
            <b-input type="text" placeholder="Post Title" size="is-large" v-model="title"></b-input>
          </b-field>

          <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @slug-changed="updateSlug"></slug-widget>
          <input type="hidden" v-model="slug" name="slug">

          <b-field class="m-t-40">
            <b-input type="textarea" placeholder="Compose your masterpiece..." rows="20"></b-input>
          </b-field>
        </div>{{-- end of .column.is-three-quaters-desktop--}}

        <div class="column is-one-quarter-desktop is-narrow-tablet">
          <div class="card card-widget">
            <div class="author-widget widget-area">
              <div class="selected-author">
                <img src="https://placehold.it/50x50"/>
                <div class="author">
                  <h4>Junji Ninomiya</h4>
                  <p class="subtitle">
                    (nnmy)
                  </p>
                </div>
              </div>
            </div>
            <div class="post-status-widget widget-area">
              <div class="status">
                <div class="status-icon">
                  <b-icon icon="assignment" size="is-medium"></b-icon>
                </div>
                <div class="status-details">
                  <h4><span class="status-emphasis">Draft</span> Saved</h4>
                  <p>A Few Minutes Ago</p>
                </div>
              </div>
            </div>

            <div class="publish-buttons-widget widget-area">
              <div class="secondary-action-button">
                <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
              </div>
              <div class="primary-action-button">
                <button class="button is-primary is-fullwidth">Publish</button>
              </div>
            </div>
          </div>

        </div> <!-- end of .column.is-one-quarter -->

      </div>{{-- end of .columns --}}

    </form>


  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        title: '',
        slug: '',
        api_token: '{{Auth::user()->api_token}}'
      },
      methods:{
        updateSlug: function(val){
          this.slug = val
        }
      }
    })
  </script>
@endsection
