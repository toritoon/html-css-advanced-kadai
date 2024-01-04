<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>Courses</div>
            <div>コース</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->

    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title"><?php the_title();?></div>
                <div class="tab_panel_header">
                </div>
                <div class="tab_panel_content">
                  <div class="course_image"><?php the_post_thumbnail('large'); ?></div>
                  <div class="tab_panel_text">
                    <p>
                      <?php the_content(); ?>
                    </p>
                  </div>
                  <div class="campus_footer_content d-flex flex-row align-items-center justify-content-start">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clock.png"><span>2019/4/23</span>
                  </div>
                  <hr>
                  <div class="social_share">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <div class="sidebar">
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">News ニュース</a></li>
                  <li><a href="#">Event イベント</a></li>
                  <li><a href="#">CampusLife 侍の学生</a></li>
                </ul>
              </div>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>Latest Post</h2>
                <div class="section_subtitle">最新記事</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   <?php get_footer(); ?>