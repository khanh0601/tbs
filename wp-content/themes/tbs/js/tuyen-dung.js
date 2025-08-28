



const mainScript = () => {
window.parseRem = window.parseRem || function (n) {
    const fs = parseFloat(getComputedStyle(document.documentElement).fontSize || 16);
    return parseFloat(n) * fs;
  };

  const $container = $('.recruit_resreach_list_inner');           // CONTAINER
  const $wrapper   = $container.find('.recruit_resreach_list_card'); // WRAPPER
  const slideSel   = '.recruit_resreach_list_card_item';          // SLIDE
  let recruitSwiper = null;

  function applySwiperClasses(isOn) {
    // idempotent: chỉ add/remove khi cần
    $container.toggleClass('swiper mySwiper', isOn);
    $wrapper.toggleClass('swiper-wrapper', isOn);
    $wrapper.find(slideSel).toggleClass('swiper-slide', isOn);
  }

  function buildSwiper() {
    const isDesktop = window.innerWidth > 767;

    // Hủy instance cũ (nếu có)
    if (recruitSwiper) {
      recruitSwiper.destroy(true, true);
      recruitSwiper = null;
    }

    // Bật/tắt class theo chế độ
    applySwiperClasses(isDesktop);

    if (!isDesktop) return; // mobile: hiển thị dạng list, không dùng Swiper

    // Khởi tạo Swiper 1 lần, dùng đúng config bạn mong muốn
    recruitSwiper = new Swiper('.recruit_resreach_list_inner.mySwiper', {
      slidesPerView: 1,
      spaceBetween: parseRem(30),
      loop: false,
      navigation: {
        nextEl: '.recruit_resreach_button_next',
        prevEl: '.recruit_resreach_button_prev',
      },
      breakpoints: {
        768: { slidesPerView: 2, spaceBetween: parseRem(20) },
        991: { slidesPerView: 3, spaceBetween: parseRem(35) },
      },
      observer: true,
      observeParents: true,
    });
  }

  // --- Filter (AJAX) ---
  function debounce(fn, delay = 300) {
    let t; return function () { clearTimeout(t); t = setTimeout(() => fn.apply(this, arguments), delay); };
  }
  function renderLoading(on) { $('.recruit_list,.recruit_resreach_list_card').toggleClass('is-loading', !!on); }

  function doFilter() {
    const cat = $('#jobCatSelect').val() || '';
    const s   = $('#jobSearch').val() || '';
    renderLoading(true);

    $.ajax({
      type: 'POST',
      url: RecruitAjax.url,
      dataType: 'json',
      data: { action: 'recruit_filter', nonce: RecruitAjax.nonce, cat, s }
    })
    .done(function (res) {
      if (!res || !res.success) return;

      // Inject HTML (chỉ thay slide, không đụng wrapper)
      $wrapper.html(res.data.html);
    let tl = gsap.timeline({
        onStart: () => {
          $('.df_hide_onload').removeClass('df_hide_onload');
        },
      });
      new MasterTimeline({
        timeline: this.tl,
        allowMobile: true,
        tweenArr: [
          ...$('.recruit_resreach_list_card_item').map((idx, el) => {
            return new FadeIn({ el: $(el).get(0), delay: '<=.2', isDisableRevert: true });
          }),
        ]
      });
      // Re-init Swiper với cùng cấu hình
      buildSwiper();
    })
    .fail(function (xhr) { console.warn('Filter AJAX error:', xhr && xhr.responseText); })
    .always(function () { renderLoading(false); });
  }

  // Events
  $('#jobCatSelect').on('change', doFilter);
  $('#jobSearchForm').on('submit', function (e) { e.preventDefault(); doFilter(); });
  $('#jobSearch').on('input', debounce(doFilter, 350));
  $(window).on('resize', debounce(buildSwiper, 200));

  // First run
  buildSwiper();
  function recruitActive() {
    if (viewport.w < 992) {
      $('.recruit_active_inner').addClass('swiper');
      $('.recruit_active_list_item').addClass('swiper-slide');
      $('.recruit_active_list').addClass('swiper-wrapper');
      var swiper1 = new Swiper(".recruit_active_inner", {
        slidesPerView: 1.2,
        spaceBetween: parseRem(20),
        loop: false,
        pagination: {
        el: ".swiper-pagination-active",
        clickable: true,
      }, 
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
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

  function recruitForm() {
    $(".recruit_resreach_list_card_item_link").on("click", function (e) {
      e.stopPropagation();
      $(".recruit__opportunity__form").addClass("active");
    });
    $(".recruit__opportunity__form__close").on("click", function (e) {
      e.stopPropagation();
      $(".recruit__opportunity__form").removeClass("active");
    });
    // Ngăn không đóng khi click trong form
    $(".recruit__opportunity__form__inner").on("click", function (e) {
      e.stopPropagation();
    });

    // Click bên ngoài form => ẩn
    $(document).on("click", function (e) {
      // Nếu click KHÔNG nằm trong .recruit__opportunity__form__inner
      if (!e.target.closest(".recruit__opportunity__form__inner")) {
        $(".recruit__opportunity__form").removeClass("active");
      }
    });
  }

  recruitForm()
  class BDSHero extends TriggerSetupHero {
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
          new FadeSplitText({ el: $('.recruit_hero_txt').get(0), onMask: false }),
          new FadeIn({ el: $('.recruit_resreach_top ').get(0), }),
          ...$('.recruit_resreach_list_card_item').map((idx, el) => {
            return new FadeIn({ el: $(el).get(0), delay: '<=.2', isDisableRevert: true });
          }),
          new FadeIn({ el: $('.recruit_resreach_button ').get(0), delay: '<=.4' }),
        ]
      });
      new MasterTimeline({
        triggerInit: '.estate_content',
        scrollTrigger: { trigger: '.estate_intro_txt_des ', start: 'top 85%' },
        tweenArr: [
          ...$('.estate_intro_txt_des p ').map((idx, el) => {
            return new FadeIn({ el: $(el), delay: '<=.2' });
          })
        ]
      });
    }
    play() {
      this.tl.play();
    }
  }
  const bdsHero = new BDSHero();
  bdsHero.trigger();
  class RecruitCult extends TriggerSetup {
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
          start: 'top 55%',
          once: true
        },
        onComplete: () => {
          $('.recruit_culture .img_will_hover').addClass('hover_scale');
        }
      });
      new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          new ScaleInset({ el: $('.recruit_culture_img').get(0), delay: '<=0.2' }),
          new FadeSplitText({ el: $('.recruit_culture_info_title').get(0), onMask: false }),
          ...$('.recruit_culture_info_des p').map((idx, el) => {
            return new FadeIn({ el: $(el).get(0), delay: '<=0.2' });
          }),
        ]
      });
    }
  }
  const recruitCult = new RecruitCult('.recruit_culture');
  recruitCult.trigger();
  class RecruitActivity extends TriggerSetup {
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
          start: 'top 55%',
          once: true
        },
        onComplete: () => {
          $('.recruit_active_list_item .img_will_hover').addClass('hover_scale');
        }
      });
      new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          new FadeSplitText({ el: $('.recruit_active_title').get(0), onMask: false }),
          ...$('.recruit_active_list_item').map((idx, el) => {
            return [
              new ScaleInset({ el: $(el).find('.recruit_active_list_item_img').get(0), delay: '<=.2' }),
              new FadeSplitText({ el: $(el).find('.recruit_active_list_item_txt').get(0), onMask: true, delay: '<=.2' }),
            ]
          }),
        ]
      });
    }
  }
  const recruitActivity = new RecruitActivity('.recruit_active');
  recruitActivity.trigger();
  class RecruiWhy extends TriggerSetup {
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
          start: 'top 55%',
          once: true
        }
      });
      new MasterTimeline({
        timeline: tl,
        triggerInit: this.triggerEl,
        tweenArr: [
          new FadeSplitText({ el: $('.recruit_content_title').get(0), onMask: false }),
        ]
      });
      $('.recruit_content_item').each((idx, el) => {
        let itemTl = gsap.timeline({
          scrollTrigger: {
            trigger: $(el),
            start: 'top 55%',
            once: true
          },
          onComplete: () => {
            $(el).find('.img_will_hover').addClass('hover_scale');
          }
        });
        new MasterTimeline({
          timeline: itemTl,
          triggerInit: this.triggerEl,
          tweenArr: [
            new ScaleInset({ el: $(el).find('.recruit_content_item_img').get(0), delay: '<=.2' }),
            new FadeSplitText({ el: $(el).find('.recruit_content_item_info_title').get(0), onMask: true, delay: '<=.2' }),
            ...$(el).find('.recruit_content_item_info_des p').map((idx, desEl) => {
              return new FadeIn({ el: $(desEl), delay: '<=.2' });
            }),
          ]
        });
      });
    }
  }
  const recruitWhy = new RecruiWhy('.recruit_content');
  recruitWhy.trigger();
}
window.onload = mainScript;