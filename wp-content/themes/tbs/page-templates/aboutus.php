<?php

/**
 * Template Name: Giới thiệu
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css', [], filemtime(get_template_directory() . '<?= get_template_directory_uri(); ?>/css/non-homepage.css'), 'all');
$pageID = get_queried_object_id();
?>
<svg width="0" height="0" viewBox="0 0 20 20" class="svg_bg">
  <defs>
    <clipPath id="hexClipLarge" clipPathUnits="objectBoundingBox">
      <path
        d="M0.97663 0H0V1H0.73548C0.75023 1 0.7634 0.98662 0.76842 0.96654L0.99859 0.04532C1.00409 0.02327 0.99282 0 0.97663 0Z"
        fill="#D9D9D9"></path>
    </clipPath>
    <clipPath id="hexClipLarge2" clipPathUnits="objectBoundingBox">
      <path
        d="M0.25913 0H1L0.999417 1H0.0233349C0.00711659 1 -0.00414672 0.976501 0.00145583 0.954353L0.237251 0.0222071C0.240626 0.00886479 0.24936 0 0.25913 0Z"
        fill="#D9D9D9" />
    </clipPath>
  </defs>
</svg>
<section class="about_hero">
  <div class="about_hero_img img_full">
    <img src="<?= get_template_directory_uri(); ?>/img/about_hero.webp" alt="">
  </div>
  <div class="about_hero_txt">
    <div class="about_hero_txt_subtitle heading txt_28 txt_center">
      CÔNG TY ĐẦU TƯ
    </div>
    <h1 class="about_hero_txt_title txt_55 heading txt_center">
      QUỐC TẾ ĐA NGÀNH UY TÍN
    </h1>
    <div class="about_hero_txt_smalltitle heading txt_30 txt_center">
      MANG TẦM VÓC VÀ TRÍ TUỆ VIỆT NAM
    </div>
    <div class="about_hero_txt_des txt_20 font_tbs txt_center">
      Trong suốt hơn 30 năm hoạt động của mình, TBS Group đã khẳng định
      vai trò là công ty đầu tư đa ngành uy tín tại Việt Nam và trong
      khu vực đưa ngành công nghiệp Việt Nam ăn sâu vào chuỗi giá trị
      toàn cầu, nâng tầm trí tuệ và niềm tự hào dân tộc Việt.
    </div>
  </div>
</section>
<section class="about_content">
  <div class="about_content_top">
    <div class="kl_container kl_grid">
      <div class="about_content_top_txt">
        <div class="about_content_top_txt_des txt_justify txt_20">
          TBS Group là một trong những Tập đoàn đầu tư quốc tế đa ngành uy
          tín tại Việt Nam và trong khu vực, hoạt động trong các lĩnh vực
          chính như: Sản xuất công nghiệp, Đầu tư & Phát triển Bất động
          sản, Logistics, Thương mại và Dịch vụ.
        </div>
        <div class="about_content_top_txt_des txt_justify txt_20">
          Thành lập vào năm 1989 từ một nhà xưởng nhỏ, TBS Group hiện nay
          là một trong những tập đoàn hàng đầu Việt Nam trong lĩnh vực sản
          xuất công nghiệp thời trang, đặc biệt là giày dép và túi xách.
          Với hơn 30 năm phát triển, TBS đã xây dựng được uy tín vững mạnh
          trên thị trường quốc tế, hợp tác với nhiều thương hiệu lớn như
          Decathlon, Skechers, Coach và Tory Burch.
        </div>
        <div class="about_content_top_txt_des txt_justify txt_20">
          TBS Group không chỉ chú trọng vào sản xuất mà còn đầu tư mạnh mẽ
          vào nghiên cứu và phát triển (R&D) với hệ thống các trung tâm
          R&D hiện đại, giúp nâng cao chất lượng sản phẩm và đáp ứng nhu
          cầu đa dạng của khách hàng. Chúng tôi cam kết phát triển bền
          vững thông qua việc áp dụng công nghệ tiên tiến, giảm thiểu tác
          động đến môi trường và tạo ra giá trị cho cộng đồng.
        </div>
        <div class="about_content_top_txt_des txt_justify txt_20">
          Với đội ngũ nhân viên tài năng và nhiệt huyết, TBS Group hướng
          tới mục tiêu trở thành một trong những nhà sản xuất hàng đầu thế
          giới trong ngành công nghiệp thời trang, góp phần nâng cao vị
          thế của Việt Nam trên bản đồ thương mại quốc tế.
        </div>
      </div>
      <div class="about_content_top_img img_full">
        <img
          class="img_radius"
          src="<?= get_template_directory_uri(); ?>/img/about_img1.webp"
          alt="" />
      </div>
    </div>
  </div>
  <div class="about_content_sight bg_line">
    <div class="kl_container kl_grid about_content_sight_inner">
      <div class="about_content_sight_txt_title heading txt_55 txt_center_mb mobile">
        TẦM NHÌN
      </div>
      <div class="about_content_sight_img img_full">
        <img class="img_radius" src="<?= get_template_directory_uri(); ?>/img/about_img2.webp" alt="" />
      </div>
      <div class="about_content_sight_txt">
        <h2 class="about_content_sight_txt_title heading txt_55 middle">
          TẦM NHÌN
        </h2>
        <div class="about_content_sight_txt_des txt_17">
          Bằng khát vọng, ý chí quyết tâm, cùng với tinh thần không ngừng
          đổi mới sáng tạo của một đội ngũ vững mạnh và tầm nhìn xa về chiến
          lược của nhà lãnh đạo, TBS Group đang nỗ lực để trở thành công ty
          đầu tư đa ngành uy tín tại Việt Nam và trong khu vực, mang đẳng
          cấp quốc tế, thể hiện tầm vóc trí tuệ và niềm tự hào Việt Nam trên
          trên thế giới.
        </div>
      </div>
    </div>
  </div>
  <div class="about_content_sight">
    <div class="kl_container kl_grid">
      <div class="about_content_assign_txt">
        <h2
          class="about_content_sight_txt_title heading txt_center_mb txt_55">
          SỨ MỆNH
        </h2>
        <div class="about_content_assign_txt_des txt_17 txt_justify">
          Đầu tư, cung cấp các sản phẩm và dịch vụ góp phần giúp cho ngành
          công nghiệp Việt Nam tham gia sâu hơn vào chuỗi giá trị toàn cầu.
        </div>
        <div class="about_content_assign_txt_des txt_17 txt_justify">
          Luôn cải tiến, sáng tạo, đồng hành cùng phát triển lớn mạnh và
          chia sẻ lợi ích, gắn trách nhiệm doanh nghiệp với cộng đồng, xã
          hội và luôn mang đến sự tin tưởng, an tâm cho khách hàng, đối tác
          và nhân viên.
        </div>
      </div>
      <div class="about_content_assign_img img_full">
        <img class="img_radius" src="<?= get_template_directory_uri(); ?>/img/about_img3.webp" alt="" />
      </div>
    </div>
  </div>
</section>
<section class="about_value bg_line">
  <div class="kl_container">
    <h2
      class="about_value__title txt_55 heading txt_center txt_center_mb">
      GIÁ TRỊ CỐT LÕI
    </h2>
    <div
      class="about_value_smalltitle txt_28 heading txt_center txt_center_mb">
      LONG TRÒNG - CHÂN BỀN - MẮT SÁNG
    </div>
    <div class="value_swiper">
      <div class="about_value_wrap">
        <div class="about_value_item">
          <div class="about_value_item_img__wrap">
            <div class="about_value_item_img img_full">
              <img
                class="img_radius"
                src="<?= get_template_directory_uri(); ?>/img/icon_about1.svg"
                alt="" />
            </div>
          </div>
          <div class="about_value_item_title txt_bold txt_20 txt_center">
            LÒNG TRONG
          </div>
          <div class="about_value_item_des txt_17 txt_center">
            Luôn trung thực, chân thành trong mọi mối quan hệ và công việc
          </div>
        </div>
        <div class="about_value_item">
          <div class="about_value_item_img__wrap">
            <div class="about_value_item_img img_full">
              <img
                class="img_radius"
                src="<?= get_template_directory_uri(); ?>/img/icon_about2.svg"
                alt="" />
            </div>
          </div>
          <div class="about_value_item_title txt_bold txt_20 txt_center">
            CHÂN BỀN
          </div>
          <div class="about_value_item_des txt_17 txt_center">
            Kiên định, bền bỉ và quyết tâm vượt qua mọi thách thức khó
            khăn, hướng tới mục tiêu
          </div>
        </div>
        <div class="about_value_item">
          <div class="about_value_item_img__wrap">
            <div class="about_value_item_img img_full">
              <img
                class="img_radius"
                src="<?= get_template_directory_uri(); ?>/img/icon_eye.svg"
                alt="" />
            </div>
          </div>
          <div class="about_value_item_title txt_bold txt_20 txt_center">
            MẮT SÁNG
          </div>
          <div class="about_value_item_des txt_17 txt_center">
            Luôn đổi mới, sáng tạo trong công việc, từ đó tạo ra giá trị
            cho tập đoàn và cộng đồng.
          </div>
        </div>
      </div>
      <div class="swiper-pagination-value mobile"></div>
    </div>
    <div class="about_value_des heading txt_uppercase txt_20 txt_center txt_title_color">
      Ba phẩm chất này không chỉ định hình văn hóa doanh nghiệp của TBS
      Group mà còn góp phần tạo dựng uy tín và vị thế của tập đoàn trong
      ngành công nghiệp.
    </div>
  </div>
</section>
<section class="about_history">
  <h2
    class="about_history_title txt_title_color heading txt_55 txt_center">
    LỊCH SỬ HÌNH THÀNH
  </h2>
  <div class="about_history_des txt_center txt_17">
    TBS Group được thành lập năm 1989 bởi 3 người đồng đội xuất ngũ là ông
    Nguyễn Đức Thuấn, Cao Thanh Bích và Nguyễn Thanh Sơn. Xuất phát từ một
    xưởng may nhỏ ở Bình Dương, sau hơn 30 năm phát triển, TBS Group đã
    trở thành một trong những tập đoàn hàng đầu Việt Nam trong lĩnh vực
    sản xuất công nghiệp thời trang.
  </div>
  <div class="about_history_smalltitle txt_center txt_28 heading">
    Các cột mốc quan trọng
  </div>
  <div class="kl_container">
    <div class="about_history_swiper_wrap">
      <div class="about_history_swiper_wrap_bg"></div>
      <div class="about_history_swiper swiper">
        <!-- <div class="about_history_content_wrap"> -->
        <div class="about_history_content swiper-wrapper">
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div
                  class="about_history_content_item_title txt_17 txt_bold">
                  Khởi nghiệp
                </div>
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Xây nhà máy đầu tiên tại Bình Dương
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                1989
              </div>
              <div class="about_history_content_item_inner">
                <div class="about_history_content_item_img img_full">
                  <img src="<?= get_template_directory_uri(); ?>/img/history3.webp" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                  Khởi nghiệp với Vườn ươm giống Bạch Đàn
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="about_history_content_item__wrap swiper-slide">
                                <div class="about_history_content_item">
                                </div>
                            </div> -->
        </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
  <div class="about_history_img img_full">
    <img src="<?= get_template_directory_uri(); ?>/img/about_history.webp" alt="">
  </div>
</section>
<section class="about_expert bg_line">
  <div class="kl_container">
    <h2
      class="about_expert_title txt_center txt_55 txt_title_color heading">
      CÂU CHUYỆN THƯƠNG HIỆU
    </h2>
    <div class="about_expert_smalltitle txt_center heading txt_30">
      THẾ GIỚI LÀM ĐƯỢC, ẮT TA SẼ LÀM ĐƯỢC
    </div>
    <div class="about_expert_content kl_grid">
      <div class="about_expert_content_info">
        <div class="about_expert_content_info_des txt_justify txt_17">
          Với lòng tin vào tài trí và khả năng của người Việt Nam, hơn ba
          mươi năm qua, tôi và đồng đội đã gầy dựng, phát triển TBS Group
          và chứng minh tiềm năng của ngành công nghiệp nước nhà trên
          thương trường quốc tế
        </div>
        <div class="about_expert_content_info_des txt_justify txt_17">
          Tôi được sinh ra trong một gia đình làm nghề giáo ở Thái Bình.
          Ngày bé, nhìn thấy cảnh đất nước và quê hương gặp nhiều khó khăn
          vất vả, trong tôi luôn có một khao khát có thể làm gì đó giúp
          cho quê hương, đất nước mình trở nên giàu mạnh, sánh vai với các
          cường quốc năm châu.
        </div>
        <div class="about_expert_content_info_des txt_justify txt_17">
          Đến tuổi trưởng thành, vẫn mang trong mình những ý chí và khát
          vọng ngày bé, sau thời gian rèn luyện trong quân đội, tôi lại
          miệt mài đèn sách để chuẩn bị hành trang cho mình sau này gây
          dựng và giúp đỡ cho nền kinh tế nước nhà.
        </div>
        <div class="about_expert_content_info_des txt_justify txt_17">
          Ngày xuất ngũ, tôi cùng anh Bích, anh Sơn và đồng đội của mình
          bắt đầu “tấn công” vào mặt trận kinh tế với suy nghĩ và kế hoạch
          táo bạo là thành lập và phát triển công ty da giày, và “đứa con”
          ấy sau này đã trở thành một trong những công ty sản xuất lớn
          nhất Việt Nam, mang tầm quốc tế.
        </div>
        <div class="about_expert_content_info_des txt_justify txt_17">
           Tháng 9 năm 1992, nhà máy sản xuất mang tên Thái Bình Shoes đầu
          tiên được cấp phép hoạt động, chúng tôi vui mừng vì ước mơ của
          những nhà sáng lập như chúng tôi đang dần được hiện thực hoá.
          Với kinh nghiệm dày dạn, ý chí kiên định được tôi luyện trong
          môi trường quân đội đã tạo ra bước đệm vững chắc cho chúng tôi
          khi bắt tay vào xây dựng tập đoàn Thái Bình Shoes. Cùng đồng
          đội, đồng nghiệp, chúng tôi từng bước đưa TBS Group tiến gần hơn
          tới hoài bão đưa nền công nghiệp Việt Nam vươn xa trên trường
          quốc tế
        </div>
      </div>
      <div class="about_expert_content_img img_full right_full">
        <img src="<?= get_template_directory_uri(); ?>/img/about_img4.webp" alt="" />
      </div>
      <div
        class="about_expert_content_info_authen tablet txt_center txt_title_color txt_30">
        “Ông Nguyễn Đức Thuấn – Chủ tịch HĐQT TBS Group”
      </div>
    </div>
    <div class="about_expert_content kl_grid">
      <div class="about_expert_content_img2 img_full left_full">
        <img src="<?= get_template_directory_uri(); ?>/img/about_img5.webp" alt="" />
      </div>
      <div class="about_expert_content_info2">
        <div class="about_expert_content_info_des txt_justify txt_17">
          Mang theo lý tưởng của một doanh nghiệp yêu nước, chúng tôi đã
          dẫn dắt TBS Group đi lên vững chãi như hình ảnh cây tre quen
          thuộc của đất nước Việt Nam. Với sức sống mãnh liệt, luôn phát
          triển vững vàng và mạnh mẽ của cây tre nơi làng quê, được thổi
          hồn vào chính biểu tượng thương hiệu của công ty. Cây tre xanh
          mang hình ảnh đại diện cho niềm tự hào dân tộc vô bờ bến của tôi
          nói riêng và cả những thành viên đầy nhiệt huyết trong TBS Group
          nói chung.
        </div>
        <div class="about_expert_content_info_des txt_justify txt_17">
          Sau hơn 30 năm nỗ lực hoạt động, TBS Group đã thực hiện được
          nhiệm vụ tạo việc làm cho nhiều người có cuộc sống ổn định.
          Chúng tôi xem nguồn nhân lực là một niềm tự hào và hãnh diện của
          công ty, như một nguồn tài sản quý giá, là vũ khí lợi hại cho sự
          phát triển của doanh nghiệp nói riêng và cả ngành công nghiệp
          Việt Nam nói chung. Chúng tôi mong muốn khuyến khích và hỗ trợ
          đào tạo để khẳng định trí tuệ Việt trên trường quốc tế.
        </div>
        <div class="about_expert_content_info_des txt_justify txt_17">
          Bắt đầu từ một nhà máy nhỏ tại Bình Dương với vỏn vẹn một xưởng
          may, một xưởng gò, cho đến nay, đến nay TBS Group đã khẳng định
          vị thế một doanh nghiệp sản xuất tầm cỡ với những đối tác lớn
          như Skechers, Decathon, Wolverine trong ngành giày hay Coach,
          Lancaster, Tory Burch trong ngành túi xách, và Damco, APL, DHL,
          hay Geodis trong lĩnh vực logistics. Đây không chỉ là thành công
          của một cá nhân, một doanh nghiệp, mà là thành công cho ngành
          công nghiệp nước nhà.
        </div>
        <div class="about_expert_content_info_des txt_justify txt_17">
          Trên con đường phát triển lâu dài, với sự đồng hành và nhiệt
          huyết của một tập thể đoàn kết, TBS Group mạnh mẽ đi lên với
          ”lòng Trong, chân Bền, mắt Sáng” làm nền tảng, để liên tục mang
          lại mỏ vàng cho khách hàng, đồng thời giúp các ngành công nghiệp
          Việt Nam vươn lên tầm quốc tế. Hãy cùng chúng tôi chung sức,
          chung lòng, chung chí hướng xây dựng tương lai!
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about_archive">
  <div class="about_archive__inner">
    <div class="kl_container">
      <div
        class="about_archive_title txt_55 heading txt_title_color txt_center">
        THÀNH TỰU & GIẢI THƯỞNG
      </div>
      <div class="about_archive_des txt_17 txt_center">
        Những nỗ lực của TBSGroup trong những năm qua đã được các cơ quan,
        tổ chức ghi nhận bằng nhiều giải thưởng danh giá uy tín trong và
        ngoài nước
      </div>
    </div>
    <div class="mySwiper_wrap">
      <div class="swiper mySwiper">
        <div class="about_archive_wrap swiper-wrapper">
          <div class="about_archive_item swiper-slide">
            <div class="about_archive_item_img img_fullfill">
              <img src="<?= get_template_directory_uri(); ?>/img/cup1.png" alt="" />
            </div>
            <div class="about_archive_item_border"></div>
            <div
              class="about_archive_item_name txt_17 txt_bold txt_center">
              Huân chương Lao động Hạng Ba (1999)
            </div>
          </div>
          <div class="about_archive_item swiper-slide">
            <div class="about_archive_item_img img_fullfill">
              <img src="<?= get_template_directory_uri(); ?>/img/cup2.png" alt="" />
            </div>
            <div class="about_archive_item_border"></div>
            <div
              class="about_archive_item_name txt_17 txt_bold txt_center">
              Huân chương Lao động Hạng Nhì (2005)
            </div>
          </div>
          <div class="about_archive_item swiper-slide">
            <div class="about_archive_item_img img_fullfill">
              <img src="<?= get_template_directory_uri(); ?>/img/cup3.png" alt="" />
            </div>
            <div class="about_archive_item_border"></div>
            <div
              class="about_archive_item_name txt_17 txt_bold txt_center">
              Top 10 Doanh nghiệp bền vững CSI (VCCI - 2016,2017,2018)
            </div>
          </div>
          <div class="about_archive_item swiper-slide">
            <div class="about_archive_item_img img_fullfill">
              <img src="<?= get_template_directory_uri(); ?>/img/cup1.png" alt="" />
            </div>
            <div class="about_archive_item_border"></div>
            <div
              class="about_archive_item_name txt_17 txt_bold txt_center">
              -Top 5 Công ty xuất khẩu da giày và túi xách lớn nhất Việt
              Nam
            </div>
          </div>
          <div class="about_archive_item swiper-slide">
            <div class="about_archive_item_img img_fullfill">
              <img src="<?= get_template_directory_uri(); ?>/img/cup4.png" alt="" />
            </div>
            <div class="about_archive_item_border"></div>
            <div
              class="about_archive_item_name txt_17 txt_bold txt_center">
              Top 50 Doanh nghiệp tư nhân lớn nhất Việt Nam
            </div>
          </div>
          <div class="about_archive_item swiper-slide">
            <div class="about_archive_item_img img_fullfill">
              <img src="<?= get_template_directory_uri(); ?>/img/cup1.png" alt="" />
            </div>
            <div class="about_archive_item_border"></div>
            <div
              class="about_archive_item_name txt_17 txt_bold txt_center">
              Top 50 Doanh nghiệp tư nhân lợi nhuận tốt nhất Việt Nam
            </div>
          </div>
          <div class="about_archive_item swiper-slide">
            <div class="about_archive_item_img img_fullfill">
              <img src="<?= get_template_directory_uri(); ?>/img/cup1.png" alt="" />
            </div>
            <div class="about_archive_item_border"></div>
            <div
              class="about_archive_item_name txt_17 txt_bold txt_center">
              Huân chương Lao động Hạng Ba (1999)
            </div>
          </div>
        </div>
      </div>
      <div class="button_swiper">
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
<?php
wp_enqueue_script('about', get_template_directory_uri() . '/js/about.js', array('global-js'), SITE_VERSION, true);
get_footer(); ?>