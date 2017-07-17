{{--
  Template Name: tutoriels
--}}

@extends('layouts.base')

@section('content')

  @while(have_posts()) @php(the_post())

    @include('partials.page-header')

    <div class="section">
      <div class="section-wrapper">

        <div class="tutoriel-callout">
          @php(the_content())
        </div>
      </div>

        @if(have_rows('section'))
          @while ( have_rows('section') ) @php(the_row())
            <section class="tutoriel-section">
              @if(get_sub_field('section-title'))
                <h2 class="tutoriel-section-title">@php(the_sub_field('section-title'))</h2>
              @endif
              @if(have_rows('section-items'))
              <div class="tutoriel-items">
                @while ( have_rows('section-items') ) @php(the_row())
                  @php($image = get_sub_field('image'))
                  <div class="tutoriel-item">
                    <article class="tutoriel-article">
                      @if(get_sub_field('titre'))
                        <h3 class="tutoriel-item-title">
                          @php(the_sub_field('titre'))
                        </h3>
                      @endif
                      @if(!empty($image))
                        @php
                          // variables
                          $url = $image['url'];
                          $title = $image['title'];
                          $alt = $image['alt'];
                          $caption = $image['caption'];

                          // thumbnail
                          $size = 'discoverThumb';
                          $thumb = $image['sizes'][ $size ];
                        @endphp
                        <img src="{{$thumb}}" alt="{{$alt}}" class="tutoriel-item-thumbnail">
                      @endif
                      @if(get_sub_field('description'))
                      <div class="tutoriel-item-description">
                        @php(the_sub_field('description'))
                      </div>
                      @endif
                      @php($document = get_sub_field('document'))
                      @if( $document )
                        <a href="{{$document['url']}}">document</a>
                      @endif
                    </article>
                  </div>
                @endwhile
              </div>
              @endif
            </section>
          @endwhile
        @endif

    </div>

  @endwhile

@endsection
