function recruit(){
//   if(viewport.w >767){
    $('.recruitdetail_other_inner').addClass('swiper');
    $('.recruitdetail_other_card_item').addClass('swiper-slide');
    $('.recruitdetail_other_card').addClass('swiper-wrapper');
  var swiper1 = new Swiper(".mySwiper", {
        slidesPerView: 1,        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(30),        // Khoảng cách giữa các slide
      loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
      navigation: {
        nextEl: ".recruitdetail_other_button_next",
        prevEl: ".recruitdetail_other_button_prev",
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
// }
}
recruit();