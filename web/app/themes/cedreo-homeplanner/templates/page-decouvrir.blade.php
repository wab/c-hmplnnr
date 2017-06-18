{{--
  Template Name: Decouvrir
--}}

@extends('layouts.base')

@section('content')

  @while(have_posts()) @php(the_post())

    @include('partials.page-header')

    <div class="section">
      <div class="section-wrapper">

        @if(get_field('subtitle'))
          <h2 class="discover-subtitle"><span>@php(the_field('subtitle'))</span></h2>
        @endif

        <div class="discover-items">
          <div class="discover-main">
            <div class="discover-main-callout">
              @php(the_content())
            </div>
          </div>
          @if(have_rows('items'))
            @while ( have_rows('items') ) @php(the_row())
              @php($image = get_sub_field('image'))
              <div class="discover-item">
                <article class="dicover-article">
                  @if(get_sub_field('title'))
                    <h3 class="discover-item-title">
                      @if(get_sub_field('icon'))
                        <i class="fa fa-@php(the_sub_field('icon'))"></i>
                      @endif
                      @php(the_sub_field('title'))
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
                    <img src="{{$thumb}}" alt="{{$alt}}" class="discover-item-thumbnail">
                  @endif
                  @if(get_sub_field('content'))
                    @php(the_sub_field('content'))
                  @endif
                </article>
              </div>
            @endwhile
          @endif
        </div>

      </div>
    </div>


    @include('partials.sections')

  @endwhile

@endsection
