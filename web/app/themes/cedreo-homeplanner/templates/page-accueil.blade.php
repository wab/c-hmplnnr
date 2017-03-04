{{--
  Template Name: Page d'accueil
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @if( have_rows('carousel') )
      <div class="owl-carousel">
        @while ( have_rows('carousel') ) @php(the_row())
          <div class="carousel-item" style="background-image: url(@php(the_sub_field('image')))">
            <div class="carousel-item-heading">
              @php(the_sub_field('heading'))
              @if (get_sub_field('tagline'))
                <div class="carousel-item-tagline">
                  @php(the_sub_field('tagline'))
                </div>
              @endif
            </div>
          </div>
        @endwhile
      </div>
    @endif
    @include('partials.content-page')
  @endwhile
@endsection
