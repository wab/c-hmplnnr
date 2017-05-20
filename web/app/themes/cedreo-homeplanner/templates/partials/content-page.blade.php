<div class="section section-main">
  <div class="section-wrapper">
      <div class="entry-content">
        @php(the_content())
      </div>
      @if(has_post_thumbnail())
        <div class="entry-thumbnail">
          @php(the_post_thumbnail())
        </div>
      @endif
    </div>
  </div>
</div>