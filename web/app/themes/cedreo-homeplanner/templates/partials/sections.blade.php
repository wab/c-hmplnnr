@if( have_rows('section') )

  @while ( have_rows('section') ) @php(the_row())
  @php($image = get_sub_field('image'))
  <section class="section">
    <div class="section-wrapper">
        @if(!empty($image))
          @php
            // variables
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];

            // thumbnail
            $size = 'medium';
            $thumb = $image['sizes'][ $size ];
          @endphp
          <img src="{{$thumb}}" alt="{{$alt}}" class="section-thumbnail">
        @endif
        <h2 class="page-section-title"><span>@php(the_sub_field('title'))</span></h2>
        <div class="page-section-contenu">
          @php(the_sub_field('content'))
        </div>
    </div>
  </section>
  @endwhile

@endif