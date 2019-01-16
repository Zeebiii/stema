$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        items:3,
        margin:30,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        nav:true,
        navText: ['<i class="fas fa-chevron-left fa-2x flecheGauche"></i>','<i class="fas fa-chevron-right fa-2x flecheDroite"></i>']
    });
  });