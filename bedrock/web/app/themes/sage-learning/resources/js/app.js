import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

// function showLoader() {
//     document.getElementById('pb-loader').style.display = 'flex';
//     document.getElementById('pb-grid').style.display   = 'none';
// }
//
// function hideLoader(delay = 800) {
//     setTimeout(() => {
//         document.getElementById('pb-loader').style.display = 'none';
//         document.getElementById('pb-grid').style.display   = 'grid';
//     }, delay);
// }
//
// async function fetchProducts(category = '', src = '', page = 1, tag = '') {
//     showLoader();
//     const params = new URLSearchParams({category, src, page, tag});
//
//     const res = await fetch(`${sageData.restUrl}/products?${params}`, {
//         headers: {
//             'X-WP-Nonce': sageData.nonce
//         }
//     });
//
//     const products = await res.json();
//     hideLoader();
//     return products;
//
// }

(function () {

    // const PER_PAGE = 6;
    // let page = 1;
    // let activeCat = '';
    // let searchVal = '';
    // let tagVal = '';
    //
    // const grid = document.getElementById('pb-grid');
    // const emptyEl = document.getElementById('pb-empty');
    // const infoEl = document.getElementById('pb-pag-info');
    // const btnsEl = document.getElementById('pb-pag-btns');
    // const searchEl = document.getElementById('pb-search');
    // const tagEl = document.getElementById('pb-tag');
    // const tabsEl = document.getElementById('pb-tabs');
    // const resetBtn = document.getElementById('pb-reset');
    //
    //
    // fetchProducts('', '', 1, tagVal).then(data => {
    //     console.log(data);
    //     if (!data) {
    //         document.getElementById("pb-empty").style.display = "block";
    //     }
    //     renderProducts(data);
    // });
    //
    // function renderProducts(product_result) {
    //     let product_string = '';
    //     console.log(product_result.products.length);
    //     if (product_result.products && product_result.products.length > 0) {
    //         product_result.products.forEach(product => {
    //             product_string += '<div class="pb-card" data-title="' + product.title + '">' +
    //                 '        <div class="pb-img-wrap">' +
    //                 '          <img src="' + product.image + '" alt="' + product.title + '" />';
    //             if (product.tags && product.tags.length > 0) {
    //                 product_string += '<div class="pb-badges">';
    //                 product.tags.forEach(tag => {
    //                     product_string += '<span class="pb-badge new">' + tag + '</span>';
    //                 });
    //                 product_string += '</div>';
    //             }
    //
    //
    //             product_string += '        </div>' +
    //                 '        <div class="pb-card-body">' +
    //                 '          <span class="pb-card-cat">' + product.category + '</span>' +
    //                 '          <h3 class="pb-card-title">' + product.title + '</h3>' +
    //                 '          <div class="pb-card-foot">' +
    //                 '            <span class="pb-price">$' + product.price + '</span>' +
    //                 '            <a href="' + product.url + '" class="pb-btn-view"><i class="fa fa-arrow-right"></i></a>' +
    //                 '          </div>' +
    //                 '        </div>' +
    //                 '      </div>';
    //         });
    //
    //         document.getElementById('pb-grid').innerHTML = product_string;
    //         document.getElementById('pb-pag-info').innerHTML = 'Showing ' + product_result.start_number + '–' + product_result.end_number + ' of ' + product_result.total + ' products';
    //         renderPagination(product_result);
    //
    //     }else{
    //         document.getElementById("pb-empty").style.display = "block";
    //     }
    //
    //
    // }
    //
    // function renderPagination(product_result) {
    //     var pagination_string = '';
    //     if (product_result.totalPages && product_result.totalPages > 0) {
    //         let disabled_class = '';
    //         if (page == 1) {
    //             disabled_class = 'disabled';
    //         }
    //         pagination_string += '<button class="pb-pag-btn" ' + disabled_class + ' data-page="'+(page - 1)+'">' +
    //             '          <i class="fa fa-chevron-left"></i>' +
    //             '        </button>';
    //         var active_class = "";
    //
    //         // var callback_func = "";
    //         // var start_page = page;
    //         // var end_page = product_result.totalPages;
    //         let chunk_length = 5;
    //         let chunk_start = 1;
    //         let chunk_end = 5;
    //
    //         if (page >= 5) {
    //             pagination_string += '<button class="pb-pag-btn"  data-page="1">1</button>';
    //             pagination_string += '<button class="pb-pag-btn" disabled>...</button>';
    //             chunk_start = page;
    //             chunk_end = (page - 1) + chunk_length;
    //         }
    //
    //         if((chunk_start + 5) >= product_result.totalPages){
    //             chunk_start = page - 5;
    //             chunk_end = page;
    //         }
    //         if (page == product_result.totalPages) {
    //             chunk_start = page - 5;
    //             chunk_end = page;
    //         }
    //         if(product_result.totalPages <= 5){
    //             chunk_start = 1;
    //             chunk_end = product_result.totalPages;
    //         }
    //         for (let i = chunk_start; i <= chunk_end; i++) {
    //
    //             if (i == page) {
    //                 active_class = "active";
    //                 // callback_func = "";
    //             } else {
    //                 active_class = "";
    //                 // callback_func = `onClick="fetchProducts('${activeCat}', '${searchVal}', '${i}')"`;
    //             }
    //             pagination_string += '<button class="pb-pag-btn ' + active_class + '"  data-page="' + i + '">' + i + '</button>';
    //         }
    //         if (page < (product_result.totalPages - 5)) {
    //             pagination_string += '<button class="pb-pag-btn" disabled>...</button>';
    //         }
    //         if (page != product_result.totalPages && product_result.totalPages >= 5) {
    //             pagination_string += '<button class="pb-pag-btn" data-page="' + product_result.totalPages + '">' + product_result.totalPages + '</button>';
    //         }
    //         if (page == product_result.totalPages) {
    //             pagination_string += '<button class="pb-pag-btn" disabled><i class="fa fa-chevron-right"></i></button>';
    //         } else {
    //             pagination_string += '<button class="pb-pag-btn" data-page="'+(page + 1)+'"><i class="fa fa-chevron-right"></i></button>';
    //         }
    //
    //     }
    //
    //
    //     document.getElementById('pb-pag-btns').innerHTML = pagination_string;
    // }
    //
    //
    // document.getElementById('pb-pag-btns').addEventListener('click', (e) => {
    //
    //     const btn = e.target.closest('.pb-pag-btn');
    //     if (!btn) return;
    //     if (btn.classList.contains('active')) return;
    //     if (btn.disabled) return;
    //     page = parseInt(btn.dataset.page);
    //     console.log(page);
    //     fetchProducts(activeCat, searchVal, page, tagVal).then(data => {
    //         if (!data) {
    //             document.getElementById("pb-empty").style.display = "block";
    //         }
    //         renderProducts(data);
    //     });
    // });
    //
    // const category_tab = document.getElementsByClassName('pb-tab-btn');
    //
    //     Array.from(category_tab).forEach((element) => {
    //         element.addEventListener('click', (e) => {
    //             activeCat = e.target.dataset.cat;
    //             document.querySelectorAll('.pb-tab-btn').forEach(btn => {
    //                 btn.classList.remove('active');
    //             });
    //             e.target.classList.add('active');
    //             console.log(activeCat);
    //             page = 1;
    //             fetchProducts(activeCat, searchVal, page, tagVal).then(data => {
    //                 if (!data) {
    //                     document.getElementById("pb-empty").style.display = "block";
    //                 }
    //                 renderProducts(data);
    //             });
    //         })
    //     });
    // if(document.getElementById('pb-tag')){
    //     document.getElementById('pb-tag').addEventListener('change', function () {
    //         const value = this.value;
    //         console.log(value);
    //
    //         tagVal = value;
    //         console.log(tagVal);
    //         page = 1;
    //         fetchProducts(activeCat, searchVal, page, tagVal).then(data => {
    //             if (!data) {
    //                 document.getElementById("pb-empty").style.display = "block";
    //             }
    //             renderProducts(data);
    //         });
    //     });
    //
    // }
    //
    // document.getElementById('pb-search').addEventListener('keyup', (e) => {
    //
    //     const value = e.target.value;
    //     console.log(value);
    //
    //     searchVal = value;
    //     console.log(searchVal);
    //     page = 1;
    //     fetchProducts(activeCat, searchVal, page, tagVal).then(data => {
    //         if (!data) {
    //             document.getElementById("pb-empty").style.display = "block";
    //         }
    //         renderProducts(data);
    //     });
    //
    // });
    //


})();
