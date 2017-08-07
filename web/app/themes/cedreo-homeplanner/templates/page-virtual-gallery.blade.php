{{--
  Template Name: Galerie de visites virtuelles
--}}

@extends('layouts.base')

@section('content')
@include('partials.page-header')

  <div class="page-wrapper">

    <div class="row column">

      @if(have_rows('gallery'))

        <div class="gallery--items" id="gallery">

          <div class="grid-sizer"></div>

          <!-- the loop -->
          @while(have_rows('gallery')) @php(the_row())
            @include('partials/excerpt-virtual-gallery')
          @endwhile

        </div>

      @else
        <p>Il n'y a pas encore d'images de galerie disponibles !!</p>
      @endif

    </div>

  </div>
  @endsection
