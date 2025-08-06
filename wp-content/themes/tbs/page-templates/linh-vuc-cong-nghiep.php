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

$pageID = get_queried_object_id(); // Lấy ID của trang hiện tại

$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_title = tr_posts_field('banner_title', $pageID);

// Giới thiệu
$intro_logo = wp_get_attachment_url(tr_posts_field('intro_logo', $pageID));
$intro_des = tr_posts_field('intro_des', $pageID);

// Nhà máy
$factory_items = tr_posts_field('factory_items', $pageID);
// Mỗi item: ['factory_img', 'factory_title']

// Sản phẩm
$product_img = wp_get_attachment_url(tr_posts_field('product_img', $pageID));
$product_title = tr_posts_field('product_title', $pageID);
$product_text_items = tr_posts_field('product_text_items', $pageID);

$product2_img = wp_get_attachment_url(tr_posts_field('product2_img', $pageID));
$product2_title = tr_posts_field('product2_title', $pageID);
$product2_text_items = tr_posts_field('product2_text_items', $pageID);
// Mỗi item: ['product_img', 'product_title', 'product_text_items' => [['product_subtitle', 'product_des']]]

// Số liệu
$figure_items = tr_posts_field('figure_items', $pageID);
// Mỗi item: ['figure_title', 'figure_des']

// Địa điểm văn phòng
$location_title_1 = tr_posts_field('location_title', $pageID);         // Lấy lần đầu
$location_des_1 = tr_posts_field('location_des', $pageID);             // Lấy lần đầu
$location_title_2 = tr_posts_field('location_title', $pageID, 1);      // Lần thứ 2
$location_des_2 = tr_posts_field('location_des', $pageID, 1);          // Lần thứ 2

$location_item1_percent = tr_posts_field('location_item1_percent', $pageID);         // Lấy lần đầu
$location_item1_title = tr_posts_field('location_item1_title', $pageID);
$location_item1_des = tr_posts_field('location_item1_des', $pageID);

$location_item2_percent = tr_posts_field('location_item2_percent', $pageID);         // Lấy lần đầu
$location_item2_title = tr_posts_field('location_item2_title', $pageID);
$location_item2_des = tr_posts_field('location_item2_des', $pageID);

$location_item3_percent = tr_posts_field('location_item3_percent', $pageID);         // Lấy lần đầu
$location_item3_title = tr_posts_field('location_item3_title', $pageID);
$location_item3_des = tr_posts_field('location_item3_des', $pageID);

$location_map_image = wp_get_attachment_url(tr_posts_field('location_map_image', $pageID));
$location_map_title = tr_posts_field('location_map_title', $pageID);
$location_map_item = tr_posts_field('location_map_item', $pageID); // ['location_map_item_name']
$location_map_icon = tr_posts_field('location_map_icon', $pageID); // ['location_map_item_name']
?>
<section class="industrial_hero">
      <div class="industrial_hero_inner">
        <div class="industrial_hero_img img_full">
          <img src="<?php echo $banner_image ?>" alt="" />
        </div>
        <h1 class="industrial_hero_title txt_55 heading">
          <?= wp_kses_post($banner_title) ?>
        </h1>
      </div>
    </section>
    <section class="industrial_intro">
      <div class="kl_container">
        <div class="industrial_intro_txt">
          <div class="industrial_intro_txt_logo img_full">
            <img src="<?php echo $intro_logo ?>" alt="" />
          </div>
          <div class="industrial_intro_txt_des txt_20 txt_justify">
            <?= wp_kses_post($intro_des) ?>
          </div>
        </div>
        <div class="industrial_swiper_wrap">
          <div class="swiper mySwiper">
            <div class="industrial_intro_slide swiper-wrapper">
              <?php if (!empty($factory_items)) : ?>
                <?php foreach ($factory_items as $item): ?>
              <div class="industrial_intro_slide_item swiper-slide">
                <div class="industrial_intro_slide_item_img img_full">
                  <img src="<?= esc_url(wp_get_attachment_url($item['factory_img'])) ?>" alt="" />
                </div>
                <div class="industrial_intro_slide_item_txt txt_20">
                  <?= esc_html($item['factory_title']) ?>
                </div>
              </div>
               <?php endforeach; ?>
              <?php endif; ?>
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
            <img src="<?php echo $product_img ?>" alt="" />
          </div>
          <div class="industrial_product_info bg_line">
            <h2
              class="industrial_product_info_name txt_title_color txt_55 heading"
            >
              <?= wp_kses_post($product_title) ?>
          </h2>
          <?php if (!empty($product_text_items)) : ?>
                <?php foreach ($product_text_items as $item): ?>
            <div class="industrial_product_info_title heading txt_35">
              <?= esc_html($item['product_subtitle']) ?>
            </div>
            <div class="industrial_product_info_des txt_17">
              <?= esc_html($item['product_des']) ?>
            </div>
             <?php endforeach; ?>
              <?php endif; ?>
          </div>
        </div>
        <div class="industrial_product_inner bag kl_grid">
          <div class="industrial_product_info bag bg_line">
            <h2
              class="industrial_product_info_name txt_title_color txt_55 heading"
            >
              <?= wp_kses_post($product2_title) ?>
          </h2>
          <?php if (!empty($product2_text_items)) : ?>
                <?php foreach ($product2_text_items as $item): ?>
            <div class="industrial_product_info_title heading txt_35">
              <?= esc_html($item['product2_subtitle']) ?>
            </div>
            <div class="industrial_product_info_des txt_17">
               <?= esc_html($item['product2_des']) ?>
            </div>
            <?php endforeach; ?>
              <?php endif; ?>
          </div>
          <div class="industrial_product_img bag img_full">
            <img src="<?php echo $product2_img ?>" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="industrial_figure">
      <div class="kl_container">
        <div class="industrial_figure_inner">
          <div class="industrial_figure_slide_wrap swiper">
            <div class="industrial_figure_slide swiper-wrapper">
               <?php if (!empty($figure_items)) : ?>
                <?php foreach ($figure_items as $item): ?>
              <div class="industrial_figure_slide_item swiper-slide">
                <div class="industrial_figure_slide_item_title txt_center heading tx txt_55">
                  <?= esc_html($item['figure_title']) ?>
                </div>
                <div class="industrial_figure_slide_item_des txt_center txt_20">
                  <?= esc_html($item['figure_des']) ?>
                </div>
              </div>
               <?php endforeach; ?>
              <?php endif; ?>
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
            <div class="industrial_location_left_content_percent border1 title1 txt_40 heading"><?= wp_kses_post($location_item1_percent) ?> <span class="txt_30">%</span></div>
            <div class="industrial_location_left_content_inner">
              <div class="industrial_location_left_content_title heading txt_25 title1"><?= wp_kses_post($location_item1_title) ?></div>
              <div class="industrial_location_left_content_des txt_17"><?= wp_kses_post($location_item1_des) ?></div>
            </div>
          </div>
          <div class="industrial_location_left_content">
            <div class="industrial_location_left_content_percent border2 title2 txt_40 heading"><?= wp_kses_post($location_item2_percent) ?><span class="txt_30">%</span></div>
            <div class="industrial_location_left_content_inner">
              <div class="industrial_location_left_content_title heading txt_25 title2"><?= wp_kses_post($location_item2_title) ?></div>
              <div class="industrial_location_left_content_des txt_17"><?= wp_kses_post($location_item2_des) ?></div>
            </div>
          </div>
          <div class="industrial_location_left_content">
            <div class="industrial_location_left_content_percent border3 title3 txt_40 heading"><?= wp_kses_post($location_item3_percent) ?><span class="txt_30">%</span></div>
            <div class="industrial_location_left_content_inner">
              <div class="industrial_location_left_content_title heading txt_25 title3"><?= wp_kses_post($location_item3_title) ?></div>
              <div class="industrial_location_left_content_des txt_17"><?= wp_kses_post($location_item3_des) ?></div>
            </div>
          </div>
        </div>
        <div class="industrial_location_right">
          <div class="industrial_location_right_img img_full">
            <img src="<?php echo $location_map_image ?>" alt="">
          </div>
          <div class="industrial_location_right_officer">
            <div class="industrial_location_right_officer_title">
              <div class="industrial_location_right_officer_title_inner txt_30 heading"><?= wp_kses_post($location_map_title) ?></div>
            </div>
            <div class="industrial_location_right_officer_content">
              <div class="industrial_location_right_officer_content_inner">
                 <?php if (!empty($location_map_item)) : ?>
                <?php foreach ($location_map_item as $item): ?>
                <div class="industrial_location_right_officer_content_item" >
                  <div class="industrial_location_right_officer_content_item_img img_full">
                    <img src="<?php echo $location_map_icon ?>" alt="">
                  </div>
                  <div class="industrial_location_right_officer_content_item_txt heading txt_25"> <?= esc_html($item['location_map_item_name']) ?></div>
                </div>
                 <?php endforeach; ?>
              <?php endif; ?>
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