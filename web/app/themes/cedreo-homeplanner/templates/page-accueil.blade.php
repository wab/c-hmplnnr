{{--
  Template Name: Accueil
--}}

@extends('layouts.base')

@section('content')

  @while(have_posts()) @php(the_post())

    @include('partials.page-header')

    <section class="section booster">
      <div class="row">
        <div class="column medium-6">
        @if(get_field('video'))
          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{get_field('video')}}?rel=0" frameborder="0" allowfullscreen></iframe>
        @elseif(has_post_thumbnail())
          @php(the_post_thumbnail('large'))
        @else
          <img src="@asset('images/accelerez.jpg')" alt="">
        @endif
        </div>
        <div class="column medium-6">
          @php(the_content())
        </div>
      </div>
    </section>

    @include('partials/sections')

    <section class="home-galerie">
      <div class="row column">
        <h2 class="section--title scrollreveal"><span>Galerie</span></h2>
        @php($pageGallery = new WP_Query( array('page_id' => 16 ) ))

        @if ( $pageGallery->have_posts() )

          @while ( $pageGallery->have_posts() ) @php($pageGallery->the_post())
            <div class="text-center"><?php the_excerpt(); ?></div>
          @endwhile

          @php(wp_reset_postdata())
        @endif

        @php($gallery = new WP_Query( array('post_type' => 'imgallery', 'posts_per_page' => 3 ) ))
        @if ( $gallery->have_posts() )

          <ul class="row no-bullet">

            @while ( $gallery->have_posts() ) @php($gallery->the_post())
            @php($image = get_field('image'))
              <li class="columns large-4"><img class="gallery--item--thumb" src={{ $image['sizes']['gallery'] }} alt={{$image['alt']}} /></li>
            @endwhile

          </ul>

         @php(wp_reset_postdata())
        @endif

      <p class="text-center"><a href="@php(the_permalink( 16 ))" class="button">Voir la galerie</a></p>
      </div>
    </section>

  @endwhile

@endsection
