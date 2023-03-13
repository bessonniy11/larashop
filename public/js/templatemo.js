/*

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

*/

'use strict';
$(document).ready(function() {

    // Accordion
    const all_panels = document.querySelectorAll('.templatemo-accordion > li > ul');
    const all_panels_links = document.querySelectorAll('.templatemo-accordion > li > a');
    if (all_panels_links && all_panels) {
      all_panels_links.forEach(link => {
        link.addEventListener('click', ()=> {
          all_panels.forEach(el => {el.classList.remove('show')});
          if (!link.classList.contains('active')) {
            all_panels_links.forEach(el => {el.classList.remove('active')});
            link.classList.add('active');
            link.nextElementSibling.classList.add('show');
          } else {
            link.classList.remove('active');
            link.nextElementSibling.classList.remove('show');
          }
        })
      });
      document.addEventListener('click', function(e) {
        if (!e.target.closest('.templatemo-accordion')) {
          all_panels.forEach(el => {el.classList.remove('show')});
          all_panels_links.forEach(el => {el.classList.remove('active')});
        }
      })
    }
    // End accordion

    // Product detail
    $('.product-links-wap a').click(function(){
      var this_src = $(this).children('img').attr('src');
      $('#product-detail').attr('src',this_src);
      return false;
    });
    $('#btn-minus').click(function(){
      var val = $("#var-value").html();
      val = (val=='1')?val:val-1;
      $("#var-value").html(val);
      $("#product-quanity").val(val);
      return false;
    });
    $('#btn-plus').click(function(){
      var val = $("#var-value").html();
      val++;
      $("#var-value").html(val);
      $("#product-quanity").val(val);
      return false;
    });
    $('.btn-size').click(function(){
      var this_val = $(this).html();
      $("#product-size").val(this_val);
      $(".btn-size").removeClass('btn-secondary');
      $(".btn-size").addClass('btn-success');
      $(this).removeClass('btn-success');
      $(this).addClass('btn-secondary');
      return false;
    });
    // End roduct detail

});

// PRELOAD START

document.addEventListener("DOMContentLoaded", ready);

function ready() {
	document.querySelector("body").classList.remove('preload')
}

// PRELOAD END

// ACCOUNT MODAL START

document.addEventListener('click',(e)=> {
    if (e.target.closest('.account')) {
        document.querySelector('.account-nav-modal').classList.add('active');
    } else {
        document.querySelector('.account-nav-modal').classList.remove('active');
    }
});

// ACCOUNT MODAL END
