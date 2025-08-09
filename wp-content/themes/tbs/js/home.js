function homeDevelop(){
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 'auto',        // Hiển thị 6 slide cùng lúc
    spaceBetween: parseRem(10),        // Khoảng cách giữa các slide
    loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
    // breakpoints: {
    //       768: {
    //         slidesPerView: 3,
    //         spaceBetween: parseRem(20),
    //       },
    //       991: {
    //         slidesPerView: 6,
    //         spaceBetween: parseRem(30),
    //       },
    //     },
  });
}
$(document).ready(function () {
  homeDevelop();
});

function homeHero(){
  if(viewport.w < 992){
     $('.home_hero_logo_wrap').addClass('swiper');
     $('.home_hero_logo').addClass('swiper-wrapper');
    $('.home_hero_logo_item').addClass('swiper-slide');
    var swiper1 = new Swiper(".home_hero_logo_wrap", {
      slidesPerView: 'auto',        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(60),        // Khoảng cách giữa các slide
      loop: false,    
      breakpoints: {
            768: {
              slidesPerView: 'auto',
              spaceBetween: parseRem(20),
            },
          },
    });
  }
}
homeHero()
function homeNews(){
  if(viewport.w < 992){
     $('.home_news_inner_wrap').addClass('swiper');
     $('.home_news_inner').addClass('swiper-wrapper');
    $('.home_news_content_item').addClass('swiper-slide');
    var swiper2 = new Swiper(".home_news_inner_wrap", {
      slidesPerView: '1',        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(20),        // Khoảng cách giữa các slide
      loop: false,    
      pagination: {
        el: ".swiper-pagination-news",
        clickable: true,
      },         // Không lặp lại (tuỳ bạn, có thể true nếu cần)
      breakpoints: {
            768: {
              slidesPerView: '2',
              spaceBetween: parseRem(20),
            },
          },
    });
  }
}
homeNews()
function homePartner(){
  if(viewport.w < 992){
     $('.home_partner_inner_wrap').addClass('swiper');
     $('.home_partner_inner').addClass('swiper-wrapper');
    $('.home_partner_group').addClass('swiper-slide');
    var swiper3 = new Swiper(".home_partner_inner_wrap", {
      slidesPerView: 1,        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(20),        // Khoảng cách giữa các slide
      loop: false,    
      pagination: {
        el: ".swiper-pagination-partner",
        clickable: true,
      },         // Không lặp lại (tuỳ bạn, có thể true nếu cần)
    });
  }
}
homePartner()