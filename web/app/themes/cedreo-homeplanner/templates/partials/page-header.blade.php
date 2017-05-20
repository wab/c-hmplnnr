@if (is_front_page())
  <header class="page-header text-center banner" style="background-image: url({{get_field( "banner_image", 3225 )}})">
    <div class="wrapper">
      <h1 class="maintitle page--title">{{get_field( "banner_title", 3225 )}}<span class="tagline">{{get_field( "banner_tagline", 3225 )}}</span></h1>
      <a href="{{get_field( "banner_url", 3225 )}}" class="button large focus">Démonstration</a>
    </div>
  </header>
@elseif (is_single() )
   <div class="page-header text-center banner">
    <div class="wrapper">
      <p class="page--title">Blog</p>
    </div>
  </div>
@else
  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1 class="page--title"><?= App\title(); ?></h1>
    </div>
  </header>
@endif

@include('partials.breadcrumb')
