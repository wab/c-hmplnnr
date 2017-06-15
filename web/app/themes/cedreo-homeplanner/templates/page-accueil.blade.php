{{--
  Template Name: Accueil
--}}

@extends('layouts.base')

@section('content')

  @while(have_posts()) @php(the_post())

    @include('partials.page-header')

    <section class="section">
      <div class="section-wrapper">
        @if(get_field('main-section-title'))
          <h2 class="section-title">
            <span>@php(the_field('main-section-title'))</span>
          </h2>
        @endif
        <div class="section-thumbnail">
          @if(get_field('video'))
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{get_field('video')}}?rel=0" frameborder="0" allowfullscreen></iframe>
          @elseif(has_post_thumbnail())
            @php(the_post_thumbnail('large'))
          @else
            <img src="@asset('images/accelerez.jpg')" alt="">
          @endif
        </div>
        <div class="section-contenu section-contenu--with-thumbnail">
          @php(the_content())
        </div>
      </div>
    </section>

    @include('partials.sections')

    @if(have_rows('customers'))
      <section class="section">
        <div class="section-wrapper">
          <h2 class="section--title scrollreveal"><span>Ils utilisent Home Planner</span></h2>
            <div class="customers-items owl-carousel">
              @while ( have_rows('customers') ) @php(the_row())
                @php($logo = get_sub_field('logo'))
                @if(!empty($logo))
                  @php
                    // variables
                    $url = $logo['url'];
                    $title = $logo['title'];
                    $alt = $logo['alt'];
                    $caption = $logo['caption'];

                    // thumbnail
                    $size = 'customers';
                    $thumb = $logo['sizes'][ $size ];
                  @endphp
                  <div class="customers-item"><a href="@php(the_sub_field('link'))"><img src="{{$thumb}}" alt="{{$alt}}"></a></div>
                @endif
              @endwhile
            </div>
        </div>
      </section>
    @endif

  @endwhile

@endsection
