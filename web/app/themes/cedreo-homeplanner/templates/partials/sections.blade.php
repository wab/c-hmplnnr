@if( have_rows('section') )

  @while ( have_rows('section') ) @php(the_row())
  @php($image = get_sub_field('image'))
  <section class="section">
    @if(get_sub_field('title'))
      <h2 class="section-title"><span>@php(the_sub_field('title'))</span></h2>
    @endif
    <div class="section-wrapper">
        @if(!empty($image))
          <div class="section-thumbnail">
            @php
              // variables
              $url = $image['url'];
              $title = $image['title'];
              $alt = $image['alt'];
              $caption = $image['caption'];

              // thumbnail
              $size = 'large';
              $thumb = $image['sizes'][ $size ];
            @endphp
            <img src="{{$thumb}}" alt="{{$alt}}">
          </div>
          <div class="section-contenu section-contenu--with-thumbnail">
        @else
          <div class="section-contenu">
        @endif
          @php(the_sub_field('content'))
          </div>
    </div>
  </section>
  @endwhile

@endif