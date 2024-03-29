<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <title>RomsKomp</title>
    <!--meta info-->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
    <!--web fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
    <!--libs css-->
    <link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="plugins/rs-plugin/css/settings.css">

    <!--theme css-->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/theme-animate.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <!--head libs-->
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="plugins/jquery.queryloader2.min.js"></script>
    <script src="plugins/modernizr.js"></script>
    <script>
        $('html').addClass('d_none');
        $(document).ready(function(){
            $('html').show();
            $("body").queryLoader2({
                backgroundColor: '#fff',
                barColor : '#e8242c',
                barHeight: 4,
                percentage:true,
                deepSearch:true,
                minimumTime:1000
            });
        });
    </script>
</head>
<body class="sticky_menu">

    <!--side menu-->
    <button id="open_side_menu" class="icon_wrap_size_2 circle color_black">
        <i class="icon-menu"></i>
    </button>
    <div id="side_menu">
        <header class="m_bottom_30 d_table w_full">
            <!--logo-->
            <div class="d_table_cell half_column v_align_m">
                <a href="index.html">
                    <img src="images/logo_side.png" alt="">
                </a>
            </div>
            <!--close sidemenu button-->
            <div class="d_table_cell half_column v_align_m t_align_r">
                <button class="icon_wrap_size_2 circle color_grey_light_2 d_inline_m" id="close_side_menu">
                    <i class="icon-cancel"></i>
                </button>
            </div>
        </header>
        <hr class="divider_type_4 m_bottom_20">
        <!--searchform-->
        <form role="search" class="m_bottom_20 relative type_2">
            <input type="text" placeholder="Search" class="r_corners fw_light bg_light w_full">
            <button class="color_grey_light color_purple_hover tr_all">
                <i class="icon-search"></i>
            </button>
        </form>
        <hr class="divider_type_4 m_bottom_25">
        <!--main menu-->
        @section('navBar')
        <nav>
            <ul class="side_main_menu fw_light">
                <li class="has_sub_menu active m_bottom_10">
                    <a href="index.html" class="d_block relative fs_large color_light_2 color_blue_hover">Home</a>
                    <!--sub menu(second level)-->
                    <ul class="m_top_10">
                        <li class="has_sub_menu m_bottom_10">
                            <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Layouts</a>
                            <!--sub menu(third level)-->
                            <ul class="m_top_10 d_none">
                                <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Business</a></li>
                                <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Agency</a></li>
                                <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Portfolio</a></li>
                                <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a></li>
                                <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Magazine</a></li>
                                <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Shop</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu active">
                            <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Sliders</a>
                            <!--sub menu(third level)-->
                            <ul class="m_top_10">
                                <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Revolution</a></li>
                                <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Flex</a></li>
                                <li class="m_bottom_10"><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">iosSlider</a></li>
                                <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Layer</a></li>
                                <li class="m_bottom_10"><a href="index_video_slider.html" class="d_block relative color_light_2 color_blue_hover">Video Slider</a></li>
                                <li class="has_sub_menu active">
                                    <a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Content</a>
                                    <!--sub menu(fourth level)-->
                                    <ul class="m_top_10">
                                        <li class="m_bottom_10"><a href="index_text_and_form.html" class="d_block relative color_light_2 color_blue_hover">Text &amp; Form</a></li>
                                        <li class="m_bottom_10"><a href="index_other_head_static_content.html" class="d_block relative color_light_2 color_blue_hover">Event Countdown</a></li>
                                        <li class="m_bottom_10"><a href="index_video_background.html" class="d_block relative color_light_2 color_blue_hover">Video Background</a></li>
                                        <li class="m_bottom_10"><a href="index_video_in_popup.html" class="d_block relative color_light_2 color_blue_hover">Video in Popup Window</a></li>
                                        <li class="m_bottom_10"><a href="index_static_image.html" class="d_block relative color_light_2 color_blue_hover">Static Image</a></li>
                                        <li><a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has_sub_menu m_bottom_10">
                    <a href="pages_about.html" class="d_block relative fs_large color_light_2 color_blue_hover">Pages</a>
                    <!--sub menu(second level)-->
                    <ul class="d_none m_top_10">
                        <li class="m_bottom_10">
                            <a href="pages_about.html" class="d_block relative color_light_2 color_blue_hover">About us</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_services.html" class="d_block relative color_light_2 color_blue_hover">Services</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_team.html" class="d_block relative color_light_2 color_blue_hover">Team</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_process.html" class="d_block relative color_light_2 color_blue_hover">Process</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_careers.html" class="d_block relative color_light_2 color_blue_hover">Careers</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_faq.html" class="d_block relative color_light_2 color_blue_hover">FAQ</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_404.html" class="d_block relative color_light_2 color_blue_hover">404 Page</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_coming_soon.html" class="d_block relative color_light_2 color_blue_hover">Coming soon page</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_sitemap.html" class="d_block relative color_light_2 color_blue_hover">Sitemap</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_full_width.html" class="d_block relative color_light_2 color_blue_hover">Full width text page</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Text page with right sidebar</a>
                        </li>
                        <li class="m_bottom_10">
                            <a href="pages_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Text page with left sidebar</a>
                        </li>
                        <li>
                            <a href="pages_contact.html" class="d_block relative color_light_2 color_blue_hover">Contact us</a>
                        </li>
                    </ul>
                </li>
                <li class="has_sub_menu m_bottom_10">
                    <a href="portfolio_classic_1_column.html" class="d_block relative fs_large color_light_2 color_blue_hover">Portfolio</a>
                    <!--sub menu(second level)-->
                    <ul class="d_none m_top_10">
                        <li class="has_sub_menu m_bottom_10">
                            <a href="portfolio_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">Classic</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="portfolio_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">1 column</a></li>
                                <li class="m_bottom_10"><a href="portfolio_classic_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                <li class="m_bottom_10"><a href="portfolio_classic_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                <li class="m_bottom_10"><a href="portfolio_classic_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                <li class="m_bottom_10"><a href="portfolio_classic_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                <li><a href="portfolio_classic_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="portfolio_sortable_t_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable grid with text</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="portfolio_sortable_t_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                <li class="m_bottom_10"><a href="portfolio_sortable_t_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                <li class="m_bottom_10"><a href="portfolio_sortable_t_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                <li class="m_bottom_10"><a href="portfolio_sortable_t_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                <li><a href="portfolio_sortable_t_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="portfolio_sortable_wt_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable grid without text</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="portfolio_sortable_wt_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                <li class="m_bottom_10"><a href="portfolio_sortable_wt_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                <li class="m_bottom_10"><a href="portfolio_sortable_wt_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                <li class="m_bottom_10"><a href="portfolio_sortable_wt_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                <li><a href="portfolio_sortable_wt_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="portfolio_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable masonry</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="portfolio_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                <li class="m_bottom_10"><a href="portfolio_masonry_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                <li class="m_bottom_10"><a href="portfolio_masonry_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                <li class="m_bottom_10"><a href="portfolio_masonry_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover m_bottom_10">3 columns with left sidebar</a></li>
                                <li><a href="portfolio_masonry_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu">
                            <a href="portfolio_single_side_image_list.html" class="d_block relative color_light_2 color_blue_hover">Single project pages</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="portfolio_single_side_image_list.html" class="d_block relative color_light_2 color_blue_hover">Project with side image list</a></li>
                                <li class="m_bottom_10"><a href="portfolio_single_full_width_image_list.html" class="d_block relative color_light_2 color_blue_hover">Project with full width image list</a></li>
                                <li class="m_bottom_10"><a href="portfolio_single_side_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with side image slider</a></li>
                                <li class="m_bottom_10"><a href="portfolio_single_full_width_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with full width image slider</a></li>
                                <li class="m_bottom_10"><a href="portfolio_single_extended_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with extended image list</a></li>
                                <li class="m_bottom_10"><a href="portfolio_single_side_video_list.html" class="d_block relative color_light_2 color_blue_hover">Project with side video list</a></li>
                                <li><a href="portfolio_single_full_width_video.html" class="d_block relative color_light_2 color_blue_hover">Project with full width video list</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has_sub_menu m_bottom_10">
                    <a href="blog_classic_1_column.html" class="d_block relative fs_large color_light_2 color_blue_hover">Blog</a>
                    <!--sub menu(second level)-->
                    <ul class="d_none m_top_10">
                        <li class="has_sub_menu m_bottom_10">
                            <a href="blog_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">Classic</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="blog_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">1 column</a></li>
                                <li><a href="portfolio_classic_2_columns.html" class="d_block relative color_light_2 color_blue_hover">1 Column with right sidebar</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="blog_grid_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Grid</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="blog_grid_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                <li class="m_bottom_10"><a href="blog_grid_2_columns_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with left sidebar</a></li>
                                <li class="m_bottom_10"><a href="blog_grid_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                <li class="m_bottom_10"><a href="blog_grid_3_columns_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with right sidebar</a></li>
                                <li><a href="blog_grid_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="blog_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Masonry</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="blog_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                <li class="m_bottom_10"><a href="blog_masonry_2_columns_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                <li class="m_bottom_10"><a href="blog_masonry_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                <li class="m_bottom_10"><a href="blog_masonry_3_columns_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                <li><a href="blog_masonry_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu">
                            <a href="blog_single_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Single blog post</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="blog_single_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Image post</a></li>
                                <li class="m_bottom_10"><a href="blog_single_image_slideshow_post.html" class="d_block relative color_light_2 color_blue_hover">Image slideshow post</a></li>
                                <li class="m_bottom_10"><a href="blog_single_video_post.html" class="d_block relative color_light_2 color_blue_hover">Video post</a></li>
                                <li class="m_bottom_10"><a href="blog_single_audio_post.html" class="d_block relative color_light_2 color_blue_hover">Audio post</a></li>
                                <li class="m_bottom_10"><a href="blog_single_blockquote_post.html" class="d_block relative color_light_2 color_blue_hover">Blockquote post</a></li>
                                <li class="m_bottom_10"><a href="blog_single_link_post.html" class="d_block relative color_light_2 color_blue_hover">Link post</a></li>
                                <li><a href="blog_single_full_width.html" class="d_block relative color_light_2 color_blue_hover">Full Width Post</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has_sub_menu m_bottom_10">
                    <a href="#" class="d_block relative fs_large color_light_2 color_blue_hover">Features</a>
                    <!--sub menu(second level)-->
                    <ul class="d_none m_top_10">
                        <li class="has_sub_menu m_bottom_10">
                            <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Layouts</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Business</a></li>
                                <li><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Agency</a></li>
                                <li><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Portfolio</a></li>
                                <li><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a></li>
                                <li><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Magazine</a></li>
                                <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Shop</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Sliders</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Revolution</a></li>
                                <li><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Flex</a></li>
                                <li><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">iosSlider</a></li>
                                <li><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Layer</a></li>
                                <li><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Video Slider</a></li>
                                <li class="has_sub_menu active">
                                    <a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Content</a>
                                    <!--sub menu(fourth level)-->
                                    <ul class="m_top_10">
                                        <li class="m_bottom_10"><a href="index_text_and_form.html" class="d_block relative color_light_2 color_blue_hover">Text &amp; Form</a></li>
                                        <li class="m_bottom_10"><a href="index_other_head_static_content.html" class="d_block relative color_light_2 color_blue_hover">Event Countdown</a></li>
                                        <li class="m_bottom_10"><a href="index_video_background.html" class="d_block relative color_light_2 color_blue_hover">Video Background</a></li>
                                        <li class="m_bottom_10"><a href="index_video_in_popup.html" class="d_block relative color_light_2 color_blue_hover">Video in Popup Window</a></li>
                                        <li class="m_bottom_10"><a href="index_static_image.html" class="d_block relative color_light_2 color_blue_hover">Static Image</a></li>
                                        <li><a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Headers</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Header 1</a></li>
                                <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Header 2</a></li>
                                <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Header 3</a></li>
                                <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Header 4</a></li>
                                <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Header 5</a></li>
                                <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Header 6</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Footers</a>
                            <!--sub menu(third level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Footer 1</a></li>
                                <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Footer 2</a></li>
                                <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Footer 3</a></li>
                                <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Footer 4</a></li>
                                <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Footer 5</a></li>
                                <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Footer 6</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has_sub_menu m_bottom_10">
                    <a href="shortcodes_elements.html" class="d_block relative fs_large color_light_2 color_blue_hover">Shortcodes</a>
                    <!--sub menu(second level)-->
                    <ul class="d_none m_top_10">
                        <li class="m_bottom_10"><a href="shortcodes_elements.html" class="d_block relative color_light_2 color_blue_hover">Elements</a></li>
                        <li class="m_bottom_10"><a href="shortcodes_columns.html" class="d_block relative color_light_2 color_blue_hover">Columns</a></li>
                        <li><a href="shortcodes_typography.html" class="d_block relative color_light_2 color_blue_hover">Typography</a></li>
                    </ul>
                </li>
                <li class="has_sub_menu m_bottom_10">
                    <a href="shop.html" class="d_block relative fs_large color_light_2 color_blue_hover">Shop</a>
                    <!--sub menu(second level)-->
                    <ul class="d_none m_top_10">
                        <li class="m_bottom_10"><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Front Page</a></li>
                        <li class="m_bottom_10"><a href="shop_category_v1.html" class="d_block relative color_light_2 color_blue_hover">Category Page v1</a></li>
                        <li class="m_bottom_10"><a href="shop_category_v2.html" class="d_block relative color_light_2 color_blue_hover">Category Page v2</a></li>
                        <li class="m_bottom_10"><a href="shop_product_page_v1.html" class="d_block relative color_light_2 color_blue_hover">Product Page v1</a></li>
                        <li class="m_bottom_10"><a href="shop_product_page_v2.html" class="d_block relative color_light_2 color_blue_hover">Product Page v2</a></li>
                        <li class="m_bottom_10"><a href="shop_cart.html" class="d_block relative color_light_2 color_blue_hover">Shoping Cart &amp; Checkout</a></li>
                        <li class="m_bottom_10"><a href="shop_wishlist.html" class="d_block relative color_light_2 color_blue_hover">Wishlist</a></li>
                        <li class="m_bottom_10"><a href="shop_compare_products.html" class="d_block relative color_light_2 color_blue_hover">Compare products</a></li>
                        <li class="m_bottom_10"><a href="shop_order_list.html" class="d_block relative color_light_2 color_blue_hover">Orders list</a></li>
                        <li><a href="shop_order_information.html" class="d_block relative color_light_2 color_blue_hover">Order information</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        @show
    </div>

    <!--layout-->
    <div class="wide_layout bg_light">
        <!--header markup-->
        <header role="banner" class="relative">
            <span class="gradient_line"></span>
            <hr>
            <!--header bottom part-->
            <section class="header_bottom_part bg_light">
                <div class="container">
                    <div class="d_table w_full d_xs_block">
                        <!--logo-->
                        <div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                            <a href="index.html" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
                                <img src="images/logo.png" alt="" width="65dp">
                            </a>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 t_align_r d_table_cell d_xs_block f_none">
                            <div class="relative clearfix t_align_r">
                                <button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
                                    <i class="icon-menu"></i>
                                </button>
                                <!--main navigation-->
                                <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 t_align_l m_xs_bottom_15">
                                    <ul class="hr_list main_menu fw_light">
                                        <li class="container3d relative f_xs_none m_xs_bottom_5">
                                            <a class="color_dark fs_large relative r_xs_corners" href="#">Roms</a>
                                        </li>
                                        <li class="container3d relative f_xs_none m_xs_bottom_5">
                                            <a class="color_dark fs_large relative r_xs_corners" href="shortcodes_elements.html">Emuladores</a>
                                        </li>
                                        <li class="container3d relative f_xs_none m_xs_bottom_5">
                                            <a class="color_dark fs_large relative r_xs_corners" href="shop.html">Ayuda</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!--searchform button-->
                                <div class="relative d_inline_m search_buttons d_xs_none">
                                    <button class="icon_wrap_size_2 circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-cancel"></i></button>
                                    <button class="icon_wrap_size_2 active circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-search"></i></button>
                                </div>
                                <!--searchform-->
                                <form role="search" class="bg_light animate_ vc_child t_align_r fw_light tr_all trf_xs_none">
                                    <input type="text" name="buscar" placeholder="Buscar juego o consola" class="r_corners d_inline_m">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!--revolution slider-->
        <section class="relative w_full m_bottom_15">
            <div class="r_slider">
                <ul>
                    <li data-transition="fade" data-slotamount="10">
                        <<<<<<< HEAD
                        <img src="images/imgRetrokp.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
                        <div class="caption sfl str" data-x="left" data-y="108" data-speed="700"><h1 class="color_dark fw_light">ROOMS & EMULADORES</h1></div>
                        <div class="caption sfl str" data-x="left" data-y="243" data-speed="700" data-start="1200">Descargue y juegue juegos retro en su PC, Mac o Android</div>
                    </li>
                </ul>
            </div>
        </section>
        <!--content-->
        <div>
            @yield('Contenido')
        </div>
        <!--who we are-->
        <section class="section_offset">
            <div class="container t_align_c">
                <h3 class="color_dark fw_light m_bottom_15 heading_1" data-appear-animation="bounceInLeft">Who We Are</h3>
                <p class="m_bottom_35 heading_2" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Donec eget tellus non erat lacinia fermentum. </p>
                <div class="tabs">
                    <!--tabs nav-->
                    <ul class="tabs_nav hr_list d_inline_b d_xs_block m_bottom_30 m_xs_bottom_20" data-appear-animation="bounceInLeft" data-appear-animation-delay="800">
                        <li class="f_xs_none"><a href="#tab-1" class="color_dark d_block n_sc_hover">The Company</a></li>
                        <li class="f_xs_none"><a href="#tab-2" class="color_dark d_block n_sc_hover">Our Philosophy</a></li>
                        <li class="f_xs_none"><a href="#tab-3" class="color_dark d_block n_sc_hover">Our Mission</a></li>
                        <li class="f_xs_none"><a href="#tab-4" class="color_dark d_block n_sc_hover">Why Choose Us</a></li>
                    </ul>
                    <!--tabs content-->
                    <article id="tab-1" data-appear-animation="fadeInUp" data-appear-animation-delay="450">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">
                                <img src="images/home_img_1.jpg" class="r_corners" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 t_align_l fw_light">
                                <p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
                                <p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                            </div>
                        </div>
                    </article>
                    <article id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 m_sm_bottom_20 t_align_l fw_light">
                                <p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
                                <p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <img src="images/home_img_1.jpg" class="r_corners" alt="">
                            </div>
                        </div>
                    </article>
                    <article id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 m_sm_bottom_20">
                                <div class="iframe_video_wrap">
                                    <iframe src="https://www.youtube.com/embed/Du8ld5hrqN0?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 t_align_l fw_light">
                                <p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
                                <p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                            </div>
                        </div>
                    </article>
                    <article id="tab-4" class="t_align_l fw_light">
                        <p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
                        <p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                        <p class="m_bottom_15">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                        <p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
                        <p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                        <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                    </article>
                </div>
            </div>
        </section>
        <!--what we do-->
        <section class="section_offset image_bg_1">
            <div class="container">
                <h3 class="color_dark fw_light m_bottom_15 t_align_c heading_3" data-appear-animation="bounceInLeft">What We Do</h3>
                <p class="m_bottom_40 t_align_c heading_4" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. </p>
                <div data-appear-animation="fadeInUp" data-appear-animation-delay="800">
                    <!--first four services-->
                    <div class="row m_bottom_30" >
                        <!--service-->
                        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                            <figure class="item_services">
                                <h6 class="m_bottom_5 relative">
                                    <a href="#" class="color_dark d_block n_sc_hover">Web Design</a>
                                    <span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
                                        <i class="icon-feather tr_all"></i>
                                    </span>
                                </h6>
                                <p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
                                <a href="#" class="color_dark fs_medium color_pink_hover">Read More
                                 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-angle-right"></i>
                                </span>
                            </a>
                        </figure>
                    </div>
                    <!--service-->
                    <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                        <figure class="item_services">
                            <h6 class="m_bottom_5 relative">
                                <a href="#" class="color_dark d_block n_sc_hover">Branding</a>
                                <span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
                                    <i class="icon-tag tr_all"></i>
                                </span>
                            </h6>
                            <p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
                            <a href="#" class="color_dark fs_medium color_pink_hover">Read More
                             <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                <i class="icon-angle-right"></i>
                            </span>
                        </a>
                    </figure>
                </div>
                <!--service-->
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_dark d_block n_sc_hover">Animation &amp; Motion</a>
                            <span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
                                <i class="icon-video tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
                        <a href="#" class="color_dark fs_medium color_pink_hover">Read More
                         <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                </figure>
            </div>
            <!--service-->
            <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                <figure class="item_services">
                    <h6 class="m_bottom_5 relative">
                        <a href="#" class="color_dark d_block n_sc_hover">Web Development</a>
                        <span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
                            <i class="icon-tools tr_all"></i>
                        </span>
                    </h6>
                    <p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
                    <a href="#" class="color_dark fs_medium color_pink_hover">Read More
                     <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
                        <i class="icon-angle-right"></i>
                    </span>
                </a>
            </figure>
        </div>
    </div>
    <!--second four services-->
    <div class="row services_animate">
        <!--service-->
        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
            <figure class="item_services">
                <h6 class="m_bottom_5 relative">
                    <a href="#" class="color_dark d_block n_sc_hover">E-commerce</a>
                    <span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
                        <i class="icon-basket tr_all"></i>
                    </span>
                </h6>
                <p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
                <a href="#" class="color_dark fs_medium color_pink_hover">Read More
                 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
                    <i class="icon-angle-right"></i>
                </span>
            </a>
        </figure>
    </div>
    <!--service-->
    <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
        <figure class="item_services">
            <h6 class="m_bottom_5 relative">
                <a href="#" class="color_dark d_block n_sc_hover">Mobile</a>
                <span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
                    <i class="icon-mobile tr_all"></i>
                </span>
            </h6>
            <p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
            <a href="#" class="color_dark fs_medium color_pink_hover">Read More
             <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
                <i class="icon-angle-right"></i>
            </span>
        </a>
    </figure>
</div>
<!--service-->
<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
    <figure class="item_services">
        <h6 class="m_bottom_5 relative">
            <a href="#" class="color_dark d_block n_sc_hover">SEO</a>
            <span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
                <i class="icon-search tr_all"></i>
            </span>
        </h6>
        <p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
        <a href="#" class="color_dark fs_medium color_pink_hover">Read More
         <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
            <i class="icon-angle-right"></i>
        </span>
    </a>
</figure>
</div>
<!--service-->
<div class="col-lg-3 col-md-3 col-sm-3">
    <figure class="item_services">
        <h6 class="m_bottom_5 relative">
            <a href="#" class="color_dark d_block n_sc_hover">Analytics</a>
            <span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
                <i class="icon-chart-line tr_all"></i>
            </span>
        </h6>
        <p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
        <a href="#" class="color_dark fs_medium color_pink_hover">Read More
         <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
            <i class="icon-angle-right"></i>
        </span>
    </a>
</figure>
</div>
</div>
</div>
</div>

<img src="images/imgRetrokp.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
<div class="caption sfl str" data-x="left" data-y="155" data-speed="700"><h1 class="fw_ex_bold" style="color:#f1eef0"> ROOMS & EMULADORES </h1></div>
<div class="caption sfl str" data-x="left" data-y="240" data-speed="700" data-start="1200"><h4 class="fw_light" style="color:#f1eef0">Descargue y juegue juegos retro en su PC, Mac o Android</h4></div>
</li>
</div>
</li>
</ul>
</div>
</section>
<!--content-->
<!--Juegos populares-->
<section class="section_offset image_bg_1">
    <div class="container">
        <h3 class="color_light fw_light m_bottom_15 heading_1" data-appear-animation="bounceInLeft">Juegos populares</h3>
        <div class="tabs">
            <!--IMG de los juegos populares-->
        </div>
    </div>

</section>



<!--our featured projects-->
<section class="section_offset relative">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">Our Featured Projects</h3>
        <p class="m_bottom_35 t_align_c" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla.</p>
        <div class="row" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
            <!--projects carousel-->
            <div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,3],[768,2],[100,1]], "singleItem" : false}'>
                <!--project-->
                <figure class="t_xs_align_c col-lg-12">
                    <!--image container-->
                    <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
                        <img src="images/home_img_2.jpg" alt="">
                        <div class="popup_buttons tr_all_long">
                            <a href="images/home_img_5.jpg" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                <i class="icon-plus"></i>
                            </a>
                            <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div>
                    <figcaption class="t_xs_align_l">
                        <!--project's title-->
                        <h4 class="fw_light fs_middle"><a href="#" class="color_dark">Nam elit agna, endrerit sit amet, tincidunt ac</a></h4>
                        <!--project's info-->
                        <ul class="dotted_list m_bottom_5 color_grey_light_2">
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="color_grey_light_2 fs_small">
                                    <i class="icon-picture"></i>
                                </a>
                            </li>
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="fs_medium color_grey">
                                    <i>Mobile</i></a>,
                                    <a href="#" class="fs_medium color_grey">
                                        <i>Technology</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_red_hover">
                                        <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                    </a>
                                </li>
                            </ul>
                            <p class="m_bottom_10 fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
                            <div class="clearfix">
                                <a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-angle-right"></i>
                                    </span>
                                    Read More
                                </a>
                                <a href="#" class="color_purple color_pink_hover f_left d_block">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-link"></i>
                                    </span>
                                    View Project
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                    <!--project-->
                    <figure class="t_xs_align_c col-lg-12">
                        <!--image container-->
                        <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
                            <img src="images/home_img_3.jpg" alt="">
                            <div class="popup_buttons tr_all_long">
                                <a href="http://www.youtube.com/watch?v=SZEflIVnhH8" data-group="featured_projects" data-title="Vivamus eget nibh" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                    <i class="icon-play"></i>
                                </a>
                                <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>
                        <figcaption class="t_xs_align_l">
                            <!--project's title-->
                            <h4 class="fw_light fs_middle"><a href="#" class="color_dark">Vivamus eget nibh</a></h4>
                            <!--project's info-->
                            <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey_light_2 fs_small">
                                        <i class="icon-video"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_medium color_grey">
                                        <i>Mobile</i></a>,
                                        <a href="#" class="fs_medium color_grey">
                                            <i>Technology</i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_red_hover">
                                            <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">176</i>
                                        </a>
                                    </li>
                                </ul>
                                <p class="m_bottom_10 fw_light">Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. Mauris accumsan nulla vel diam.</p>
                                <div class="clearfix">
                                    <a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
                                        <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                            <i class="icon-angle-right"></i>
                                        </span>
                                        Read More
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                        <!--project-->
                        <figure class="t_xs_align_c col-lg-12">
                            <!--image container-->
                            <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
                                <img src="images/home_img_4.jpg" alt="">
                                <div class="popup_buttons tr_all_long">
                                    <a href="images/home_img_7.jpg" data-group="featured_projects" data-title="Praesent justo dolor, loborti quis" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                        <i class="icon-link"></i>
                                    </a>
                                </div>
                            </div>
                            <figcaption class="t_xs_align_l">
                                <!--project's title-->
                                <h4 class="fw_light fs_middle"><a href="#" class="color_dark">Praesent justo dolor, loborti quis, lobortis dignissim</a></h4>
                                <!--project's info-->
                                <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_grey_light_2 fs_small">
                                            <i class="icon-music-1"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="fs_medium color_grey">
                                            <i>Mobile</i></a>,
                                            <a href="#" class="fs_medium color_grey">
                                                <i>Technology</i>
                                            </a>
                                        </li>
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_red_hover">
                                                <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">14</i>
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="m_bottom_10 fw_light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</p>
                                    <div class="clearfix">
                                        <a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
                                            <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Read More
                                        </a>
                                        <a href="#" class="color_purple color_pink_hover f_left d_block">
                                            <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                <i class="icon-link"></i>
                                            </span>
                                            View Project
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--project-->
                            <figure class="t_xs_align_c col-lg-12">
                                <!--image container-->
                                <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
                                    <img src="images/home_img_10.jpg" alt="">
                                    <div class="popup_buttons tr_all_long">
                                        <a href="images/home_img_8.jpg" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                            <i class="icon-plus"></i>
                                        </a>
                                        <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                            <i class="icon-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <figcaption class="t_xs_align_l">
                                    <!--project's title-->
                                    <h4 class="fw_light fs_middle"><a href="#" class="color_dark">Suspendisse sollicitudin velit sed leo. Ut pharetra</a></h4>
                                    <!--project's info-->
                                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_grey_light_2 fs_small">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </li>
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="fs_medium color_grey">
                                                <i>Mobile</i></a>,
                                                <a href="#" class="fs_medium color_grey">
                                                    <i>Technology</i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 relative d_inline_m">
                                                <a href="#" class="color_red_hover">
                                                    <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="m_bottom_10 fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede.</p>
                                        <div class="clearfix">
                                            <a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
                                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                    <i class="icon-angle-right"></i>
                                                </span>
                                                Read More
                                            </a>
                                            <a href="#" class="color_purple color_pink_hover f_left d_block">
                                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                    <i class="icon-link"></i>
                                                </span>
                                                View Project
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure>
                                <!--project-->
                                <figure class="t_xs_align_c col-lg-12">
                                    <!--image container-->
                                    <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
                                        <img src="images/home_img_11.jpg" alt="">
                                        <div class="popup_buttons tr_all_long">
                                            <a href="images/home_img_9.jpg" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                                <i class="icon-plus"></i>
                                            </a>
                                            <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                                <i class="icon-link-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <figcaption class="t_xs_align_l">
                                        <!--project's title-->
                                        <h4 class="fw_light fs_middle"><a href="#" class="color_dark">Endrerit sit amet, tincidu</a></h4>
                                        <!--project's info-->
                                        <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                            <li class="m_right_15 relative d_inline_m">
                                                <a href="#" class="color_grey_light_2 fs_small">
                                                    <i class="icon-music-1"></i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 relative d_inline_m">
                                                <a href="#" class="fs_medium color_grey">
                                                    <i>Mobile</i></a>,
                                                    <a href="#" class="fs_medium color_grey">
                                                        <i>Technology</i>
                                                    </a>
                                                </li>
                                                <li class="m_right_15 relative d_inline_m">
                                                    <a href="#" class="color_red_hover">
                                                        <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <p class="m_bottom_10 fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
                                            <div class="clearfix">
                                                <a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
                                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                        <i class="icon-angle-right"></i>
                                                    </span>
                                                    Read More
                                                </a>
                                                <a href="#" class="color_purple color_pink_hover f_left d_block">
                                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                        <i class="icon-link"></i>
                                                    </span>
                                                    View Project
                                                </a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!--carousel nav-->
                        <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_prev d_md_none">
                            <i class="icon-left-open-big"></i>
                        </button>
                        <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_next d_md_none">
                            <i class="icon-right-open-big"></i>
                        </button>
                    </section>
                    <section class="section_offset image_bg_2">
                        <div class="container">
                            <div class="row">
                                <!--testimonials-->
                                <section class="col-lg-6 col-md-6 m_bottom_20" data-appear-animation="fadeInUp">
                                    <h3 class="color_light t_align_c m_bottom_15 fw_light">Testimonials</h3>
                                    <p class="m_bottom_35 t_align_c color_grey_light_2">Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae. </p>
                                    <div class="owl-carousel" data-nav="t_nav_" data-plugin-options='{"autoPlay":false,"autoHeight":true,"transitionStyle": "backSlide"}'>
                                        <!--item-->
                                        <div>
                                            <!--quote-->
                                            <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                                                <p class="m_bottom_15"><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
                                                <p><i>Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.</i></p>
                                            </blockquote>
                                            <div class="d_table w_full">
                                                <div class="d_table_cell">
                                                    <!--author photo-->
                                                    <div class="d_inline_m circle wrapper m_right_10">
                                                        <img src="images/testimonial_img_1.jpg" alt="">
                                                    </div>
                                                    <!--author name-->
                                                    <div class="d_inline_m">
                                                        <b class="fs_large d_block color_light">John Doe</b>
                                                        <p class="fs_medium color_grey_light_2">Co-founder, Company Name</p>
                                                    </div>
                                                </div>
                                                <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                                                    <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
                                                        <i class="icon-left-open-big"></i>
                                                    </button>
                                                    <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
                                                        <i class="icon-right-open-big"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--item-->
                                        <div>
                                            <!--quote-->
                                            <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                                                <p><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.Consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
                                            </blockquote>
                                            <div class="d_table w_full">
                                                <div class="d_table_cell">
                                                    <!--author photo-->
                                                    <div class="d_inline_m circle wrapper m_right_10">
                                                        <img src="images/testimonial_img_2.jpg" alt="">
                                                    </div>
                                                    <!--author name-->
                                                    <div class="d_inline_m">
                                                        <b class="fs_large d_block color_light">Marta Healy</b>
                                                        <p class="fs_medium color_grey_light_2">CEO, Company Name</p>
                                                    </div>
                                                </div>
                                                <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                                                    <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
                                                        <i class="icon-left-open-big"></i>
                                                    </button>
                                                    <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
                                                        <i class="icon-right-open-big"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--item-->
                                        <div>
                                            <!--quote-->
                                            <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                                                <p class="m_bottom_15"><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
                                                <p><i>Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</i></p>
                                            </blockquote>
                                            <div class="d_table w_full">
                                                <div class="d_table_cell">
                                                    <!--author photo-->
                                                    <div class="d_inline_m circle wrapper m_right_10">
                                                        <img src="images/testimonial_img_3.jpg" alt="">
                                                    </div>
                                                    <!--author name-->
                                                    <div class="d_inline_m">
                                                        <b class="fs_large d_block color_light">Alice Smith</b>
                                                        <p class="fs_medium color_grey_light_2">Designer, Company Name</p>
                                                    </div>
                                                </div>
                                                <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                                                    <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
                                                        <i class="icon-left-open-big"></i>
                                                    </button>
                                                    <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
                                                        <i class="icon-right-open-big"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--our clients-->
                                <section class="col-lg-6 col-md-6 t_sm_align_c" data-appear-animation="fadeInUp" data-appear-animation-delay="150">
                                    <h3 class="color_light t_align_c m_bottom_15 fw_light">Our Clients</h3>
                                    <p class="m_bottom_35 t_align_c color_grey_light_2">Donec eget tellus non erat lacinia fermentum.</p>
                                    <!--carousel-->
                                    <div class="owl-carousel m_bottom_15" data-plugin-options='{"pagination":true,"transitionStyle" : "backSlide"}' data-nav="c_nav_">
                                        <!--item-->
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--item-->
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30 m_mxs_bottom_10">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_9.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_mxs_bottom_10">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_10.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_12.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--item-->
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
                                                        <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                                            <img src="images/client_logo_6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--clients carousel nav-->
                                    <div class="d_table w_full clients_nav">
                                        <!--paginations container-->
                                        <div class="d_table_cell half_column clients_pags_container v_align_m"></div>
                                        <!--navigations-->
                                        <div class="d_table_cell half_column t_align_r v_align_m">
                                            <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all c_nav_prev">
                                                <i class="icon-left-open-big"></i>
                                            </button>
                                            <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all c_nav_next">
                                                <i class="icon-right-open-big"></i>
                                            </button>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                    <!--banner-->
                    <section class="section_offset bg_light_2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-9 col-sm-8 col-lg-offset-1" data-appear-animation="fadeInUp">
                                    <h3 class="color_dark fw_light m_bottom_15">Try The <span class="color_green">30 Day Free Trial</span> With All Features</h3>
                                    <p class="heading_4">Your 30-day money back guarantee starts after your 30-day free trial.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4" data-appear-animation="fadeInUp" data-appear-animation-delay="150">
                                    <a href="#" id="get_started" class="button_type_4 r_corners d_inline_b color_green tt_uppercase fs_large m_top_5 m_sm_top_25 tr_all">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr class="divider_type_2">
                    <!--footer-->
                    <footer role="contentinfo" class="bg_light_3" id="#footer_1">
                        <!--top part-->
                        <section class="footer_top_part">
                            <div class="container relative">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <!--blog-->
                                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_sm_bottom_30">
                                                <h5 class="color_dark fw_light m_bottom_25">From The Blog</h5>
                                                <!--post-->
                                                <article class="m_bottom_35 m_xs_bottom_20 clearfix">
                                                    <!--post image-->
                                                    <a href="#" class="d_block f_left m_right_20 r_corners wrapper">
                                                        <img src="images/blog_img_1.jpg" alt="">
                                                    </a>
                                                    <!--post title & date-->
                                                    <a href="#" class="color_dark m_bottom_5 d_block lh_small"><b>Ut tellus dolor, dapibus eget, elementum.</b></a>
                                                    <p class="fs_small color_grey"><i>June 21, 2013</i></p>
                                                </article>
                                                <!--post-->
                                                <article class="clearfix">
                                                    <!--post image-->
                                                    <a href="#" class="d_block f_left m_right_20 r_corners wrapper">
                                                        <img src="images/blog_img_2.jpg" alt="">
                                                    </a>
                                                    <!--post title & date-->
                                                    <a href="#" class="color_dark m_bottom_5 d_block lh_small"><b>Aenean auctor wisi et urna. Aliquam erat volutpat duis ac.</b></a>
                                                    <p class="fs_small color_grey"><i>June 21, 2013</i></p>
                                                </article>
                                            </div>
                                            <!--twitter-->
                                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_sm_bottom_30">
                                                <h5 class="color_dark fw_light m_bottom_20">Latest Tweets</h5>
                                                <!--tweet list-->
                                                <div class="tweets"></div>
                                                <a href="#" target="_blank" class="button_type_2 d_inline_b color_blue transparent r_corners fs_medium tr_all tw_follow">Follow Us</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <!--facebook plugin-->
                                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_sm_bottom_30">
                                                <h5 class="color_dark fw_light m_bottom_15">Join Us on Facebook</h5>
                                                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
                                            </div>
                                            <!--subscribe-->
                                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_sm_bottom_30">
                                                <h5 class="color_dark fw_light m_bottom_20">Newsletter</h5>
                                                <p class="fw_light m_bottom_25">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                                                <form class="subscribe_send_form">
                                                    <ul>
                                                        <li class="m_bottom_20">
                                                            <input type="email" name="subscribe_email" placeholder="Your email address" class="r_corners bg_light w_full fw_light">
                                                        </li>
                                                        <li>
                                                            <button class="fs_medium button_type_2 color_purple transparent r_corners tr_all">Subscribe</button>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m_bottom_45 divider_type_3 m_xs_bottom_30">
                            <div class="container">
                                <div class="row">
                                    <!--about us-->
                                    <div class="col-lg-4 col-md-4 col-sm-4 fw_light m_bottom_30">
                                        <h5 class="color_dark m_bottom_20">Shortly About Us</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Suspendisse sollicitudin velit sed leo</p>
                                    </div>
                                    <!--contact info-->
                                    <div class="col-lg-5 col-md-5 col-sm-5 m_bottom_30">
                                        <h5 class="color_dark m_bottom_20 fw_light">Contact Us</h5>
                                        <div class="row">
                                            <ul class="col-lg-6 col-md-6 col-sm-6 fw_light w_break m_xs_bottom_8">
                                                <li class="m_bottom_8">
                                                    <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                                                        <i class="icon-phone-1"></i>
                                                    </div>
                                                    (123)-456-7890
                                                </li>
                                                <li class="m_bottom_8">
                                                    <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                                                        <i class="icon-mail-alt"></i>
                                                    </div>
                                                    <a href="mailto:#" class="color_black color_pink_hover">info@companyname .com</a>
                                                </li>
                                                <li>
                                                    <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                                                        <i class="icon-skype-1"></i>
                                                    </div>
                                                    skype.name
                                                </li>
                                            </ul>
                                            <ul class="col-lg-6 col-md-6 col-sm-6 vr_list_type_5">
                                                <li class="m_bottom_15 fw_light relative">
                                                    <div class="icon_wrap_size_1 color_pink circle f_left">
                                                        <i class="icon-location"></i>
                                                    </div>
                                                    8901 Marmora Road, Glasgow, D04 89GR.
                                                </li>
                                                <li>
                                                    <a href="https://www.google.com/maps/place/%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA/@40.7056308,-73.9780035,11z/data=!3m1!4b1!4m2!3m1!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62" target="_blank" class="button_type_2 color_dark r_corners tr_all color_pink_hover d_inline_m fs_medium t_md_align_c w_break">Open in Google Maps</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--social buttons-->
                                    <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_30 m_xs_bottom_20">
                                        <h5 class="color_dark m_bottom_20 fw_light">Stay Connected</h5>
                                        <ul class="hr_list social_icons">
                                            <!--tooltip_container class is required-->
                                            <li class="m_right_15 m_bottom_15 tooltip_container">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Facebook</span>
                                                <a href="#" class="d_block facebook icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-facebook fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 m_bottom_15 tooltip_container">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Twitter</span>
                                                <a href="#" class="d_block twitter icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-twitter fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 m_bottom_15 m_sm_right_0 tooltip_container m_xs_right_15">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Google Plus</span>
                                                <a href="#" class="d_block googleplus icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-gplus-1 fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 m_md_right_0 m_sm_right_15 m_bottom_15 tooltip_container">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Pinterest</span>
                                                <a href="#" class="d_block pinterest icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-pinterest fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_bottom_15 m_md_right_15 tooltip_container">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Dribbble</span>
                                                <a href="#" class="d_block dribbble icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-dribbble fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 m_bottom_15 tooltip_container m_sm_right_0 m_xs_right_15">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Flickr</span>
                                                <a href="#" class="d_block flickr icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-flickr-1 fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 m_bottom_15 tooltip_container">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Youtube</span>
                                                <a href="#" class="d_block youtube icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-youtube-play fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 m_bottom_15 tooltip_container">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Vimeo</span>
                                                <a href="#" class="d_block vimeo icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-vimeo fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_right_15 m_bottom_15 tooltip_container m_sm_right_0 m_xs_right_15">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">Instagram</span>
                                                <a href="#" class="d_block instagram icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-instagramm fs_small"></i>
                                                </a>
                                            </li>
                                            <li class="m_bottom_15 tooltip_container">
                                                <!--tooltip-->
                                                <span class="d_block r_corners color_default tooltip fs_small tr_all">LinkedIn</span>
                                                <a href="#" class="d_block linkedin icon_wrap_size_2 circle color_grey_light_2">
                                                    <i class="icon-linkedin-squared fs_small"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--bottom part-->
                        @section('footer')
                        <section class="footer_bottom_part t_align_c color_grey bg_light_4 fw_light">
                            <p>&copy; 2014 illusion. All Rights Reserved.</p>
                        </section>
                        @show
                    </footer>
                </div>
                <!--back to top button-->
                <button id="back_to_top" class="circle icon_wrap_size_2 color_blue_hover color_grey_light_4 tr_all d_md_none">
                    <i class="icon-angle-up fs_large"></i>
                </button>

                <!--Libs-->
                <script src="plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
                <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
                <script src="plugins/jquery.appear.js"></script>
                <script src="plugins/afterresize.min.js"></script>
                <script src="plugins/jquery.easing.1.3.js"></script>
                <script src="plugins/jquery.easytabs.min.js"></script>
                <script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
                <script src="plugins/twitter/jquery.tweet.min.js"></script>
                <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
                <script src="plugins/flickr.js"></script>



                <!--Theme Initializer-->
                <script src="js/theme.plugins.js"></script>
                <script src="js/theme.js"></script>
            </body>
            </html>