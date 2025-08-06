<?php
/**
 * Template Name: Phát triển
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('phat-trien-style', get_template_directory_uri() . '/css/phat-trien.css', [], SITE_VERSION, 'all');
get_header();

$pageID = get_queried_object_id();

// === Banner Chính ===
$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_title = tr_posts_field('banner_title', $pageID);

// === Tầm nhìn ===
$sight_title = tr_posts_field('sight_title', $pageID);
$sight_des = tr_posts_field('sight_des', $pageID);
$sight_image = wp_get_attachment_url(tr_posts_field('sight_image', $pageID));

// === Sức khỏe & An toàn lao động ===
$safe_title = tr_posts_field('safe_title', $pageID);
$safe_item = tr_posts_field('safe_item', $pageID); // Array of ['safe_item_des']
$safe_image = wp_get_attachment_url(tr_posts_field('safe_image', $pageID));

// === Vì môi trường ===
$environment_title = tr_posts_field('environment_title', $pageID);
$environment_image = wp_get_attachment_url(tr_posts_field('environment_image', $pageID));
$environment_item = tr_posts_field('environment_item', $pageID); // Array of ['environment_item_des']
$environment_image_logo = wp_get_attachment_url(tr_posts_field('environment_image_logo', $pageID));

// === Dự án xanh ===
$project_item = tr_posts_field('project_item', $pageID);
// Mỗi item: ['project_item_image', 'project_item_title', 'project_item_des' => [['project_item_des_item']]]

// === Trách nhiệm xã hội ===
$response_title = tr_posts_field('response_title', $pageID);
$response_item_des = tr_posts_field('response_item_des', $pageID); // Array of ['response_item_des_des']
$response_image = wp_get_attachment_url(tr_posts_field('response_image', $pageID));
$response_item = tr_posts_field('response_item', $pageID); // Array of ['response_item_title', 'response_item_des']
?>
 <section class="development_hero">
        <div class="development_hero_img img_full">
          <img src="<?= get_template_directory_uri(); ?>/img/phattrien_hero.webp" alt="">
        </div>
        <h1 class="development_hero_txt heading txt_55">PHÁT TRIỂN BỀN VỮNG</h1>
    </section>
    <section class="development_sight">
      <div class="kl_container">
        <h2 class="development_sight_title txt_title_color txt_uppercase heading txt_55 txt_center">Tầm nhìn phát triển bền vững</h2>
        <div class="development_sight_des txt_17">TBS Group, một công ty đầu tư đa ngành, định hướng phát triển bền vững làm nền tảng trong mọi chiến lược và hoạt động kinh doanh. Với tầm nhìn dài hạn, TBS Group cam kết thúc đẩy sự cân bằng giữa tăng trưởng kinh tế, bảo vệ môi trường và trách nhiệm xã hội. Trong mỗi lĩnh vực đầu tư – từ sản xuất, thương mại dịch vụ, logistics đến bất động sản – TBS Group đều áp dụng các tiêu chuẩn của các cơ quan quản lý về hiệu quả năng lượng, quản lý chất thải và phát triển nguồn nhân lực bền vững. Thông qua những nỗ lực này, TBS Group mong muốn không chỉ xây dựng một hệ sinh thái kinh doanh vững mạnh, mà còn đóng góp tích cực vào cộng đồng và tạo ra giá trị lâu dài cho xã hội.</div>
        <div class="development_sight_img img_full">
          <img src="<?= get_template_directory_uri(); ?>/img/phattrien_tamnhin.webp" alt="">
        </div>
      </div>
    </section>
    <section class="development_safe bg_line">
      <div class="kl_container">
        <div class="development_safe_inner kl_grid">
          <div class="development_safe_info">
            <div class="development_safe_info_title_wrap">
              <h2 class="development_safe_info_title heading txt_title_color txt_uppercase txt_55">Sức khỏe & </h2>
              <h2 class="development_safe_info_title right heading txt_title_color txt_uppercase txt_55">An toàn lao động </h2>
            </div>
            <div class="development_safe_info_des txt_justify txt_17">Sức khoẻ và sự an toàn của nhân viên công ty và đối tác là một trong những vấn đề quan trọng và được quan tâm nhất của TBS Group.</div>
            <div class="development_safe_info_des txt_justify txt_17">TBS Group thường xuyên tổ chức đào tạo, huấn luyện và huấn luyện lại về an toàn lao động cho nhân viên, đồng thời đề ra những quy định làm việc để bảo đảm an toàn ở mức độ cao nhất. Ngoài ra, chúng tôi còn tổ chức bếp ăn tập thể và xây dựng siêu thị nhỏ, cũng như phòng khám bệnh khẩn cấp để bảo đảm an toàn vệ sinh và sức khoẻ cho tất cả các nhân viên làm việc tại công ty. TBS Group cũng đảm bảo các hoạt động của mình theo nguyên tắc giảm thiểu các tác động xấu đến môi trường.</div>
          </div>
          <div class="development_safe_img img_full right_full">
            <img src="<?= get_template_directory_uri(); ?>/img/phattrien_antoan.webp" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="development_environment">
      <div class="kl_container">
        <div class="development_environment_content kl_grid">
          <h2 class="development_environment_title desktop heading txt_title_color txt_uppercase txt_55 txt_center">Vì môi trường</h2>
          <div class="development_environment_img img_full left_full">
            <img src="<?= get_template_directory_uri(); ?>/img/phattrien_moitruong.webp" alt="">
          </div>
          <div class="development_environment_info">
          <h2 class="development_environment_title heading txt_title_color txt_uppercase txt_55 txt_center tablet">Vì môi trường</h2>
            <div class="development_environment_info_des txt_17 txt_justify">Với định hướng “phát triển bền vững” làm kim chỉ nam, TBS Group không ngừng chú trọng đến việc thiết kế và xây dựng các khu nhà xưởng với cảnh quan xanh mát, hài hòa với thiên nhiên, đảm bảo một môi trường làm việc trong lành, an toàn cho cả nhân viên và cộng đồng xung quanh.</div>
            <div class="development_environment_info_des txt_17 txt_justify">TBS Group cũng tuân thủ nghiêm ngặt Luật Bảo vệ Môi trường thông qua việc được cấp sổ đăng ký chủ nguồn thải chất thải nguy hại, tiến hành các đánh giá tác động môi trường, và báo cáo giám sát định kỳ. Đặc biệt, doanh nghiệp còn hợp tác với các đơn vị chuyên nghiệp trong việc vận chuyển và xử lý chất thải để loại bỏ hoàn toàn các yếu tố gây hại trong quá trình sản xuất.</div>
            <div class="development_environment_info_des txt_17 txt_justify">Nhờ vào nỗ lực không ngừng nghỉ, TBS Group đã xây dựng được chuỗi các nhà máy và cơ sở hạ tầng hiện đại, đáp ứng các tiêu chuẩn thân thiện với môi trường và phát triển bền vững.</div>
            <div class="development_environment_info_des txt_17 txt_justify">Chúng tôi nỗ lực đưa các yếu tố bền vững về môi trường vào mọi giai đoạn của dự án. Chúng tôi luôn cố gắng đảm bảo các công trình được thiết kế để thích ứng với điều kiện khí hậu thay đổi và cải thiện hiệu quả vận hành của tài sản. Đồng thời, giảm tiêu thụ năng lượng và khuyến khích sử dụng các nguồn năng lượng tái tạo; Giảm tiêu thụ nước, khuyến khích sử dụng nước tái chế hoặc nước đã qua xử lý, cũng như thu gom nước mưa; Quản lý rác thải bằng cách nâng cao hiệu quả xây dựng và thúc đẩy tái chế.</div>
            <div class="development_environment_info_logo">
              <div class="development_environment_info_logo_inner img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/logo_standard.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="development_environment_project kl_grid">
          <div class="development_environment_project_left">
            <div class="development_environment_project_img img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/phattrien_chungtay.webp" alt="">
            </div>
            <div class="development_environment_project_title title_project txt_uppercase heading txt_28">Dự án xanh khối Sản xuất Giày da – Túi Xách</div>
            <div class="development_environment_project_des txt_17">Khởi công vào tháng 11/2014,  quy trình xử lí chất thải, hóa chất mới tại hệ thống nhà máy Giày & Túi Xách TBS được cải tiến đáng kể:</div>
            <div class="development_environment_project_des txt_17">- Hệ thống xử lý nước thải có thể lọc ra nước thải sinh hoạt (loại A) và nước thải công nghiệp tiêu chuẩn (loại B) với công suất lên đến 1.500 m3/ ngày-đêm.</div>
            <div class="development_environment_project_des txt_17">- Sử dụng hóa chất dạng Water Base, thân thiện với môi trường, trong 100% sản xuất túi xách, 80% đối với mặt hàng Giày, keo PU – không có Toluene chiếm 20% còn lại.</div>
            <div class="development_environment_project_des txt_17">- Bụi thải, dung môi hơi từ các công đoạn mài cắt, luyện kín sẽ được chụp hút hoặc quạt hút, sau đó đi qua thiết bị cyclone và lọc bụi tay áo. Cuối cùng, phần còn lại sẽ được thải ra môi trường bằng ống thải cao đến 12 mét.</div>
            <div class="development_environment_project_des txt_17">- Thiết bị cyclone có thể xử lí đến 10 tấn khí thải từ lò hơi nhiên liệu trấu ép trong một giờ với giải pháp hấp thụ bằng nước và thải ra qua ống thải cao 14 mét.</div>
          </div>
          <div class="development_environment_project_right">
            <div class="development_environment_project_img img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/phattrien_duanxanh.webp" alt="">
            </div>
            <div class="development_environment_project_title txt_uppercase heading txt_28">Dự án xanh ICD Tân Vạn – TBS Logistics</div>
            <div class="development_environment_project_des txt_17">- Tại các kho bãi của trung tâm ICD TBS Tân Vạn, những tấm lợp công nghệ mới Thermatech được lắp đặt nhằm phản xạ, giảm nhiệt lượng hấp thụ đến 6°C trên mái nhà, hạn chế hiệu ứng đảo nhiệt UHI và giảm 15% năng lượng tiêu thụ.</div>
            <div class="development_environment_project_des txt_17">- Hệ thống an ninh hiện đại cùng: Camera, thiết bị chống cháy, nhân viên giám sát 24/24 giúp quá trình làm việc diễn ra an toàn, thuận lợi.</div>
            <div class="development_environment_project_des txt_17">- Thông qua thiết kế với công viên bao bọc, TBS mong muốn mang lại nguồn năng lượng xanh dồi dào, thoáng đãng, đảm bảo sức khỏe tốt cho người lao động.</div>
          </div>
        </div>
      </div>
    </section>
    <section class="development_response bg_line">
      <div class="kl_container">
        <div class="development_response_inner kl_grid">
          <div class="development_response_info">
            <h2 class="development_response_info_title heading txt_55 txt_title_color txt_uppercase">Trách nhiệm xã hội</h2>
            <div class="development_response_info_des txt_17 txt_justify">TBS Group luôn coi trọng trách nhiệm xã hội, xem đây là nền tảng để phát triển bền vững và đóng góp tích cực cho cộng đồng. Với cam kết tạo dựng giá trị lâu dài, TBS Group không chỉ chú trọng đến việc giảm thiểu tác động môi trường mà còn tích cực tham gia các chương trình hỗ trợ cộng đồng, nâng cao chất lượng cuộc sống và tạo cơ hội phát triển cho người dân địa phương bằng việc tuân thủ chương trình "ly nông không ly hương".</div>
            <div class="development_response_info_des txt_17 txt_justify">Bên cạnh đó, TBS Group nhiều năm liền chú trọng xây dựng nguồn nhân tài cho đất nước thông qua các hoạt động tài trợ học bổng cho con em CBNV và các sinh viên tài năng tại các trường Đại học địa phương. </div>
            <div class="development_response_info_des txt_17 txt_justify">Thông qua những hoạt động an sinh xã hội trong suốt quá trình hình thành và phát triển, TBS Group khẳng định vai trò của mình trong việc xây dựng một xã hội công bằng, thịnh vượng và phát triển bền vững.</div>
          </div>
          <div class="development_response_img img_full right_full">
            <img src="<?= get_template_directory_uri(); ?>/img/phattrien_trachnhiem.webp" alt="">
          </div>
        </div>
        <div class="development_response_card kl_grid">
          <div class="development_response_card_item1">
            <div class="development_response_card_item_title txt_center txt_uppercase txt_24">Hỗ trợ cộng đồng</div>
            <div class="development_response_card_item_des txt_17 txt_center">Ủng hộ 10 tỷ đồng cho đồng bào bị ảnh hưởng bởi cơn bão Yagi.</div>
          </div>
           <div class="development_response_card_item2">
            <div class="development_response_card_item_title txt_center txt_uppercase txt_24">Bảo vệ môi trường</div>
            <div class="development_response_card_item_des txt_17 txt_center">Đầu tư hệ thống xử lý nước thải và sáng kiến tiết kiệm năng lượng.</div>
          </div>
           <div class="development_response_card_item3">
            <div class="development_response_card_item_title txt_center txt_uppercase txt_24">Phát triển nguồn nhân lực</div>
            <div class="development_response_card_item_des txt_17 txt_center">Xây tặng Trường Tiểu Học Nguyễn Bỉnh Khiêm tại xã Đông Hòa, Dĩ An.</div>
          </div>
        </div>
      </div>
    </section>
<?php 
wp_enqueue_script('phat-trien', get_template_directory_uri() . '/js/phat-trien.js',array('global-js'),SITE_VERSION,true);
get_footer(); 

?>