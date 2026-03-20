{{-- resources/views/partials/products.blade.php --}}


<div class="pb-wrap">
  <div class="container">

    <!-- Controls -->
    <div class="pb-controls">
      <div class="pb-field">
        <i class="fa fa-search"></i>
        <input type="text" class="pb-input" id="pb-search" placeholder="Search products…"/>
      </div>
      @if($tags)
            <div class="pb-field" style="max-width:220px;">
                <i class="fa fa-tag"></i>
                <select class="pb-select" id="pb-tag">
                    <option value="">All Tags</option>
                    @foreach($tags as $cat)
                        <option value="{{$cat->slug}}">{{ucfirst($cat->name)}}</option>
                    @endforeach
                </select>
                <i class="fa fa-chevron-down pb-chevron"></i>
            </div>
        @endif


    </div>

      <!-- Tab Nav -->
      <div class="pb-tabs-outer">
          <ul class="pb-tabs" id="pb-tabs" role="tablist">
              <li>
                  <button class="pb-tab-btn active" data-cat="all">All <span class="pb-pill" id="pill-all"></span>
                  </button>
              </li>
              @if($categories)
                  @foreach($categories as $cat)

                      <li>
                          <button class="pb-tab-btn" data-cat="{{$cat->slug}}">{{$cat->name}} <span
                                  class="pb-pill">{{$cat->count}}</span></button>
                      </li>
                  @endforeach
              @endif


      </ul>
    </div>

      <div class="pb-loader" id="pb-loader">
          <div class="pb-spinner"></div>
      </div>

    <!-- Product Grid -->
    <div class="pb-grid" id="pb-grid">

      <!-- ELECTRONICS -->


      <!-- Empty state -->


    </div><!-- /pb-grid -->
    <div class="pb-empty" id="pb-empty">
      <i class="fa fa-search"></i>
      <p>No products match your filters.</p>
      <button class="pb-empty-btn" id="pb-reset">Clear filters</button>
    </div>
    <!-- Pagination -->
    <div class="pb-pagination" id="pb-pagination">
      <span class="pb-pag-info" id="pb-pag-info"></span>
      <div class="pb-pag-btns" id="pb-pag-btns">

      </div>
    </div>

  </div>
</div>
