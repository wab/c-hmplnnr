{{--
  Template Name: Page avec sections
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    @include('partials.sections')
  @endwhile
@endsection
