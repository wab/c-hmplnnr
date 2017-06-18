<article @php(post_class(('excerpt')))>
  <div class="entry-wrapper">
    <header class="entry-header">
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
      @include('partials/entry-meta')
    </header>
    @if(has_post_thumbnail())
      @php(the_post_thumbnail('thumbnail', ['class' => 'entry-thumbnail']))
    @endif
    <div class="entry-summary">
      @php(the_excerpt())
    </div>
  </div>
</article>
