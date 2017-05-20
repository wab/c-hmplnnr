{{--
  Template Name: Galerie d'images
--}}
@php
  $args = array(
    'post_type' => 'imgallery',
    'order' => 'ASC',
    'posts_per_page'=> -1
    );
  $terms = get_terms( 'gallerytag', array(
    'hide_empty' => true,
    'taxonomy' => 'gallerytag'
    ));
@endphp

@extends('layouts.base')

@section('content')
@include('partials.page-header')

  <div class="page-wrapper">

    <div class="columns">

      @if ( ! empty( $terms ) && ! is_wp_error( $terms ) )
        <nav class="gallery--filters">
          <button data-filter="*" class="gallery--filter is-checked">toutes</button>
          @foreach ( $terms as $term )
            <button data-filter=".gallerytag-{{$term->slug}}" class="gallery--filter">{{$term->name}}</button>
          @endforeach
        </nav>
      @endif

      @php($gallery_query = new WP_Query( $args ))

      @if ($gallery_query->have_posts() )

        <div class="gallery--items" id="gallery">

          <div class="grid-sizer"></div>

          <!-- the loop -->
          @while ( $gallery_query->have_posts() ) @php($gallery_query->the_post())
            @include('partials/excerpt-gallery')
          @endwhile

        </div>

        @php(wp_reset_postdata())

      @else
        <p>Il n'y a pas encore d'images de galerie disponibles !!</p>
      @endif

    </div>

  </div>
  @endsection
