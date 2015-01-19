<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A one column layout for the Bootstrapbase theme.
 *
 * @package   theme_bootstrapbase
 * @copyright 2012 Bas Brands, www.basbrands.nl
 *
 * Login  layout  with Bootstrap 2.3.2 Including Carousel and Featurette for theme_moreplus
 * @package    theme_moreplus
 * @copyright  2015 Thushara Ranepura   thushara.ranepura@gmail.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
echo $OUTPUT->doctype()
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
    <head>
        <title><?php echo $OUTPUT->page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
        <?php echo $OUTPUT->standard_head_html() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body <?php echo $OUTPUT->body_attributes(); ?>>
        <?php echo $OUTPUT->standard_top_of_body_html() ?>
        <div class="loginmainwrapper">
        </div>
        <script src="<?php echo $CFG->wwwroot . '/theme/moreplus/javascript/bootstrap-carousel.js'; ?> " type="text/javascript"></script>
        <header role="banner" class="navbar navbar-fixed-top moodle-has-zindex navbar-inverse">
            <nav role="navigation" class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand" href="<?php echo $CFG->wwwroot; ?>"><?php echo $SITE->shortname; ?></a>
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <?php echo $OUTPUT->custom_menu(); ?>
                        <ul class="nav pull-right">
                            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                            <li class="navbar-text"><?php echo $OUTPUT->login_info() ?></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id="page" style="margin-left:0px; margin-right: 0px;" >    <!-- class="container-fluid"  -->
            <header id="page-header-login" class="clearfix" style="position:relative; z-index: 200;">
                <div class="row-fluid">
                    <div class="span3">
                        <div class="main-logo ">
                            <?php if ((empty($PAGE->theme->settings->logo))) { ?>
                                <!--<h1></h1> If there is no logo uploaded, add code here  -->
                            <?php } else { ?>
                                <a href="<?php echo $CFG->wwwroot; ?>">
                                    <div class="main-logo-wrapper"></div>
            <!--                        <img  class="logostyle" src="<?php echo $PAGE->theme->setting_file_url('logo', 'logo'); ?>">-->
                                </a>
                            <?php } ?>
                        </div>
                        <div id="page-navbar" class="clearfix">
                            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
                            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
                        </div>
                        <?php echo $OUTPUT->page_heading(); ?>
                    </div>
                    
                    <div class="span3 offset6">
                         <?php if ($PAGE->theme->settings->socialmedia_status == 1) { ?>
                            <div class="socialmedia " >
                                <a href ="<?php echo $PAGE->theme->settings->facebook_link; ?>" rel=""  class=""><div id="facebook-icon"></div></a>
                                <a href ="<?php echo $PAGE->theme->settings->twitter_link; ?>" rel="" class=""><div id="twitter-icon"></div></a>
                                <a href ="<?php echo $PAGE->theme->settings->youtube_link; ?>" rel="" class="" ><div id="youtube-icon"></div></a>
                            </div>   <?php } ?>
                        <div class="loginbox-wrapper">

                            

                            <form class="form-signin" action= <?php echo '"' . $CFG->wwwroot . '/login/index.php' . '"'; ?> method="POST" >
                                <!--                             <h2 class="form-signin-heading">Please login</h2>-->
                                <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" autocomplete="off" />
                                <input type="password" class="form-control" name="password" placeholder="Password" required="" autocomplete="off" style="margin-bottom:10px;" />
                                <!--                             <label class="checkbox">
                                                                 <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                                                             </label>-->

                                <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-left:0px;margin-bottom: 5px;">Login</button>
                                
                                 <div id="logibox-actions-links" class="">
                                     <a href =<?php echo '"' . $CFG->wwwroot . '/login/signup.php?' . '"'; ?> rel=""  id="customsignup" style="display:none;">Sign Up |</a>
                                    <a href =<?php echo '"' . $CFG->wwwroot . '/login/forgot_password.php' . '"'; ?> rel="" >Forget Username/Password?</a>
                                    <div id="login-error-custom"  ></div>
                                </div>

                            </form>


                        </div>

                    </div>
                </div>
                <div id="course-header">
                    <?php echo $OUTPUT->course_header(); ?>
                </div>
            </header>

            <div id="page-content" class="row-fluid">
                <section  class="span12">
                    <?php
                    echo $OUTPUT->course_content_header();
                    $hasCarouselSlide1 = (!empty($PAGE->theme->setting_file_url('carousel_slide1', 'carousel_slide1')));
                    $hasCarouselSlide2 = (!empty($PAGE->theme->setting_file_url('carousel_slide2', 'carousel_slide2')));
                    $hasCarouselSlide3 = (!empty($PAGE->theme->setting_file_url('carousel_slide3', 'carousel_slide3')));
                    $hasCarouselSlide1Btntext = (!empty($PAGE->theme->settings->carousel_slide1_btn_text));
                    $hasCarouselSlide2Btntext = (!empty($PAGE->theme->settings->carousel_slide2_btn_text));
                    $hasCarouselSlide3Btntext = (!empty($PAGE->theme->settings->carousel_slide3_btn_text));
                    ?>
                    <div id="loginpagemain"  >

                        <div id="loginCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <?php if ($hasCarouselSlide1) { ?>
                                    <div class="item active" style="background: url(<?php echo $PAGE->theme->setting_file_url('carousel_slide1', 'carousel_slide1'); ?>) no-repeat left top; background-size: cover;"  >
                                    <?php } else { ?>
                                        <div class="item active" style="background: url('http://placehold.it/1200X800&text=Image+Min+Res-(1200x800)px') no-repeat left center; background-size: cover;"  >
                                        <?php } ?>
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <h1><?php echo $PAGE->theme->settings->carousel_slide1_heading; ?></h1>
                                                <p class="lead"><?php echo $PAGE->theme->settings->carousel_slide1_description; ?></p>
                                                <?php if ($hasCarouselSlide1Btntext) { ?>
                                                    <a class="btn btn-large btn-success" href="<?php echo $PAGE->theme->settings->carousel_slide1_link; ?>">
                                                        <?php echo $PAGE->theme->settings->carousel_slide1_btn_text; ?></a> <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($hasCarouselSlide2) { ?>
                                        <div class="item "style="background: url(<?php echo $PAGE->theme->setting_file_url('carousel_slide2', 'carousel_slide2'); ?>) no-repeat left top; background-size: cover;" >
                                            <div class="container">
                                                <div class="carousel-caption">
                                                    <h1><?php echo $PAGE->theme->settings->carousel_slide2_heading; ?></h1>
                                                    <p class="lead"><?php echo $PAGE->theme->settings->carousel_slide2_description; ?></p>
                                                    <?php if ($hasCarouselSlide2Btntext) { ?>
                                                        <a class="btn btn-large btn-success" href="<?php echo $PAGE->theme->settings->carousel_slide2_link; ?>">
                                                            <?php echo $PAGE->theme->settings->carousel_slide2_btn_text; ?></a> <?php } ?>
                                                </div>
                                            </div>
                                        </div> <?php } ?>
                                    <?php if ($hasCarouselSlide3) { ?>
                                        <div class="item " style="background: url(<?php echo $PAGE->theme->setting_file_url('carousel_slide3', 'carousel_slide3'); ?>) no-repeat left top; background-size: cover;" >
                                            <div class="container">
                                                <div class="carousel-caption">
                                                    <h1><?php echo $PAGE->theme->settings->carousel_slide3_heading; ?></h1>
                                                    <p class="lead"><?php echo $PAGE->theme->settings->carousel_slide3_description; ?></p>
                                                    <?php if ($hasCarouselSlide3Btntext) { ?>
                                                        <a class="btn btn-large btn-success" href="<?php echo $PAGE->theme->settings->carousel_slide3_link; ?>">
                                                            <?php echo $PAGE->theme->settings->carousel_slide3_btn_text; ?></a><?php } ?>
                                                </div>
                                            </div>
                                        </div><?php } ?>
                                </div>
                                <a class="left carousel-control" href="#loginCarousel" data-slide="prev">‹</a>
                                <a class="right carousel-control" href="#loginCarousel" data-slide="next">›</a>
                            </div>
                      </div>
                   </div>
                    <?php if ($PAGE->theme->settings->login_featurette_status == 1) {; ?>
                        <div class="container">
                            <hr style="border:none">
                            <div class="featurette">
                                <img class="featurette-image pull-right" src="<?php echo $PAGE->theme->setting_file_url('login_featurette_image', 'login_featurette_image'); ?>">
                                <h2 class="featurette-heading"><?php echo $PAGE->theme->settings->login_featurette_heading; ?>
                                    <span class="muted"><?php echo $PAGE->theme->settings->login_featurette_heading_muted; ?></span></h2>
                                <p class="lead"><?php echo $PAGE->theme->settings->login_featurette_text; ?></p>
                            </div>
                        </div>

                    <?php } ?>
                </section>
                <?php
                echo '<div class="moodleloginmaincontent" style="display:none;">' . $OUTPUT->main_content() . '</div>';
                //echo $OUTPUT->course_content_footer();
                ?></div>
        </div>

        <footer id="page-footer">
            <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
            <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
            <?php
            echo $OUTPUT->login_info();
            echo $OUTPUT->home_link();
            echo $OUTPUT->standard_footer_html();
            ?>

        </footer>

        <script language="JavaScript" type="text/javascript">
            var intervaltime = <?php echo $PAGE->theme->settings->carousel_slide_time; ?>;
            intervaltime *= 1000;
            $(document).ready(function () {
                $('.carousel').carousel({
                    interval: intervaltime
                });
                if ($('#loginerrormessage').length != 0) {
                    $("#login-error-custom").text($('#loginerrormessage').text());
                    $('#login-error-custom').css("visibility", "visible");
                }
                if($('#signup').length > 0){
                    $('#customsignup').css("display", "initial");
                     $('#logibox-actions-links').removeClass('btn-group');
                }
            });


        </script>


        <?php echo $OUTPUT->standard_end_of_body_html() ?>

    </div>
</body>
</html>



