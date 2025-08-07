<?php

/**
 * Template Name: Tuyển dụng
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
wp_enqueue_style('tuyen-dung', get_template_directory_uri() . '/css/tuyen-dung.css', [], SITE_VERSION, 'all');
$pageID = get_queried_object_id();
?>
   <svg width="0" height="0" viewBox="0 0 20 20" class="svg_bg"  >
        <defs>
          <clipPath id="hexClipLarge" clipPathUnits="objectBoundingBox">
            <path
              d="M0.97663 0H0V1H0.73548C0.75023 1 0.7634 0.98662 0.76842 0.96654L0.99859 0.04532C1.00409 0.02327 0.99282 0 0.97663 0Z"
              fill="#D9D9D9"
            ></path>
          </clipPath>
          <clipPath id="hexClipLarge2" clipPathUnits="objectBoundingBox">
            <path
              d="M0.25913 0H1L0.999417 1H0.0233349C0.00711659 1 -0.00414672 0.976501 0.00145583 0.954353L0.237251 0.0222071C0.240626 0.00886479 0.24936 0 0.25913 0Z"
              fill="#D9D9D9"
            />
          </clipPath>
        </defs>
      </svg>
    <section class="recruit_hero">
        <div class="recruit_hero_img img_full">
            <img class="middle" src="<?= get_template_directory_uri(); ?>/img/recruit-hero.webp" alt="">
            <img class="mobile" src="<?= get_template_directory_uri(); ?>/img/recruit-hero-mobile.png" alt="">
        </div>
        <div class="recruit_hero_txt txt_uppercase txt_55">TUYỂN DỤNG</div>
    </section>
    <section class="recruit_resreach">
        <div class="kl_container">
            <div class="recruit_resreach_top">
                <div class="recruit_resreach_top_input">
                    <input type="text" placeholder="Tìm kiếm việc làm" >
                    <div class="recruit_resreach_top_input_icon img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_search.svg" alt="">
                    </div>  
                </div>
                <div class="recruit_resreach_top_list txt_17">
                    <select>
                        <option class="txt_17" disabled selected>DANH SÁCH BỘ PHẬN</option>
                        <option class="txt_17">Phòng Nhân Sự</option>
                        <option class="txt_17">Phòng Kế Toán</option>
                        <option class="txt_17">Phòng Kỹ Thuật</option>
                        <option class="txt_17">Phòng Marketing</option>
                    </select>
                    <div class="recruit_resreach_top_list_icon img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/arrow_down.svg" alt="">
                    </div>
                     <div class="recruit_resreach_top_list_icon2 img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_list.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="recruit_resreach_list">
                <div class="recruit_resreach_list_inner mySwiper">
                    <div class="recruit_resreach_list_card">
                        <div class="recruit_resreach_list_card_item">
                            <div class="recruit_resreach_list_card_item_title txt_bold txt_uppercase txt_17">Nhân viên kinh doanh</div>
                            <div class="recruit_resreach_list_card_item_info">
                                <div class="recruit_resreach_list_card_item_info_icon img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_location.svg" alt="">
                                </div>

                                <div class="recruit_resreach_list_card_item_info_location txt_17">Bình Dương</div>
                                <div class="recruit_resreach_list_card_item_info_time txt_17">30.04.2025</div>
                            </div>
                            <a href="#" class="recruit_resreach_list_card_item_link" >
                                <div class="recruit_resreach_list_card_item_link_txt txt_18 txt_uppercase">Ứng tuyển</div>
                                <div class="recruit_resreach_list_card_item_link_img img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_next.svg" alt="">
                                </div>
                            </a>

                        </div>
                         <div class="recruit_resreach_list_card_item">
                            <div class="recruit_resreach_list_card_item_title txt_bold txt_uppercase txt_17">Nhân viên kinh doanh</div>
                            <div class="recruit_resreach_list_card_item_info">
                                <div class="recruit_resreach_list_card_item_info_icon img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_location.svg" alt="">
                                </div>

                                <div class="recruit_resreach_list_card_item_info_location txt_17">Bình Dương</div>
                                <div class="recruit_resreach_list_card_item_info_time txt_17">30.04.2025</div>
                            </div>
                            <a href="#" class="recruit_resreach_list_card_item_link" >
                                <div class="recruit_resreach_list_card_item_link_txt txt_18 txt_uppercase">Ứng tuyển</div>
                                <div class="recruit_resreach_list_card_item_link_img img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_next.svg" alt="">
                                </div>
                            </a>

                        </div>
                         <div class="recruit_resreach_list_card_item">
                            <div class="recruit_resreach_list_card_item_title txt_bold txt_uppercase txt_17">Nhân viên kinh doanh</div>
                            <div class="recruit_resreach_list_card_item_info">
                                <div class="recruit_resreach_list_card_item_info_icon img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_location.svg" alt="">
                                </div>

                                <div class="recruit_resreach_list_card_item_info_location txt_17">Bình Dương</div>
                                <div class="recruit_resreach_list_card_item_info_time txt_17">30.04.2025</div>
                            </div>
                            <a href="#" class="recruit_resreach_list_card_item_link" >
                                <div class="recruit_resreach_list_card_item_link_txt txt_18 txt_uppercase">Ứng tuyển</div>
                                <div class="recruit_resreach_list_card_item_link_img img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_next.svg" alt="">
                                </div>
                            </a>

                        </div>
                         <div class="recruit_resreach_list_card_item">
                            <div class="recruit_resreach_list_card_item_title txt_bold txt_uppercase txt_17">Nhân viên kinh doanh</div>
                            <div class="recruit_resreach_list_card_item_info">
                                <div class="recruit_resreach_list_card_item_info_icon img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_location.svg" alt="">
                                </div>

                                <div class="recruit_resreach_list_card_item_info_location txt_17">Bình Dương</div>
                                <div class="recruit_resreach_list_card_item_info_time txt_17">30.04.2025</div>
                            </div>
                            <a href="#" class="recruit_resreach_list_card_item_link" >
                                <div class="recruit_resreach_list_card_item_link_txt txt_18 txt_uppercase">Ứng tuyển</div>
                                <div class="recruit_resreach_list_card_item_link_img img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_next.svg" alt="">
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="recruit_resreach_button middle">
                     <div class="recruit_resreach_button_prev recruit_resreach_button_item img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_pre.svg" alt="" />
                    </div>
                    <div class="recruit_resreach_button_next recruit_resreach_button_item img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_next.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recruit_culture">
        <div class="kl_container">
            <div class="recruit_culture_inner kl_grid">
                <div class="recruit_culture_info">
                    <div class="recruit_culture_info_title txt_uppercase heading txt_55">Văn hóa Doanh nghiệp</div>
                    <div class="recruit_culture_info_des txt_17 txt_justify">Văn hóa doanh nghiệp của TBS Group được xây dựng trên nền tảng giá trị cốt lõi. Tại TBS Group, chúng tôi khuyến khích sự sáng tạo và tinh thần chủ động trong mọi công việc, đồng thời luôn cam kết trách nhiệm với nhân viên, đối tác và cộng đồng. Tinh thần hợp tác và chia sẻ là yếu tố then chốt để xây dựng môi trường làm việc gắn kết, nơi mỗi cá nhân đều được phát huy tối đa năng lực của mình. Đặc biệt, TBS Group đặt mục tiêu phát triển bền vững làm kim chỉ nam, không chỉ trong hoạt động kinh doanh mà còn trong việc xây dựng văn hóa doanh nghiệp – nơi hội tụ sự tôn trọng, minh bạch và không ngừng hướng đến những giá trị tốt đẹp cho xã hội.</div>
                </div>
                <div class="recruit_culture_img img_full right_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/recruit1.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="recruit_active bg_line">
        <div class="kl_container">
            <div class="recruit_active_title txt_35 heading txt_uppercase txt_center">Một số hình ảnh hoạt động của TBS Group</div>
            <div class="recruit_active_inner">
                <div class="recruit_active_list kl_grid">
                    <div class="recruit_active_list_item">
                        <div class="recruit_active_list_item_img img_full">
                            <img src="<?= get_template_directory_uri(); ?>/img/recruit2.webp" alt="">
                        </div>
                        <div class="recruit_active_list_item_txt txt_24 txt_uppercase txt_center heading">Tặng học bổng cho con em CBCNV</div>
                    </div>
                    <div class="recruit_active_list_item">
                        <div class="recruit_active_list_item_img img_full">
                            <img src="<?= get_template_directory_uri(); ?>/img/recruit3.webp" alt="">
                        </div>
                        <div class="recruit_active_list_item_txt txt_24 txt_uppercase txt_center heading">Ngày Phụ nữ Việt Nam 20/10</div>
                    </div>
                    <div class="recruit_active_list_item">
                        <div class="recruit_active_list_item_img img_full">
                            <img src="<?= get_template_directory_uri(); ?>/img/recruit4.webp" alt="">
                        </div>
                        <div class="recruit_active_list_item_txt txt_24 txt_uppercase txt_center heading">Ngày Quốc tế Phụ nữ 8/3</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recruit_content">
        <div class="kl_container">
            <div class="recruit_content_title txt_uppercase txt_center heading txt_55">Vì sao bạn nên chọn TBSGroup?</div>
            <div class="recruit_content_item kl_grid">
                <div class="recruit_content_item_info left">
                    <div class="recruit_content_item_info_title heading txt_28 txt_uppercase">1. Triết lý nhân văn</div>
                    <div class="recruit_content_item_info_des txt_17 txt_justify"> <span class="txt_bold">Tin tưởng:</span> Chúng tôi luôn đặt niềm tin vào các tài năng, tôn trọng khác biệt, đề cao ý chí cầu tiến và tinh thần đồng đội.</div>
                    <div class="recruit_content_item_info_des txt_17 txt_justify"> <span class="txt_bold">Trợ lực:</span> Chúng tôi luôn ủng hộ đam mê và hỗ trợ các tài năng đó phát triển hòa theo sự phát triển của Tập đoàn.</div>
                    <div class="recruit_content_item_info_des txt_17 txt_justify"> <span class="txt_bold">Tự chủ:</span> Chúng tôi tạo ra môi trường năng động để mỗi cá nhân có thể phát triển bản thân tài năng cả về tâm và tầm.</div>
                </div>
                <div class="recruit_content_item_img right img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/recruit5.webp" alt="">
                </div>
                
            </div>
            <div class="recruit_content_item kl_grid">
                <div class="recruit_content_item_img left img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/recruit6.webp" alt="">
                </div>
                <div class="recruit_content_item_info right">
                    <div class="recruit_content_item_info_title heading txt_28 txt_uppercase">2.  Lộ trình thăng tiến rõ ràng</div>
                    <div class="recruit_content_item_info_des txt_17 txt_justify">TBS Group cam kết mang đến cho bạn một lộ trình phát triển sự nghiệp minh bạch và cụ thể. Chúng tôi luôn tạo điều kiện để bạn phát triển kỹ năng, nâng cao năng lực và đạt được những cột mốc quan trọng trong sự nghiệp.</div>
                </div>
                
            </div>
             <div class="recruit_content_item kl_grid">
                <div class="recruit_content_item_info left">
                    <div class="recruit_content_item_info_title heading txt_28 txt_uppercase">3. Chính sách lương, thưởng cạnh tranh</div>
                    <div class="recruit_content_item_info_des txt_17 txt_justify"> <span class="txt_bold">Chính sách lương, thưởng của TBS Group được đánh giá là cạnh tranh với thị trường và tương xứng với hiệu quả làm việc. Mỗi vị trí chức danh và nhóm nghề được quy định vai trò, chức năng, nhiệm vụ cụ thể và phân công rõ ràng nhằm đảm bảo đánh giá hiệu quả chính xác và ghi nhận xứng đáng.</div>
                </div>
                <div class="recruit_content_item_img right img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/recruit7.webp" alt="">
                </div>
                
            </div>
            <div class="recruit_content_item kl_grid">
                <div class="recruit_content_item_img left img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/recruit8.webp" alt="">
                </div>
                <div class="recruit_content_item_info right">
                    <div class="recruit_content_item_info_title heading txt_28 txt_uppercase">4. Chương trình đào tạo chuyên sâu</div>
                    <div class="recruit_content_item_info_des txt_17 txt_justify">Đào tạo và phát triển nhân viên là một trong những ưu tiên hàng đầu của chúng tôi. TBS Group thường xuyên hợp tác với các trường Đại học nhằm tổ chức các lớp đào tạo kỹ năng, chuyên môn và hướng đến lộ trình phát triển nghề nghiệp cho từng vị trí.</div>
                </div>
                
            </div>
             <div class="recruit_content_item kl_grid">
                <div class="recruit_content_item_info left">
                    <div class="recruit_content_item_info_title heading txt_28 txt_uppercase">5. Môi trường làm việc chuyên nghiệp</div>
                    <div class="recruit_content_item_info_des txt_17 txt_justify"> <span class="txt_bold">TBS Group tự hào về môi trường làm việc thân thiện, chuyên nghiệp, nơi bạn có thể học hỏi và phát triển trong một không gian đầy sáng tạo và năng động. Văn hóa doanh nghiệp của chúng tôi đề cao sự hợp tác, tôn trọng, đoàn kết, khách quan chia sẻ và cùng phát triển. </div>
                </div>
                <div class="recruit_content_item_img right img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/recruit9.webp" alt="">
                </div>
                
            </div>
            <div class="recruit_content_item kl_grid">
                <div class="recruit_content_item_img left img_full">
                    <img src="<?= get_template_directory_uri(); ?>/img/recruit10.webp" alt="">
                </div>
                <div class="recruit_content_item_info right">
                    <div class="recruit_content_item_info_title heading txt_28 txt_uppercase">6. Phúc lợi hấp dẫn</div>
                    <div class="recruit_content_item_info_des txt_17 txt_justify">Ngoài các chính sách lương, thưởng cạnh tranh, TBSGroup còn dành nhiều phúc lợi cho nhân viên nhờ hệ sinh thái đa dạng của chủ đầu tư như: mua nhà với giá ưu đãi, hỗ trợ thuê nhà giá thấp cho công nhân, hỗ trợ xe đưa rước hàng ngày, trợ cấp ăn trưa...</div>
                </div>
                
            </div>
        </div>
    </section>

<?php
wp_enqueue_script('tuyen-dung', get_template_directory_uri() . '/js/tuyen-dung.js', array('global-js'), SITE_VERSION, true);
get_footer();
?>