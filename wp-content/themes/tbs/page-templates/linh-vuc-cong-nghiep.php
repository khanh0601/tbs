<?php
/**
 * Template Name: Lĩnh vực công nghiệp
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('linh-vuc-cong-nghiep-style', get_template_directory_uri() . '/css/linh-vuc-cong-nghiep.css', [], SITE_VERSION, 'all');
get_header();
?>
<section class="industrial_hero">
      <div class="industrial_hero_inner">
        <div class="industrial_hero_img img_full">
          <img src="<?= get_template_directory_uri(); ?>/img/congnghiep-hero.webp" alt="" />
        </div>
        <h1 class="industrial_hero_title txt_55 heading">
          Sản xuất Công nghiệp
        </h1>
      </div>
    </section>
    <section class="industrial_intro">
      <div class="kl_container">
        <div class="industrial_intro_txt">
          <div class="industrial_intro_txt_logo img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/logo_industrial.png" alt="" />
          </div>
          <div class="industrial_intro_txt_des txt_20 txt_justify">
            Được thành lập từ năm 1989, TBS Group hiện nay là một trong những
            công ty sản xuất công nghiệp hàng đầu tại Việt Nam với 3 trụ cột
            chính là: Giày - Đế - Túi xách, hệ thống sản xuất trải dài Bắc vào
            Nam (từ Thái Bình, Đà Nẵng, Hội An, Bình Dương, Bình Phước, Kiên
            Giang, An Giang và Trà Vinh và Indonesia). Ngoài văn phòng điều hành
            tại Dĩ An, Bình Dương, TBS Group còn có các văn phòng đại diện tại
            Hongkong, văn phòng sourcing tại Đông Quảng- Trung Quốc.
          </div>
        </div>
        <div class="industrial_swiper_wrap">
          <div class="swiper mySwiper">
            <div class="industrial_intro_slide swiper-wrapper">
              <div class="industrial_intro_slide_item swiper-slide">
                <div class="industrial_intro_slide_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/factory1.webp" alt="" />
                </div>
                <div class="industrial_intro_slide_item_txt txt_20">
                  nhà máy Mỹ Phong
                </div>
              </div>

              <div class="industrial_intro_slide_item swiper-slide">
                <div class="industrial_intro_slide_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/factory2.webp" alt="" />
                </div>
                <div class="industrial_intro_slide_item_txt txt_20">
                  Nhà Máy Túi Xách Thoại Sơn
                </div>
              </div>

              <div class="industrial_intro_slide_item swiper-slide">
                <div class="industrial_intro_slide_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/factory3.webp" alt="" />
                </div>
                <div class="industrial_intro_slide_item_txt txt_20">
                  Nhà Máy SX Giày TBS An Giang
                </div>
              </div>

              <div class="industrial_intro_slide_item swiper-slide">
                <div class="industrial_intro_slide_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/factory4.webp" alt="" />
                </div>
                <div class="industrial_intro_slide_item_txt txt_20">
                  Nhà máy TBS Sông Trà
                </div>
              </div>
              <div class="industrial_intro_slide_item swiper-slide">
                <div class="industrial_intro_slide_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/factory1.webp" alt="" />
                </div>
                <div class="industrial_intro_slide_item_txt txt_20">
                  nhà máy Mỹ Phong
                </div>
              </div>
            </div>
          </div>
          <div class="industrial_button">
            <div class="button_swiper_prev button_swiper_item img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/icon_pre.svg" alt="" />
            </div>
            <div class="button_swiper_next button_swiper_item img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/icon_next.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="industrial_product">
      <div class="kl_container">
        <div class="industrial_product_inner kl_grid">
          <div class="industrial_product_img img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/shoes.webp" alt="" />
          </div>
          <div class="industrial_product_info bg_line">
            <h2
              class="industrial_product_info_name txt_title_color txt_55 heading"
            >
              GIÀY
          </h2>
            <div class="industrial_product_info_title heading txt_35">
              60 triệu đôi
            </div>
            <div class="industrial_product_info_des txt_17">
              Công suất: / 1 năm
            </div>
            <div class="industrial_product_info_title heading txt_35">
              #1 toàn cầu
            </div>
            <div class="industrial_product_info_des txt_17">
              Xếp <span class="txt_bold">thứ 1 toàn cầu</span> về quy mô sản
              xuất của khách hàng Decathlon và <br /><span class="txt_bold"
                >top 3</span
              >
              của khách hàng Skechers, Wolverine.
            </div>
            <div class="industrial_product_info_title heading txt_35">
              Sản phẩm
            </div>
            <div class="industrial_product_info_des txt_17">
              Hiking Shoes, Waterproof Shoes, Injection, Sandals, Kids shoes,
              Running…
            </div>
          </div>
        </div>
        <div class="industrial_product_inner bag kl_grid">
          <div class="industrial_product_info bag bg_line">
            <h2
              class="industrial_product_info_name txt_title_color txt_55 heading"
            >
              Túi
          </h2>
            <div class="industrial_product_info_title heading txt_35">
              10 triệu túi da
            </div>
            <div class="industrial_product_info_des txt_17">
              Công suất: 10 triệu túi da/năm và 20 ba lô/năm
            </div>
            <div class="industrial_product_info_title heading txt_35">
              # 1 Việt Nam
            </div>
            <div class="industrial_product_info_des txt_17">
              Xếp thứ 1 nhà cung cấp tại Việt Nam cho thương hiệu Coach, Kate
              Spade và Titliest.
            </div>
            <div class="industrial_product_info_title heading txt_35">
              Nhà máy sản xuất
            </div>
            <div class="industrial_product_info_des txt_17">
              Nhà máy sản xuất tại: Bình Dương, Thái Bình, An Giang, Kiên Giang
            </div>
            <div class="industrial_product_info_title heading txt_35">
              Sản phẩm
            </div>
            <div class="industrial_product_info_des txt_17">
              Các mặt hàng da (túi xách và ví), Ba lô, Túi Golf, Túi chống thấm
            </div>
          </div>
          <div class="industrial_product_img bag img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/bag.webp" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="industrial_figure">
      <div class="kl_container">
        <div class="industrial_figure_inner">
          <div class="industrial_figure_slide_wrap swiper">
            <div class="industrial_figure_slide swiper-wrapper">
              <div class="industrial_figure_slide_item swiper-slide">
                <div class="industrial_figure_slide_item_title txt_center heading tx txt_55">
                  35+
                </div>
                <div class="industrial_figure_slide_item_des txt_center txt_20">
                  năm kinh nghiệm
                </div>
              </div>
              <div class="industrial_figure_slide_item swiper-slide">
                <div class="industrial_figure_slide_item_title txt_center heading tx txt_55">
                  200+
                </div>
                <div class="industrial_figure_slide_item_des txt_center txt_20">
                  Quốc gia xuất khẩu đến
                </div>
              </div>
              <div class="industrial_figure_slide_item swiper-slide">
                <div class="industrial_figure_slide_item_title txt_center heading tx txt_55">
                  1.500.000 M2
                </div>
                <div class="industrial_figure_slide_item_des txt_center txt_20">
                  diện tích nhà xưởng
                </div>
              </div>
              <div class="industrial_figure_slide_item swiper-slide">
                <div class="industrial_figure_slide_item_title txt_center heading tx txt_55">
                  9
                </div>
                <div class="industrial_figure_slide_item_des txt_center txt_20">
                  tổ hợp
                </div>
              </div>
              <div class="industrial_figure_slide_item swiper-slide">
                <div class="industrial_figure_slide_item_title txt_center heading tx txt_55">
                  9
                </div>
                <div class="industrial_figure_slide_item_des txt_center txt_20">
                  tổ hợp
                </div>
              </div>
            </div>
          </div>
          <div class="industrial_figure_button">
            <div class="button_swiper_prev figure_button_swiper_item img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/icon_pre.svg" alt="" />
            </div>
            <div class="button_swiper_next figure_button_swiper_item img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/icon_next.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="industrial_location">
      <div class="industrial_location_inner">
        <div class="industrial_location_left">
          <div class="industrial_location_left_top_wrap">
            <div class="industrial_location_left_top">
                <div class="industrial_location_left_top_inner">
                <div class="industrial_location_left_top_title txt_70 heading">top 3</div>
                <div class="industrial_location_left_top_des txt_25 heading">sxcn thời trang</div>
                <div class="industrial_location_left_top_smalltitle heading txt_30 txt_title_color">việt nam</div>
              </div>
            </div>
            <div class="industrial_location_left_top">
              <div class="industrial_location_left_top_inner">
                <div class="industrial_location_left_top_smalltitle1 txt_title_color heading txt_30">Xuất khẩu đến</div>
                <div class="industrial_location_left_top_des1 txt_25 heading">hơn <span class="txt_70 heading">70</span>  quốc gia</div>
              </div>
            </div>
          </div>
          <div class="industrial_location_left_content">
            <div class="industrial_location_left_content_percent border1 title1 txt_40 heading">46 <span class="txt_30">%</span></div>
            <div class="industrial_location_left_content_inner">
              <div class="industrial_location_left_content_title heading txt_25 title1">Châu âu</div>
              <div class="industrial_location_left_content_des txt_17">Một trong những đơn vị đi đầu trong ngành sản xuất công nghiệp thời trang tại thị trường </div>
            </div>
          </div>
          <div class="industrial_location_left_content">
            <div class="industrial_location_left_content_percent border2 title2 txt_40 heading">40<span class="txt_30">%</span></div>
            <div class="industrial_location_left_content_inner">
              <div class="industrial_location_left_content_title heading txt_25 title2">Châu mỹ</div>
              <div class="industrial_location_left_content_des txt_17">Một trong những đơn vị đi đầu trong ngành sản xuất công nghiệp thời trang tại thị trường </div>
            </div>
          </div>
          <div class="industrial_location_left_content">
            <div class="industrial_location_left_content_percent border3 title3 txt_40 heading">14<span class="txt_30">%</span></div>
            <div class="industrial_location_left_content_inner">
              <div class="industrial_location_left_content_title heading txt_25 title3">Thị trường khác</div>
              <div class="industrial_location_left_content_des txt_17">Một trong những đơn vị đi đầu trong ngành sản xuất công nghiệp thời trang tại thị trường </div>
            </div>
          </div>
        </div>
        <div class="industrial_location_right">
          <div class="industrial_location_right_img img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/map.webp" alt="">
          </div>
          <div class="industrial_location_right_officer">
            <div class="industrial_location_right_officer_title">
              <div class="industrial_location_right_officer_title_inner txt_30 heading">Văn phòng đại diện</div>
            </div>
            <div class="industrial_location_right_officer_content">
              <div class="industrial_location_right_officer_content_inner">
                <div class="industrial_location_right_officer_content_item" >
                  <div class="industrial_location_right_officer_content_item_img img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon_location.svg" alt="">
                  </div>
                  <div class="industrial_location_right_officer_content_item_txt heading txt_25">Mỹ</div>
                </div>
                <div class="industrial_location_right_officer_content_item" >
                  <div class="industrial_location_right_officer_content_item_img img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon_location.svg" alt="">
                  </div>
                  <div class="industrial_location_right_officer_content_item_txt heading txt_25">Hồng kông</div>
                </div>
                <div class="industrial_location_right_officer_content_item" >
                  <div class="industrial_location_right_officer_content_item_img img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon_location.svg" alt="">
                  </div>
                  <div class="industrial_location_right_officer_content_item_txt heading txt_25">trung quốc</div>
                </div>
                <div class="industrial_location_right_officer_content_item" >
                  <div class="industrial_location_right_officer_content_item_img img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon_location.svg" alt="">
                  </div>
                  <div class="industrial_location_right_officer_content_item_txt heading txt_25">hàn quốc</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php 
wp_enqueue_script('linh-vuc-cong-nghiep', get_template_directory_uri() . '/js/linh-vuc-cong-nghiep.js',array('global-js'),SITE_VERSION,true);
get_footer(); 

?>