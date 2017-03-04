<div class="row">
  <div class="columns medium-6 medium-centered">
    @if (get_field('titre'))
      <h1 class="page-title">@php(the_field('titre'))</h1>
    @endif
    @php(the_content())
  </div>
</div>
