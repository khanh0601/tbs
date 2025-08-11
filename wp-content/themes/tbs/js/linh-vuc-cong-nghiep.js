
const mainScript = () => {
  function factory() {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1.5,        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(20),        // Khoảng cách giữa các slide
      loop: false,            // Không lặp lại (tuỳ bạn, có thể true nếu cần)
      navigation: {
        nextEl: ".button_swiper_next",
        prevEl: ".button_swiper_prev",
      },
       autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: parseRem(20),
        },
        991: {
          slidesPerView: 4,
          spaceBetween: parseRem(30),
        },
      },
    });
  }
  factory()

  function figure() {
    var swiper = new Swiper(".industrial_figure_slide_wrap", {
      slidesPerView: 2,        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(35),        // Khoảng cách giữa các slide
      loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
      navigation: {
        nextEl: ".button_swiper_next",
        prevEl: ".button_swiper_prev",
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: parseRem(20),
        },
        991: {
          slidesPerView: 4,
          spaceBetween: parseRem(30),
        },
      },
    });
  }
  figure();
  class CNHero extends TriggerSetupHero {
    constructor() {
      super();
      this.tl = null;
    }
    trigger() {
      this.setup();
      super.init(this.play.bind(this));
    }
    setup() {
      this.tl = gsap.timeline({
        onStart: () => {
          $('.df_hide_onload').removeClass('df_hide_onload');
        },
      });
      new MasterTimeline({
        timeline: this.tl,
        allowMobile: true,
        tweenArr: [
          new FadeSplitText({ el: $('.industrial_hero_title').get(0), onMask: false }),
          new ScaleInset({ el: $('.industrial_intro_txt_logo ').get(0), delay: '<=0.2' }),
        ]
      });
      new MasterTimeline({
        triggerInit: '.industrial_intro',
        scrollTrigger: { trigger: '.industrial_intro_txt', start: 'top 55%' },
        tweenArr: [
          new FadeIn({ el: $('.industrial_intro_txt_des ').get(0) })
        ]
      });

    }
    play() {
      this.tl.play();
    }
  }
  const cnHero = new CNHero();
  cnHero.trigger();
  class CNSwiper extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      $('.industrial_intro_slide_item ').each((idx, el) => {
        let tlInit = gsap.timeline({
          scrollTrigger: {
            trigger: '.industrial_swiper_wrap',
            start: 'top 55%',
            once: true,
          },
          onStart: () => {
            $(el).find('.img_will_hover').addClass('hover_scale');
          },
        });
        new MasterTimeline({
          timeline: tlInit,
          triggerInit: this.triggerEl,
          tweenArr: [
            new ScaleInset({ el: $(el).find('.industrial_intro_slide_item_img ').get(0) }),
            new FadeSplitText({ el: $(el).find('.industrial_intro_slide_item_txt ').get(0), delay: 0.4 }),
          ]
        });

      })
    }
  }
  const cnSwiper = new CNSwiper('.industrial_swiper_wrap');
  cnSwiper.trigger();
  class CNProduct extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      $('.industrial_product_inner ').each((idx, el) => {
        let tlInit = gsap.timeline({
          scrollTrigger: {
            trigger: el,
            start: 'top 60%',
            once: true,
          },
          onComplete: () => {
            $(el).find('.img_will_hover').addClass('hover_scale');
          },
        });
        new MasterTimeline({
          timeline: tlInit,
          tweenArr: [
            new ScaleInset({ el: $(el).find('.industrial_product_img ').get(0) }),
            new FadeIn({ el: $(el).find('.industrial_product_info ').get(0) })
          ]
        });
      })
    }
  }
  const cnProduct = new CNProduct('.industrial_product');
  cnProduct.trigger();
  class CNFigure extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      $('.industrial_figure_slide_item ').each((idx, el) => {
        new MasterTimeline({
          triggerInit: this.triggerEl,
          scrollTrigger: { trigger: '.industrial_figure_inner', start: 'top 75%' },
          tweenArr: [
            new FadeSplitText({ el: $(el).find('.industrial_figure_slide_item_title  ').get(0) }),
            new FadeSplitText({ el: $(el).find('.industrial_figure_slide_item_des  ').get(0), delay: '<=.2' }),
            new FadeIn({ el: $('.industrial_figure_button').get(0), delay: '<=.4' }),
          ]
        });
      })
    }
  }
  const cnFigure = new CNFigure('.industrial_figure_inner');
  cnFigure.trigger();
  class CNFactory extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      new MasterTimeline({
        triggerInit: this.triggerEl,
        scrollTrigger: { trigger: '.industrial_location', start: 'top 65%' },
        tweenArr: [
          ...$('.industrial_location_left_top ').map((idx, el) => {
            return new FadeIn({ el: $(el), onMask: false });
          }),
          new ScaleInset({ el: $('.industrial_location_right_img ').get(0), delay: '<=.2' }),
        ]
      });
      new MasterTimeline({
        triggerInit: this.triggerEl,
        scrollTrigger: { trigger: '.industrial_location_right', start: 'top 30%' },
        tweenArr: [
          new FadeIn({ el: $('.industrial_location_right_officer').get(0), delay: '<=.2' }),
          new FadeSplitText({ el: $('.industrial_location_right_officer_title_inner ').get(0), onMask: false }),
          ...$('.industrial_location_right_officer_content_item ').map((idx, el) => {
            return new FadeIn({ el: $(el), delay: '<=.2' });
          })
        ]
      });
      $('.industrial_location_left_content ').each((idx, el) => {
        new MasterTimeline({
          triggerInit: this.triggerEl,
          scrollTrigger: { trigger: '.industrial_location_left_content_wrap', start: 'top 65%' },
          tweenArr: [
            new FadeIn({ el: $(el).find('.industrial_location_left_content_percent  ').get(0) }),
            new FadeSplitText({ el: $(el).find('.industrial_location_left_content_title  ').get(0), onMask: false }),
            new FadeSplitText({ el: $(el).find('.industrial_location_left_content_des p ').get(0), delay: '<=.2' }),
          ]
        });
      })
    }
  }
  const cnFactory = new CNFactory('.industrial_location');
  cnFactory.trigger();
}
window.onload = mainScript;