@php
  $title = get_sub_field('title');
  $image = get_sub_field('thumb');
  $url = get_sub_field('url');
@endphp

<div @php(post_class('gallery--item'))>
  <article class="gallery--item--wrapper">
    <img class="gallery--item--thumb" src="{{$image['sizes']['gallery']}}" alt="{{$image['alt']}}" />
    <button class="gallery--item--overlay" data-iframe="true" data-src="{{$url}}" data-sub-html=".gallery--item--caption" data-pinterest-text="{{$title}} - image produite avec @php(bloginfo('title'))" data-tweet-text="{{$title}} - image produite avec @php(bloginfo('title'))" data-facebook-share-url="{{$url}}" data-twitter-share-url="{{$url}}" data-googleplus-share-url="{{$url}}" data-pinterest-share-url="{{$url}}">
      <div class="gallery--item--overlay--container text-center">
          <h2 class="gallery--item--overlay--title">{{$title}}</h2>
          <span class="gallery--item--overlay--icon"><i class="fa fa-search"></i></span>
      </div>
    </button>
  </article>
</div>
