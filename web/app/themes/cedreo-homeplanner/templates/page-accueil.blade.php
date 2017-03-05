{{--
  Template Name: Page d'accueil
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- Carousel --}}
    @if( have_rows('carousel') )
      <div class="owl-carousel main-carousel">
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
    {{-- Heading section --}}
    <div class="heading">
      <h1 class="heading-title">@php(the_field('titre'))</h1>
      <p><a href="" class="button large">Démonstration</a></p>
    </div>
    {{-- description & démo --}}
    <section class="page-section">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A iste cumque consequatur, minus doloremque harum rem tenetur, magni vero maiores nemo commodi voluptas temporibus. Repellat ipsum quos quod, minima earum?</p>
    </section>
    {{-- Clients --}}
    <section class="page-section">
      <h2>Ils utilisent Home Planner</h2>
      <div class="users-carousel owl-carousel">
        @while ( have_rows('customers') ) @php(the_row())
          @php($logo = get_sub_field('logo'))
          @if (!empty($logo))
            @php
              // variables
              $link = get_sub_field('link');
              $url = $logo['url'];
              $title = $logo['title'];
              $alt = $logo['alt'];
              $caption = $logo['caption'];

              // thumbnail
              $size = 'thumbnail';
              $thumb = $logo['sizes'][ $size ];
            @endphp
            <a class="users-item" href="{{$link}}" target="_blank">
              <img src="{{$thumb}}" alt="{{$alt}}">
            </a>
          @endif
        @endwhile
      </div>
    </section>
    @include('partials.content-page')
  @endwhile
@endsection
