@php
$image = get_field('image');
$terms = wp_get_object_terms( $post->ID,  'gallerytag' );
@endphp

<div @php(post_class('gallery--item'))>
  <article class="gallery--item--wrapper">
    <img class="gallery--item--thumb" src="{{$image['sizes']['gallery']}}" alt="{{$image['alt']}}" />
    <button class="gallery--item--overlay" data-src="{{$image['url']}}" data-sub-html=".gallery--item--caption" data-pinterest-text="@php(the_title()) - image produite avec @php(bloginfo('title'))" data-tweet-text="@php(the_title()) - image produite avec @php(bloginfo('title'))" data-facebook-share-url="{{$image['url']}}" data-twitter-share-url="{{$image['url']}}" data-googleplus-share-url="{{$image['url']}}" data-pinterest-share-url="{{$image['url']}}">
      <div class="gallery--item--overlay--container text-center">
          <h2 class="gallery--item--overlay--title">@php(the_title())</h2>
          <span class="gallery--item--button"><svg class="icon-search"><use xlink:href="#icon-search"></use></svg></span>
      </div>
      <div class="gallery--item--caption">
        <h4>@php(the_title())</h4>
        @php(the_content())
      </div>
    </button>
  </article>
</div>
