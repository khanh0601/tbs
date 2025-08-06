<?php
/**
 * Template Name: Lĩnh vực bất động sản
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('linh-vuc-bat-dong-san-style', get_template_directory_uri() . '/css/linh-vuc-bat-dong-san.css', [], SITE_VERSION, 'all');
get_header();

$pageID = get_queried_object_id();

// === Banner Chính ===
$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_image_mobile = wp_get_attachment_url(tr_posts_field('banner_image_mobile', $pageID));
$banner_title = tr_posts_field('banner_title', $pageID);

// === Giới thiệu ===
$intro_logo = wp_get_attachment_url(tr_posts_field('intro_logo', $pageID));
$intro_logo_mobile = wp_get_attachment_url(tr_posts_field('intro_logo_mobile', $pageID));
$intro_des = tr_posts_field('intro_des', $pageID);

// === Bất động sản công nghiệp ===
$industrial_content = wp_get_attachment_url(tr_posts_field('industrial_content', $pageID));
$industrial_title = tr_posts_field('industrial_title', $pageID);
$industrial_des_item = tr_posts_field('industrial_des_item', $pageID); // Mỗi item: ['industrial_des_item_des']

// === Bất động sản dân dụng ===
$residential_title = tr_posts_field('residential_title', $pageID);
$residential_des = tr_posts_field('residential_des', $pageID);
$residential_subtitle = tr_posts_field('residential_subtitle', $pageID);
$residential_des_item = tr_posts_field('residential_des_item', $pageID); // Mỗi item: ['residential_des_item_des']
$residential_image = wp_get_attachment_url(tr_posts_field('residential_image', $pageID));

// === Thương mại dịch vụ & Văn phòng cho thuê ===
$economic_image = wp_get_attachment_url(tr_posts_field('economic_image', $pageID));
$economic_title = tr_posts_field('economic_title', $pageID);
$economic_item = tr_posts_field('economic_item', $pageID); // Mỗi item: ['economic_item_des']

// === Nghỉ dưỡng & Khách sạn ===
$hotel_title = tr_posts_field('hotel_title', $pageID);
$hotel_des = tr_posts_field('hotel_des', $pageID); // Nested repeater
$hotel_image = wp_get_attachment_url(tr_posts_field('hotel_image', $pageID));

// === TBS Logistics ===
$logistics_logo = wp_get_attachment_url(tr_posts_field('logistics_logo', $pageID));
$logistics_des = tr_posts_field('logistics_des', $pageID);
$logistics_item = tr_posts_field('logistics_item', $pageID); // Mỗi item: ['logistics_item_title', 'logistics_item_des']
$logistics_image = wp_get_attachment_url(tr_posts_field('logistics_image', $pageID));
$logistics_experiance_item = tr_posts_field('logistics_experiance_item', $pageID); // Mỗi item: ['logistics_experiance_item_title', 'logistics_experiance_item_des']
?>
?>
<section class="estate_hero">
      <div class="estate_hero_img img_full">
        <img class="middle" src="<?php echo $banner_image ?>" alt="" />
        <img class="mobile" src="<?php echo $banner_image_mobile ?>" alt="" />
      </div>
      <h1 class="estate_hero_txt txt_uppercase heading txt_55">
       <?= wp_kses_post($banner_title) ?>
      </h1>
    </section>
    <section class="estate_content">
      <div class="kl_container">
        <div class="estate_intro_txt">
          <div class="estate_intro_txt_logo img_full">
            <img class="middle" src="<?php echo $intro_logo ?>" alt="" />
            <img class="mobile" src="<?php echo $intro_logo_mobile ?>" alt="" />
          </div>
          <div class="estate_intro_txt_des txt_20 txt_justify">
            <?= wp_kses_post($intro_des) ?>
          </div>
        </div>
        <div class="estate_content_inner kl_grid">
          <div class="estate_content_img img_full left_full">
            <img src="<?php echo $industrial_content ?>" alt="">
          </div>
          <div class="estate_content_info">
            <h2 class="estate_content_info_title txt_uppercase txt_55 txt_title_color heading"><?= wp_kses_post($industrial_title) ?></h2>
            <?php if (!empty($industrial_des_item)) : ?>
                <?php foreach ($industrial_des_item as $item): ?>
            <div class="estate_content_info_des des_spot txt_17 txt_justify"><?= esc_html($item['industrial_des_item_des']) ?></div>
            <?php endforeach; ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="kl_container bg_line">
        <div class="estate_content_inner kl_grid">
          <div class="estate_content_info1">
            <h2 class="estate_content_info_title txt_uppercase txt txt_55 txt_title_color heading"><?= wp_kses_post($residential_title) ?></h2>
            <?php if (!empty($industrial_des_item)) : ?>
                <?php foreach ($industrial_des_item as $item): ?>
            <div class="estate_content_info_des txt_17 txt_justify"><?= esc_html($item['industrial_des_item_des']) ?></div>
            <?php endforeach; ?>
              <?php endif; ?>
            <div class="estate_content_info_subtitle txt_uppercase txt_24 heading">Các dự án tiêu biểu: </div>
            <div class="estate_content_info_des des_spot txt_17 txt_justify">Khu đô thị Green Square (Dĩ An)</div>
            <div class="estate_content_info_des des_spot txt_17 txt_justify">Khu đô thị Hồ Gươm Xanh (Thuận An) </div>
          </div>
          <div class="estate_content_img1 right_full">
            <div class="estate_content_img1_inner swiper mySwiper">
              <div class="estate_content_img1_list swiper-wrapper">
                <div class="estate_content_img1_list_item img_full swiper-slide">
                  <img src="<?= get_template_directory_uri(); ?>/img/estate2.webp" alt="">
                </div>
                <div class="estate_content_img1_list_item img_full swiper-slide">
                  <img src="<?= get_template_directory_uri(); ?>/img/estate3.webp" alt="">
                </div>
              </div>
            </div>
            <div class="estate_button">
              <div class="estate_button_swiper_prev estate_button_swiper_item img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_grayprev.svg" alt="" />
              </div>
              <div class="estate_button_swiper_next estate_button_swiper_item img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_graynext.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kl_container">
        <div class="estate_content_inner kl_grid">
          <div class="estate_content_img img_full left_full">
            <img src="<?= get_template_directory_uri(); ?>/img/estate3.webp" alt="">
          </div>
          <div class="estate_content_info">
            <h2 class="estate_content_info_title txt_uppercase txt_55 txt_title_color heading">Thương mại Dịch vụ &<br class="tablet"> Văn phòng cho thuê</h2>
            <div class="estate_content_info_des txt_17 txt_justify">Với diện tích 64ha, mảng Bất động sản Thương mại Dịch vụ & Văn phòng cho thuê dự kiến sẽ cung cấp ra thị trường nhiều m2 văn phòng, diện tích thương mại đẳng cấp trong thời gian tới.</div>
            <div class="estate_content_info_des txt_17 txt_justify">Ngoài các diện tích thương mại dịch và văn phòng cho thuê, TBS Retail là nhà cung ứng ra thị trường các sản phẩm giày dép, túi xách cao cấp của 2 đối tác lớn Ecco và Cole Haan. Với quy mô hơn 40 cửa hàng trên toàn quốc, TBS Retail đã phân phối ra thị trường trên 300.000 sản phẩm giày thời trang từ khi thành lập.</div>
          </div>
        </div>
      </div>
      <div class="kl_container bg_line">
        <div class="estate_content_inner kl_grid">
          <div class="estate_content_info1 gap">
            <h2 class="estate_content_info_title txt_uppercase txt txt_55 txt_title_color heading">Nghỉ dưỡng & <br class="desktop">Khách sạn</h2>
            <div class="estate_content_info_subtitle txt_uppercase txt_24 heading">Mai House Sài Gòn:  </div>
            <div class="estate_content_info_des txt_17 txt_justify">Mai House Sài Gòn là khách sạn 5 sao nằm giữa trung tâm thành phố với 224 phòng nghỉ trang nhã mang phong cách Đông Dương.</div>
            <div class="estate_content_info_des txt_17 txt_justify">Trái tim của Mai House Sài Gòn chính là dàn đèn dài 11m được lấy cảm hứng từ sự uyển chuyển trong tà áo dài. Các ống đèn được thổi thủ công từ thủy tinh Murano nổi tiếng của nước Ý.</div>
            <div class="estate_content_info_subtitle txt_uppercase txt_24 heading">Sân golf Montgomerie Links:</div>
            <div class="estate_content_info_des txt_17 txt_justify">Tọa lạc lý tưởng giữa hai thành phố Đà Nẵng và Hội An của dùng duyên hải Miền Trung, Montgomerie Links là một sân golf đẳng cấp quốc tế được thiết kế bởi huyền thoại golf nổi tiếng Colin Montgomerie, người đã 8 lần vô địch European Order of Merit và là đội trưởng giải European Ryder Cup 2010. </div>
            <div class="estate_content_info_des txt_17 txt_justify">Montgomerie Links cũng được được trao giải Sân Golf tốt nhất Việt Nam năm 2018.</div>
          </div>
           <div class="estate_content_img1 right_full">
            <div class="estate_content_img1_inner mySwiper1 swiper">
              <div class="estate_content_img1_list swiper-wrapper">
                <div class="estate_content_img1_list_item img_full swiper-slide">
                  <img src="<?= get_template_directory_uri(); ?>/img/estate4.webp" alt="">
                </div>
                <div class="estate_content_img1_list_item img_full swiper-slide">
                  <img src="<?= get_template_directory_uri(); ?>/img/estate1.webp" alt="">
                </div>
              </div>
            </div>
            <div class="estate_button">
              <div class="estate_button1_swiper_prev estate_button_swiper_item img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_grayprev.svg" alt="" />
              </div>
              <div class="estate_button1_swiper_next estate_button_swiper_item img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_graynext.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="estate_logistics">
        <div class="estate_logistics_logo img_full">
          <img src="<?= get_template_directory_uri(); ?>/img/logo_tbs_logistics.png" alt="">
        </div>
        <div class="estate_logistics_des txt_17 txt_center">TBS Logistics cung cấp dịch vụ đa dạng và đầy đủ nhằm đáp ứng nhu cầu của khách hàng như: Kho bãi, Cảng cạn nối dài, Vận tải, Dịch vụ hải quan, Giao nhận quốc tế, Giải pháp chuỗi cung ứng.</div>
          <div class="estate_logistics_list">
            <div class="estate_logistics_list_item">
              <div class="estate_logistics_list_item_title heading txt_35 txt_center">514,000m2</div>
              <div class="estate_logistics_list_item_des txt_17 txt_center">Tổng diện tích kho bãi</div>
            </div>
            <div class="estate_logistics_list_item">
              <div class="estate_logistics_list_item_title heading txt_35 txt_center">20,000,000m3</div>
              <div class="estate_logistics_list_item_des txt_17 txt_center">Tổng sản lượng xuất nhập/năm</div>
            </div>
            <div class="estate_logistics_list_item">
              <div class="estate_logistics_list_item_title heading txt_35 txt_center">1,000,000m3</div>
              <div class="estate_logistics_list_item_des txt_17 txt_center">Tổng sức chứa kho bãi</div>
            </div>
          </div>
          <div class="estate_logistics_img img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/estate5.webp" alt="">
          </div>
          <div class="kl_container">
            <div class="estate_logistics_exper kl_grid">
              <div class="estate_logistics_exper_item item1">
                <div class="estate_logistics_exper_item_title txt_center heading txt_55">24+</div>
                <div class="estate_logistics_exper_item_des txt_20 txt_center">năm kinh nghiệm</div>
              </div>
              <div class="estate_logistics_exper_item item2">
                <div class="estate_logistics_exper_item_title txt_center heading txt_55">14+</div>
                <div class="estate_logistics_exper_item_des txt_20 txt_center">Dự án và tổ hợp công trình </div>
              </div>
              <div class="estate_logistics_exper_item item3">
                <div class="estate_logistics_exper_item_title txt_center heading txt_55">418 Ha</div>
                <div class="estate_logistics_exper_item_des txt_20 txt_center"> quỹ đất</div>
              </div>
            </div>
          </div>
    </section>
<?php 
wp_enqueue_script('linh-vuc-bat-dong-san', get_template_directory_uri() . '/js/linh-vuc-bat-dong-san.js',array('global-js'),SITE_VERSION,true);
get_footer(); 

?>