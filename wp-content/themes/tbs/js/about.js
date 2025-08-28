
const mainScript = () => {


  class ContactHero extends TriggerSetupHero {
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
          new FadeSplitText({ el: $('.about_hero_txt_subtitle').get(0), onMask: true }),
          new FadeSplitText({ el: $('.about_hero_txt_title').get(0), onMask: false, delay: '<=.1' }),
          new FadeSplitText({ el: $('.about_hero_txt_smalltitle').get(0), onMask: true, delay: '<=.1' }),
          new FadeSplitText({ el: $('.about_hero_txt_des ').get(0), onMask: true, delay: '<=.1' }),
        ]
      });
    }
    play() {
      this.tl.play();
    }
  }
  const contactHero = new ContactHero();
  contactHero.trigger();
  class AboutContent extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      let tlInit = gsap.timeline({
        scrollTrigger: {
          trigger: '.about_content_top',
          start: 'top 60%',
          once: true,
        },
        onComplete: () => {
          console.log('Timeline initialized');
          $('.about_content_top .img_will_hover').addClass('hover_scale');
        },
      });
      new MasterTimeline({
        timeline: tlInit,
        triggerInit: this.triggerEl,
        tweenArr: [
          ...$('.about_content_top_txt_des ').map((idx, el) => new FadeSplitText({ el: el, onMask: true, isDisableRevert: false, delay: '<=.2' })),
          new ScaleInset({ el: $('.about_content_top_img ').get(0) }),
        ]
      })
    }
  }
  const aboutContent = new AboutContent('.about_content_top');
  aboutContent.trigger();
  class AboutSight extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      let tlInit = gsap.timeline({
        scrollTrigger: {
          trigger: '.about_content_sight.bg_line',
          start: 'top 60%',
          once: true,
        },
        onComplete: () => {
          console.log('Timeline initialized');
          $('.about_content_sight.bg_line .img_will_hover').addClass('hover_scale');
        },
      });
      new MasterTimeline({
        timeline: tlInit,
        triggerInit: this.triggerEl,
        tweenArr: [
          new ScaleInset({ el: $('.about_content_sight_img_inner ').get(0) }),
          new FadeSplitText({ el: $('.about_content_sight_txt_title ').get(1), onMask: false, isDisableRevert: false }),
          ...$('.about_content_sight_txt_des ').map((idx, el) => new FadeSplitText({ el: el, onMask: true, delay: '<=.2' })),
        ]
      })
    }
  }
  const aboutSight = new AboutSight('.about_content_sight.bg_line');
  aboutSight.trigger();
  class AboutAssign extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      let tlInit = gsap.timeline({
        scrollTrigger: {
          trigger: '.about_content_assign',
          start: 'top 60%',
          once: true,
        },
        onComplete: () => {
          console.log('Timeline initialized');
          $('.about_content_assign .img_will_hover').addClass('hover_scale');
        },
      });
      new MasterTimeline({
        timeline: tlInit,
        triggerInit: this.triggerEl,
        tweenArr: [
          new FadeSplitText({ el: $('.about_content_assign_txt .about_content_sight_txt_title  ').get(0), onMask: false, isDisableRevert: false }),
          ...$('.about_content_assign_txt_des  ').map((idx, el) => new FadeSplitText({ el: el, onMask: true, delay: '<=.2' })),
          new ScaleInset({ el: $('.about_content_assign_img  ').get(0) }),
        ]
      })
    }
  }
  const aboutAssign = new AboutAssign('.about_content_assign');
  aboutAssign.trigger();
  class AboutValue extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      if (viewport.w < 768) {
        $('.value_swiper').addClass('swiper');
        $('.about_value_item').addClass('swiper-slide');
        $('.about_value_wrap').addClass('swiper-wrapper');
        var swiper1 = new Swiper(".value_swiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination-value",
            clickable: true,
          },
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
        });
      }
      new MasterTimeline({
        triggerInit: this.triggerEl,
        scrollTrigger: { trigger: '.about_value ', start: 'top 60%' },
        tweenArr: [
          new FadeSplitText({ el: $(' .about_value__title ').get(0), onMask: false, isDisableRevert: false }),
          ...$('.about_value_smalltitle').map((idx, el) => new FadeSplitText({ el: el, onMask: true, delay: '<=.2' })),
        ]
      })
      $('.about_value_item').each((idx, el) => {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: el,
            start: 'top 60%',
            once: true,
          },
        });
        new MasterTimeline({
          timeline: tl,
          tweenArr: [
            new FadeIn({ el: $(el).find('.about_value_item_img__wrap').get(0) }),
            new ScaleInset({ el: $(el).find('.about_value_item_img ').get(0), delay: '<=.2' }),
            new FadeSplitText({ el: $(el).find('.about_value_item_title ').get(0), onMask: true, delay: '<=.1' }),
            new FadeSplitText({ el: $(el).find('.about_value_item_des p').get(0), onMask: true, delay: '<=.2' }),
          ]
        });
      });
      new MasterTimeline({
        triggerInit: this.triggerEl,
        scrollTrigger: { trigger: '.about_value_wrap ', start: 'top 30%' },
        tweenArr: [
          new FadeSplitText({ el: $('.about_value_des p  ').get(0), onMask: true }),
        ]
      });
    }
  }
  const aboutValue = new AboutValue('.about_value ');
  aboutValue.trigger();
  class AboutHistory extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      var swiper = new Swiper(".about_history_swiper", {
        slidesPerView: 'auto',        // Hiển thị 6 slide cùng lúc
        spaceBetween: parseRem(0),        // Khoảng cách giữa các slide
        loop: false,   
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },          // Không lặp lại (tuỳ bạn, có thể true nếu cần)
        breakpoints: {
          768: {
            slidesPerView: 'auto',
            spaceBetween: parseRem(0),
          },
          991: {
            slidesPerView: 'auto',
            spaceBetween: parseRem(0),
          },
        },
      });
      new MasterTimeline({
        triggerInit: this.triggerEl,
        scrollTrigger: { trigger: '.about_history ', start: 'top 60%' },
        tweenArr: [
          new FadeSplitText({ el: $(' .about_history_title  ').get(0), onMask: false }),
          new FadeSplitText({ el: $(' .about_history_des p  ').get(0), onMask: true, delay: '<=.1' }),
          new FadeSplitText({ el: $(' .about_history_smalltitle   ').get(0), onMask: true, delay: '<=.1' }),
          new FadeIn({ el: $(' .about_history_smalltitle   ').get(0), onMask: true, delay: '<=.1' }),
          new FadeIn({ el: $('.about_history_swiper_wrap'), onMask: true, delay: '<=.1' }),
        ]
      })
      new MasterTimeline({
        triggerInit: this.triggerEl,
        scrollTrigger: { trigger: '.about_history .kl_container ', start: 'top 30%' },
        tweenArr: [
          new ScaleInset({ el: $('.about_history_img  ').get(0) }),
        ]
      })

    }
  }
  const aboutHistory = new AboutHistory('.about_history ');
  aboutHistory.trigger();
  class AboutExpert extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      new MasterTimeline({
        triggerInit: this.triggerEl,
        scrollTrigger: { trigger: '.about_expert  ', start: 'top 60%' },
        tweenArr: [
          new FadeSplitText({ el: $('.about_expert_title  ').get(0), onMask: false }),
          new FadeSplitText({ el: $('.about_expert_smalltitle  ').get(0), onMask: true, delay: '<=.1' })
        ]
      })
      $('.about_expert_content ').each((idx, el) => {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: el,
            start: 'top 60%',
            once: true,
          },
        });
        new MasterTimeline({
          timeline: tl,
          tweenArr: [
            ...$(el).find('.about_expert_content_info_des  ').map((idx, el) => new FadeSplitText({ el: el, onMask: true, isDisableRevert: false, delay: '<=.2' })),
            new ScaleInset({ el: $(el).find('.about_expert_content_img_inner  ').get(0), delay: '<=.2' }),
          ]
        });
      })
    }
  }
  const aboutExpert = new AboutExpert('.about_expert  ');
  aboutExpert.trigger();
  class AboutArchive extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,        // Hiển thị 6 slide cùng lúc
        spaceBetween: parseRem(10),        // Khoảng cách giữa các slide
        loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
        navigation: {
          nextEl: ".button_swiper_next",
          prevEl: ".button_swiper_prev",
        },
        pagination: {
            el: ".swiper-pagination-archive",
            clickable: true,
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
            slidesPerView: 6,
            spaceBetween: parseRem(30),
          },
        },
      });
      new MasterTimeline({
        triggerInit: this.triggerEl,
        scrollTrigger: { trigger: '.about_archive ', start: 'top 60%' },
        tweenArr: [
          new FadeSplitText({ el: $('.about_archive_title ').get(0), onMask: false }),
          new FadeSplitText({ el: $('.about_archive_des ').get(0), onMask: true, delay: '<=.1' }),
        ]
      })
      $('.about_archive_item').each((idx, el) => {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: '.mySwiper_wrap',
            start: 'top 70%',
            once: true,
          },
        });
        new MasterTimeline({
          timeline: tl,
          tweenArr: [
            new FadeIn({ el: $(el), isDisableRevert: true }),
            new ScaleInset({ el: $(el).find('.about_archive_item_img ').get(0), delay: '<=.2' }),
            new FadeSplitText({ el: $(el).find('.about_archive_item_name p ').get(0), onMask: true, delay: '<=.1' }),
          ]
        });
      });
    }

  }
  const aboutArchiveInstance = new AboutArchive('.about_archive ');
  aboutArchiveInstance.trigger();
}
window.onload = mainScript;