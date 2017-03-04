{{--
  Template Name: Page d'accueil
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  <?php

  // check if the repeater field has rows of data
  if( have_rows('sections') ):

    // loop through the rows of data
      while ( have_rows('sections') ) : the_row();

          // display a sub field value
          the_sub_field('title');

      endwhile;

  else :

      // no rows found

  endif;

  ?>
@endsection
