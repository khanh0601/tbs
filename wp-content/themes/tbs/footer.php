<?php wp_footer(); ?>
<?= tr_options_field('tr_theme_options.script_footer'); ?>
<?php
$logo = wp_get_attachment_url(tr_options_field('tr_theme_options.logo'));
$address_main = tr_options_field('tr_theme_options.address_main');
$address_nam = tr_options_field('tr_theme_options.address_nam');
$address_main_en = tr_options_field('tr_theme_options.address_main_en');
$address_nam_en = tr_options_field('tr_theme_options.address_nam_en');
$address_japan_en = tr_options_field('tr_theme_options.address_japan_en');
$phone = tr_options_field('tr_theme_options.phone');
$email = tr_options_field('tr_theme_options.email');
$linkedin = tr_options_field('tr_theme_options.linkedin');
$facebook = tr_options_field('tr_theme_options.facebook');
$menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['primary'] ?? '');

?>
<footer class="footer">
  <div class="kl_container">
    <div class="footer_content">
      <div class="footer_content_location">
        <div class="footer_content_location_title txt_20 txt_bold txt_uppercase">Văn phòng trụ sở chính</div>
        <div class="footer_content_location_inner">
          <div class="footer_content_location_icon img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/footer_icon_location.svg" alt="">
          </div>
          <div class="footer_content_location_txt txt_18">5A Xa lộ Xuyên Á, P. An Bình, TP. Dĩ An, Tỉnh Bình Dương</div>
        </div>
        <div class="footer_content_location_inner">
          <div class="footer_content_location_icon img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/footer_icon_tel.svg" alt="">
          </div>
          <div class="footer_content_location_txt txt_18">(84 28) 37 241 241</div>
        </div>
        <div class="footer_content_location_inner">
          <div class="footer_content_location_icon img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/footer_icon_list.svg" alt="">
          </div>
          <div class="footer_content_location_txt txt_18">(84 28) 38 960 223</div>
        </div>
        <div class="footer_content_location_inner">
          <div class="footer_content_location_icon img_full">
            <img src="<?= get_template_directory_uri(); ?>/img/footer_icon_mail.svg" alt="">
          </div>
          <div class="footer_content_location_txt txt_18">info@tbsgroup.vn</div>
        </div>
      </div>
      <?php
$locations = get_nav_menu_locations();
$menu_id   = isset($locations['footer']) ? (int) $locations['footer'] : 0;

if ($menu_id) {
  $items = wp_get_nav_menu_items($menu_id, ['update_post_term_cache' => false]) ?: [];
  usort($items, fn($a, $b) => $a->menu_order <=> $b->menu_order);

  $tops = []; $children = [];
  foreach ($items as $it) {
    $pid = (int) $it->menu_item_parent;
    if ($pid === 0) $tops[] = $it; else $children[$pid][] = $it;
  }

  $icon_arrow = get_template_directory_uri() . '/img/footer_icon_arrow.svg';
  ?>
  <div class="footer_content_menu">
    <?php foreach ($tops as $parent):
      $title = apply_filters('the_title', $parent->title, $parent->ID);
      $url   = !empty($parent->url) ? $parent->url : '#';
      $has_children = !empty($children[$parent->ID]);
    ?>
      <div class="footer_content_menu_item">
        <div class="footer_content_menu_item_icon img_full">
          <img src="<?= esc_url($icon_arrow); ?>" alt="">
        </div>

        <?php if (!$has_children): ?>
          <!-- KHÔNG có submenu => là link tới chính nó -->
          <a href="<?= esc_url($url); ?>" class="footer_content_menu_item_link txt_uppercase txt_20 txt_bold">
            <?= esc_html($title); ?>
          </a>
        <?php else: ?>
          <!-- CÓ submenu => không link, hiển thị text -->
          <div class="footer_content_menu_item_link txt_uppercase txt_20 txt_bold">
            <?= esc_html($title); ?>
          </div>

          <div class="footer_content_menu_item_child">
            <?php foreach ($children[$parent->ID] as $child):
              $ctitle = apply_filters('the_title', $child->title, $child->ID);
              $curl   = !empty($child->url) ? $child->url : '#';
            ?>
              <a href="<?= esc_url($curl); ?>" class="footer_content_menu_item_link txt_17">
                <?= esc_html($ctitle); ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
  <?php
}
?>

      <div class="footer_content_contact">
        <div class="footer_content_contact_title txt_20 txt_bold txt_uppercase">Nhận thông tin từ chúng tôi</div>
        <div class="footer_content_contact_form">
          <input type="email" name="email" placeholder="Email" required>
          <button class="footer_content_contact_form_submit txt_20 txt_bold txt_uppercase" type="submit">gửi</button>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bg img_full">
    <img src="<?= get_template_directory_uri(); ?>/img/footer-bg-logo.png" alt="">
  </div>
  <div class="footer_copyright txt_17">© 2025 TBS Group. All Rights Reserved. Maximize Online Power by <span class="txt_bold"> THEMAX </span></div>
</footer>
<section class="btn_social">
  <a href="#" class="btn_social_icon img_full">
    <img src="<?= get_template_directory_uri(); ?>/img/icon_tel.svg" alt="">
  </a>
  <a href="#" class="btn_social_icon img_full">
    <img src="<?= get_template_directory_uri(); ?>/img/icon_yt.svg" alt="">
  </a>
  <a href="#" class="btn_social_icon img_full">
    <img src="<?= get_template_directory_uri(); ?>/img/icon_zalo.svg" alt="">
  </a>
  <a href="#" class="btn_social_icon img_full">
    <img src="<?= get_template_directory_uri(); ?>/img/icon_facebook.svg" alt="">
  </a>
</section>
</body>

</html>