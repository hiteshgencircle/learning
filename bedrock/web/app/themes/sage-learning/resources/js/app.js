import.meta.glob([
  '../images/**',
  '../fonts/**',
]);
async function fetchProducts({category = '', src = '', page = 1}){
  console.trace("fetchProducts called");
  const params = new URLSearchParams({category, src, page});

  const res = await fetch(`${sageData.restUrl}/products?${params}`, {
    headers: {
      'X-WP-Nonce': sageData.nonce
    }
  });

  const products = await res.json();

  return products;

}



(function () {
  const PER_PAGE  = 6;
  let page        = 1;
  let activeCat   = 'all';
  let searchVal   = '';
  let tagVal      = '';

  const grid      = document.getElementById('pb-grid');
  const emptyEl   = document.getElementById('pb-empty');
  const infoEl    = document.getElementById('pb-pag-info');
  const btnsEl    = document.getElementById('pb-pag-btns');
  const searchEl  = document.getElementById('pb-search');
  const tagEl     = document.getElementById('pb-tag');
  const tabsEl    = document.getElementById('pb-tabs');
  const resetBtn  = document.getElementById('pb-reset');

  fetchProducts('' , '', 1).then( data => {
    console.log(data);
    if(!data){
      document.getElementById("pb-empty").css("display", "block");
    }
    renderProducts(data);
  });
  function renderProducts(product_result){
    console.log(product_result.products);
    var product_string = '';
    if(product_result.products && product_result.products.length > 0){
      product_result.products.forEach(product => {
        product_string += '<div class="pb-card" data-title="'+product.title+'">' +
          '        <div class="pb-img-wrap">' +
          '          <img src="'+product.image+'" alt="'+product.title+'" />' +
          '          <div class="pb-badges"><span class="pb-badge new">New</span><span class="pb-badge featured">Featured</span></div>' +
          '        </div>' +
          '        <div class="pb-card-body">' +
          '          <span class="pb-card-cat">'+product.category+'</span>' +
          '          <h3 class="pb-card-title">'+product.title+'</h3>' +
          '          <div class="pb-card-foot">' +
          '            <span class="pb-price">View</span>' +
          '            <a href="'+product.url+'" class="pb-btn-view"><i class="fa fa-arrow-right"></i></a>' +
          '          </div>' +
          '        </div>' +
          '      </div>' +
          '';
      });

      document.getElementById('pb-grid').innerHTML = product_string;
    }


  }

  // All real cards (not the empty-state div)
  /*function allCards() {
    return [...grid.querySelectorAll('.pb-card')];
  }


  function getVisible() {
    return allCards().filter(c => {
      const matchCat    = activeCat === 'all' || c.dataset.cat === activeCat;
      const matchSearch = !searchVal || c.dataset.title.includes(searchVal);
      const matchTag    = !tagVal    || c.dataset.tags.split(',').includes(tagVal);
      return matchCat && matchSearch && matchTag;
    });
  }

  function render() {
    const visible = getVisible();
    const total   = visible.length;
    const pages   = Math.max(1, Math.ceil(total / PER_PAGE));
    if (page > pages) page = pages;

    const start = (page - 1) * PER_PAGE;
    const end   = start + PER_PAGE;

    allCards().forEach(c => c.classList.add('pb-hide'));
    visible.forEach((c, i) => {
      if (i >= start && i < end) c.classList.remove('pb-hide');
    });

    // Empty state
    emptyEl.style.display = total === 0 ? 'block' : 'none';

    // Update tab pills
    // updatePills();

    // Info
    infoEl.textContent = total > 0
      ? `Showing ${start + 1}–${Math.min(end, total)} of ${total} products`
      : '';

    renderPagination(pages, total);
  }

  function updatePills() {
    tabsEl.querySelectorAll('.pb-tab-btn').forEach(btn => {
      const cat = btn.dataset.cat;
      const count = cat === 'all'
        ? getFilteredCount('all')
        : getFilteredCount(cat);
      btn.querySelector('.pb-pill').textContent = count;
    });
  }

  function getFilteredCount(cat) {
    return allCards().filter(c => {
      const matchCat    = cat === 'all' || c.dataset.cat === cat;
      const matchSearch = !searchVal || c.dataset.title.includes(searchVal);
      const matchTag    = !tagVal    || c.dataset.tags.split(',').includes(tagVal);
      return matchCat && matchSearch && matchTag;
    }).length;
  }

  function renderPagination(pages, total) {
    btnsEl.innerHTML = '';
    if (total === 0 || pages <= 1) return;

    // Prev
    const prev = btn('<i class="fa fa-chevron-left"></i>', page === 1, () => { page--; render(); });
    btnsEl.appendChild(prev);

    // Page numbers
    pageRange(page, pages).forEach(p => {
      if (p === '…') {
        const dot = document.createElement('button');
        dot.className = 'pb-pag-btn';
        dot.textContent = '…';
        dot.disabled = true;
        btnsEl.appendChild(dot);
      } else {
        const b = btn(p, false, () => { page = p; render(); });
        if (p === page) b.classList.add('active');
        btnsEl.appendChild(b);
      }
    });

    // Next
    const next = btn('<i class="fa fa-chevron-right"></i>', page === pages, () => { page++; render(); });
    btnsEl.appendChild(next);
  }

  function btn(label, disabled, onClick) {
    const b = document.createElement('button');
    b.className = 'pb-pag-btn';
    b.innerHTML = label;
    b.disabled = disabled;
    b.addEventListener('click', onClick);
    return b;
  }

  function pageRange(cur, total) {
    if (total <= 7) return Array.from({ length: total }, (_, i) => i + 1);
    if (cur <= 4)   return [1, 2, 3, 4, 5, '…', total];
    if (cur >= total - 3) return [1, '…', total-4, total-3, total-2, total-1, total];
    return [1, '…', cur-1, cur, cur+1, '…', total];
  }

  // ── Events ────────────────────────────────
  searchEl.addEventListener('input', () => {
    searchVal = searchEl.value.toLowerCase().trim();
    page = 1; render();
  });

  tagEl.addEventListener('change', () => {
    tagVal = tagEl.value;
    page = 1; render();
  });

  tabsEl.addEventListener('click', e => {
    const tab = e.target.closest('.pb-tab-btn');
    if (!tab) return;
    tabsEl.querySelectorAll('.pb-tab-btn').forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    activeCat = tab.dataset.cat;
    page = 1; render();
  });

  resetBtn.addEventListener('click', () => {
    searchEl.value = '';
    tagEl.value    = '';
    searchVal = ''; tagVal = '';
    activeCat = 'all'; page = 1;
    tabsEl.querySelectorAll('.pb-tab-btn').forEach(t => t.classList.remove('active'));
    tabsEl.querySelector('[data-cat="all"]').classList.add('active');
    render();
  });

  // ── Init ──────────────────────────────────
  render();*/
})();
