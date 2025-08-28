
const mainScript = () => {
  gsap.registerPlugin(ScrollToPlugin, Observer);
  let observer;
  function initObserver() {
    console.log('init observer');
    if (viewport.w > 991) {
      const sections = gsap.utils.toArray(".full_screen");
      let currentIndex = 0;
      let isAnimating = false;
      $('.home_list_num').on('click', function (e) {
        e.preventDefault();
        $('.home_list_num').removeClass('active');
        $(this).addClass('active')
        let index = $(this).index();
        goToSection(index)
      })
      function goToSection(index) {
        index = Math.max(0, Math.min(sections.length - 1, index));

        if (index === currentIndex || isAnimating) return;

        isAnimating = true;
        currentIndex = index;
        observer.disable(); 
        lenis.stop();
        $('.home_list_num ').removeClass('active');
        $('.home_list_num').eq(currentIndex).addClass('active');
        gsap.to(window, {
          duration: 1,
          scrollTo: { y: sections[index], autoKill: true, offsetY: 0 },
          onComplete: () => {
            gsap.delayedCall(.6, () => {
              isAnimating = false;
              lenis.start();
              observer.enable(); 
            });
          }
        });
      }
      sections.forEach((panel, i) => {
        ScrollTrigger.create({
          trigger: panel,
          start: "top center",
          onEnter: () => {
            if (!isAnimating) {
              currentIndex = i;
              console.log('currentIndex', currentIndex);

            }
          }
        });
      });
      // Observer chỉ tạo 1 lần (bên ngoài vòng lặp)
      observer = Observer.create({
        target: window,
        type: "wheel,touch",
        onUp: () => {
          console.log(isAnimating)
          if (!document.querySelector('html.open-popup') && !isAnimating) {
            goToSection(currentIndex - 1);
          }
        },
        onDown: () => {
          console.log(isAnimating)
          if (!document.querySelector('html.open-popup') && !isAnimating) {
            goToSection(currentIndex + 1);
          }
        },
        preventDefault: (event) => {
          return !document.documentElement.classList.contains('open-popup');
        },
        tolerance: 20
      });
    }
  }
  class HomeIntro extends TriggerSetupHero {
    constructor() {
      super();
    }
    trigger() {
      this.setup();
      super.init(this.play.bind(this));
    }
    setup() {
      if (viewport.w < 992) {
        $('.home_hero_logo_wrap').addClass('swiper');
        $('.home_hero_logo').addClass('swiper-wrapper');
        $('.home_hero_logo_item').addClass('swiper-slide');
        var swiper1 = new Swiper(".home_hero_logo_wrap", {
          slidesPerView: 'auto',        // Hiển thị 6 slide cùng lúc
          spaceBetween: parseRem(30),        // Khoảng cách giữa các slide
          loop: true,
          speed: 1200,
          freeMode: true,
          autoplay: {
            delay: 0,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination-logo",
            clickable: true,
          }, 
          breakpoints: {
            768: {
              spaceBetween: parseRem(40),
            },
          },
        });
      }
      this.tl = gsap.timeline({
        onStart: () => {
          $('.df_hide_onload').removeClass('df_hide_onload');
        },
        onComplete: () => {
          $('.home_intro_video').attr('src', $('.home_intro_video').data('src'));
        }
      });
      new MasterTimeline({
        timeline: this.tl,
        allowMobile: true,
        tweenArr: [
          new FadeIn({ el: $('.home_intro_content_logo').get(0), delay: '<=.2' }),
          new FadeSplitText({ el: $('.home_intro_content_title ').get(0), onMask: false }),
          new FadeIn({ el: $('.home_intro_seemore').get(0), delay: '<=.2' }),
          new FadeIn({ el: $('.home_list').get(0),type: 'right', delay: '<=.2' }),
          new FadeIn({ el: $('.home_intro_video').get(0), delay: '<=1.6' })
        ]
      });
    }
    play() {
      this.tl.play();
    }
  }
  const homeIntro = new HomeIntro();

  class HomeHero extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: this.triggerEl,
          start: 'top 20%',
          once: true,
        },
      });
      viewport.w > 767 && new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          new FadeSplitText({ el: $('.home_hero_txt_subtitle').get(0), onMask: true }),
          new FadeSplitText({ el: $('.home_hero_txt_title').get(0), onMask: false, delay: '<=.2' }),
          new FadeSplitText({ el: $('.home_hero_txt_smalltitle').get(0), onMask: true, delay: '<=.2' }),
          new FadeSplitText({ el: $('.home_hero_txt_des').get(0), onMask: true, delay: '<=.2' }),
          new FadeIn({ el: $('.home_hero_txt_link').get(0), delay: '<=.4' }),
          ...$('.home_hero_logo_item').map((idx, el) => {
            return new FadeIn({ el: $(el).get(0), delay: '<=.1', isDisableRevert: true });
          })
        ]
      });
    }
  }
  const homeHero = new HomeHero('.home_hero ');
  class HomeActive extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: this.triggerEl,
          start: 'top 20%',
          once: true,
        },
      });
      new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          new FadeSplitText({ el: $('.home_active_title').get(0), onMask: false }),

          ...$('.home_active_item').toArray().flatMap(el => {
            const $el = $(el);
            return [
              new ScaleInset({ el: $el.find('.home_active_item_img').get(0) }),
              new FadeIn({ el: $el.find('.home_active_item_txt_logo').get(0) }),
              new FadeSplitText({ el: $el.find('.home_active_item_txt_des').get(0) }),
              ...$el.find('.home_active_item_txt_item')
                .toArray()
                .map(item => new FadeIn({ el: item, delay: '<=.2' }))
            ];
          })
        ]
      });
    }
  }
  const homeActive = new HomeActive('.home_active ');
  var swiperActive = new Swiper(".home_active_inner", {
          slidesPerView: 1,
          spaceBetween: parseRem(115),
          pagination: {
            el: ".swiper-pagination-active",
            clickable: true,
          },
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          breakpoints: {
            991: {
              slidesPerView: 2,
              spaceBetween: parseRem(115),
            },
          },
        });
  class HomeDevelopment extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
 const swiper = new Swiper(".mySwiper", {
  slidesPerView: 'auto',
  spaceBetween: parseRem(10),
  loop: false,
  on: {
    init(sw) { 
      setActive(sw); 
    },
    slideChange(sw) { 
      setActive(sw); 
    },
    click(sw) {
      if (typeof sw.clickedIndex !== 'undefined' && sw.clickedIndex !== null) {
        sw.slideTo(sw.clickedIndex);   // Trượt đến slide được click
        setActive(sw);                 // Gọi lại hàm active
      }
    }
  }
});


function setActive(sw){
  const items = $('.home_development_info_bg_item');
  const item_info = $('.home_development_info_item');
  const idx = sw.realIndex ;
  items.removeClass('active').eq(idx).addClass('active');
  item_info.removeClass('active').eq(idx).addClass('active');
}

      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: this.triggerEl,
          start: 'top 20%',
          once: true,
        },
      });
      new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          new FadeSplitText({ el: $('.home_development_title ').get(0), onMask: false }),
          new FadeSplitText({ el: $('.home_development_subtitle ').get(0), onMask: true }),
          new FadeSplitText({ el: $('.home_development_info_item.active .home_development_info_title p').get(0), onMask: true }),
          new FadeIn({ el: $('.home_development_info_item.active .home_development_info_des ').get(0) }),
          new FadeIn({ el: $('.home_development_info_link ').get(0) }),
          ...$('.home_development_slide_list_item').map((idx, el) => {
            return [
              new FadeIn({ el: $(el), type: 'right', isDisableRevert: true })
            ]
          }),
        ]
      });
    }
  }
  const homeDevelopment = new HomeDevelopment('.home_development');
  class HomeAchieve extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
       if(viewport.w < 992) {
        $('.home_achieve_list_wrap').addClass('swiper');
        $('.home_achieve_list').addClass('swiper-wrapper');
        $('.home_archive_item').addClass('swiper-slide');
        var swiper5 = new Swiper(".home_achieve_list_wrap", {
          slidesPerView: 'auto',        // Hiển thị 6 slide cùng lúc
          spaceBetween: parseRem(20),        // Khoảng cách giữa các slide
          loop: false,
          pagination: {
            el: ".swiper-pagination-achieve",
            clickable: true,
          },         // Không lặp lại (tuỳ bạn, có thể true nếu cần)
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
        });
      }
      else {
        let tl = gsap.timeline({
        scrollTrigger: {
          trigger: this.triggerEl,
          start: 'top 20%',
          once: true,
        },
      });
      new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          ...$('.home_archive_item').map((idx, el) => {
            return [
              new FadeIn({ el: $(el), delay: '<=.1' }),
              new ScaleInset({ el: $(el).find('.home_archive_item_img').get(0) }),
              new FadeSplitText({ el: $(el).find('.home_archive_item_name').get(0), onMask: true, delay: '<=.1' })
            ]
          })
        ]
      });
      }
      
      ScrollTrigger.create({
        trigger: this.triggerEl,
        start: 'top 20%',
        end: 'top+=40% top',
        onEnter: () => gsap.to('.home_achieve_bg', {
          clipPath: 'polygon(31% 0%,100% 0%,100% 100%,0% 100%)', duration: 1, ease: 'power2.out'
        }),
        onLeave: () => gsap.to('.home_achieve_bg', {
          clipPath: 'polygon(100% 0%,100% 0%,100% 100%,100% 100%)', duration: 1, ease: 'power2.inOut'
        }),
        onEnterBack: self => self.vars.onEnter(),
        onLeaveBack: self => self.vars.onLeave()
      });
    }
  }
  const homeAchieve = new HomeAchieve('.home_achieve ');
  class HomeNews extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
      if (viewport.w < 992) {
        $('.home_news_inner_wrap').addClass('swiper');
        $('.home_news_inner').addClass('swiper-wrapper');
        $('.home_news_content_item').addClass('swiper-slide');
        var swiper2 = new Swiper(".home_news_inner_wrap", {
          slidesPerView: '1',        // Hiển thị 6 slide cùng lúc
          spaceBetween: parseRem(20),        // Khoảng cách giữa các slide
           loop: true,                   // Cần bật loop để autoplay mượt
            autoplay: {
              delay: 3000,                // Thời gian giữa các slide (ms)
              disableOnInteraction: false // Vẫn tiếp tục chạy sau khi user tương tác
            },
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
      else {
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: this.triggerEl,
          start: 'top 20%',
          once: true,
        },
      });
      new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          new FadeSplitText({ el: $('.home_news_title').get(0), onMask: false }),
          ...$('.home_news_content_item').map((idx, el) => {
            return [
              new FadeIn({ el: $(el), delay: '<=.1' }),
              new ScaleInset({ el: $(el).find('.home_news_content_item_img ').get(0) }),
              new FadeIn({ el: $(el).find('.home_news_content_item_time'), delay: '<=.1' }),
              new FadeIn({ el: $(el).find('.home_news_content_item_title').get(0), delay: '<=.1' }),
              new FadeIn({ el: $(el).find('.home_news_content_item_des').get(0), delay: '<=.1' }),
              new FadeIn({ el: $(el).find('.home_news_content_item_detail').get(0), delay: '<=.1' })
            ]
          }),
          new FadeIn({ el: $('.home_news_seeall ').get(0) }),

        ]
      });
      }
      ScrollTrigger.create({
        trigger: this.triggerEl,
        start: 'top 20%',
        end: 'top+=10% top',
        onEnter: () => gsap.to('.home_news_bg', {
          clipPath: 'polygon(0% 0%,100% 0%,60% 100%,0% 100%)', duration: 1, ease: 'power2.out'
        }),
        onLeave: () => gsap.to('.home_news_bg', {
          clipPath: 'polygon(0% 0%,0% 0%,0% 100%,0% 100%)', duration: 1, ease: 'power2.inOut'
        }),
        onEnterBack: self => self.vars.onEnter(),
        onLeaveBack: self => self.vars.onLeave()
      });
    }
  }
  const homeNews = new HomeNews('.home_news ');
  class HomePartner extends TriggerSetup {
    constructor(triggerEl) {
      super(triggerEl);
    }
    trigger() {
      super.setTrigger(this.setup.bind(this));
    }
    setup() {
        $('.home_partner_inner_wrap').addClass('swiper');
        $('.home_partner_inner').addClass('swiper-wrapper');
        $('.home_partner_item').addClass('swiper-slide');
        var swiper3 = new Swiper(".home_partner_swiper1", {
          slidesPerView: 3,        // Hiển thị 6 slide cùng lúc
          spaceBetween: parseRem(20),        // Khoảng cách giữa các slide
          loop: true,
          speed: 5000,
          autoplay: {
            delay: 0,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination-partner",
            clickable: true,
          },         // Không lặp lại (tuỳ bạn, có thể true nếu cần)
          breakpoints: {
          768: {
            slidesPerView: 4,
            spaceBetween: parseRem(20),
          },
          991: {
            slidesPerView: 6,
            spaceBetween: parseRem(30),
          },
        }
        });
        var swiper4 = new Swiper(".home_partner_swiper2", {
          slidesPerView: 3,        // Hiển thị 6 slide cùng lúc
          spaceBetween: parseRem(20),        // Khoảng cách giữa các slide
          loop: true,
          speed: 5000,
          autoplay: {
            delay: 0,
            reverseDirection: true,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination-partner",
            clickable: true,
          },         // Không lặp lại (tuỳ bạn, có thể true nếu cần)
          breakpoints: {
          768: {
            slidesPerView: 4,
            spaceBetween: parseRem(20),
          },
          991: {
            slidesPerView: 6,
            spaceBetween: parseRem(30),
          },
        },
        });
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: this.triggerEl,
          start: 'top 20%',
          end: 'bottom top',
          toggleActions: 'play reverse play reverse',
          onEnter: () => $('.home_copyright').hide(),
          onLeave: () => $('.home_copyright').show(),
          onEnterBack: () => $('.home_copyright').hide(),
          onLeaveBack: () => $('.home_copyright').show(),
        },
      });
      new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          new FadeSplitText({ el: $('.home_partner_title').get(0), onMask: false }),
          ...$('.home_partner_inner_wrap').map((idx, el) => {
            return [
              new FadeIn({ el: $(el), delay: '<=.1' }),
            ]
          }),
        ]
      });
    }
  }
  const homePartner = new HomePartner('.home_partner ');
  const initGlobal = () => {
    initObserver();
    homeIntro.trigger();
    homeHero.trigger();
    homeDevelopment.trigger();
    homeAchieve.trigger();
    homeNews.trigger();
    homeActive.trigger();
    homePartner.trigger();
  }
   if (window.scrollY > 0) {
        lenis.scrollTo("top", {
            duration: .001,
            onComplete: () => initGlobal()
        });
    }
    else {
        initGlobal();
    }
}
window.onload = mainScript;