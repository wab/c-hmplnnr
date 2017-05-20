@extends('layouts.base')

@section('content')
  @include('partials.page-header')
  <div class="section">
    <div class="row">
      <div class="columns medium-8">
        @if (!have_posts())
          <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        @endif

        @while (have_posts()) @php(the_post())
          @include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
        @endwhile

        {!! get_the_posts_navigation() !!}

      </div>
      <div class="columns medium-4">
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
      </div>
    </div>
  </div>

@endsection
