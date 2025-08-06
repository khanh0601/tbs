function recruit(){
  if(viewport.w >767){
    $('.recruit_resreach_list_inner').addClass('swiper');
    $('.recruit_resreach_list_card_item').addClass('swiper-slide');
    $('.recruit_resreach_list_card').addClass('swiper-wrapper');
  var swiper1 = new Swiper(".mySwiper", {
        slidesPerView: 1,        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(30),        // Khoảng cách giữa các slide
      loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
      navigation: {
        nextEl: ".recruit_resreach_button_next",
        prevEl: ".recruit_resreach_button_prev",
      },
      breakpoints: {
            768: {
              slidesPerView: 2,
              spaceBetween: parseRem(20),
            },
            991: {
              slidesPerView: 3,
              spaceBetween: parseRem(35),
            },
          },
  });
}
}
recruit();
function recruitActive(){
  if(viewport.w < 992){
    $('.recruit_active_inner').addClass('swiper');
    $('.recruit_active_list_item').addClass('swiper-slide');
    $('.recruit_active_list').addClass('swiper-wrapper');
    var swiper1 = new Swiper(".recruit_active_inner", {
      slidesPerView: 1.2,
      spaceBetween: parseRem(20),
      loop: false,
       breakpoints: {
            768: {
              slidesPerView: 1.2,
              spaceBetween: parseRem(20),
            },
          },
    });
  }
  
}
recruitActive();