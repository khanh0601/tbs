<?php
/**
 * Template Name: Liên hệ
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
wp_enqueue_style('lien-he', get_template_directory_uri() . '/css/lien-he.css', [], SITE_VERSION, 'all');
?>
<section class="contact_hero">
      <div class="contact_hero_overlay mobile"></div>
      <div class="contact_hero_img img_full">
        <img src="<?= get_template_directory_uri(); ?>/img/contact-hero.webp" alt="" />
      </div>
      <div class="contact_hero_txt txt_uppercase txt_55">liên hệ</div>
    </section>
    <section class="contact_content">
      <div class="kl_container">
        <div class="contact_content_map">
          <iframe
            src="https://www.google.com/maps?q=5A+Xa+lộ+Xuyên+Á,+An+Bình,+Dĩ+An,+Bình+Dương&output=embed"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          >
          </iframe>
          <div class="contact_content_map_address">
            <div class="contact_content_map_address_title heading txt_30 txt_uppercase txt_title_color">Văn phòng bình dương</div>
            <div class="contact_content_map_address_des txt_17">5A Xa lộ Xuyên Á, P. An Bình, Thành phố Dĩ An, Tỉnh Bình Dương</div>
            <div class="contact_content_map_address_des txt_17">T: (84 28) 37 241 241</div>
            <div class="contact_content_map_address_des txt_17">F: (84 28) 38 960 223</div>
            <div class="contact_content_map_address_des txt_17">E: info@TBSgroup.vn</div>
          </div>
        </div>
        <div class="contact_content_form">
            <div class="contact_content_form_title txt_title_color txt_30 txt_uppercase heading txt_center">đăng ký</div>
            <div class="contact_content_form_input">
                <div class="contact_content_form_input_inner kl_grid">
                    <input type="text" name="name" placeholder="Họ và tên" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="phone" placeholder="Số điện thoại" required>
                </div>
                <div class="contact_content_form_input_inner">
                    <textarea name="message" placeholder="Nội dung" rows="5" required></textarea>
                </div>
                    <button class="contact_content_form_input_submit txt_20 txt_bold" type="submit" class="btn-submit">GỬI</button>
            </div>
        </div>
      </div>
    </section>
<?php 
wp_enqueue_script('lien-he', get_template_directory_uri() . '/js/lien-he.js', array('global-js'), SITE_VERSION, true);
get_footer(); ?>
