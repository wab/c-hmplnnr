@if( have_rows('sections') )

  @while ( have_rows('sections') ) @php(the_row())
  @php($image = get_sub_field('image'))
  <section class="page-section">
    <div class="row">
      <div class="columns medium-8 medium-centered">
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
          <img src="{{$thumb}}" alt="{{$alt}}" class="page-section-thumb">
        @endif
        <h2 class="page-section-title">@php(the_sub_field('title'))</h2>
        <div class="page-section-contenu">
          @php(the_sub_field('entry'))
        </div>
      </div>
    </div>
  </section>
  @endwhile

@endif