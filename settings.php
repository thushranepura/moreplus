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
// GNU General Public License for moreplus details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme More settings.
 *
 * Each setting that is defined in the parent theme Clean should be
 * defined here too, and use the exact same config name. The reason
 * is that theme_moreplus does not define any layout files to re-use the
 * ones from theme_clean. But as those layout files use the function
 * {@link theme_clean_get_html_for_settings} that belong to Clean,
 * we have to make sure it works as expected by having the same settings
 * in our theme.
 *
 * @see        theme_clean_get_html_for_settings
 * @package    theme_more
 * @copyright  2014 Frédéric Massart
 * @package    theme_moreplus
 * @copyright  2015 Thushara Ranepura   thushara.ranepura@gmail.com  
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null;
defined('MOODLE_INTERNAL') || die;



 $ADMIN->add('themes', new admin_category('theme_moreplus', 'MorePlus'));  

 if (is_siteadmin()) {
     
     
    $tempsettings = new admin_settingpage('theme_moreplus_generalsettings', get_string('generalsettings', 'theme_moreplus')); 
     
     // Logo file setting.
    $name = 'theme_moreplus/logo';
    $title = get_string('logo','theme_moreplus');
    $description = get_string('logodesc', 'theme_moreplus');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // Custom CSS file.
    $name = 'theme_moreplus/customcss';
    $title = get_string('customcss', 'theme_moreplus');
    $description = get_string('customcssdesc', 'theme_moreplus');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // Footnote setting.
    $name = 'theme_moreplus/footnote';
    $title = get_string('footnote', 'theme_moreplus');
    $description = get_string('footnotedesc', 'theme_moreplus');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    
     
     $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
     $ADMIN->add('theme_moreplus', $tempsettings);
    
    
    $tempsettings = new admin_settingpage('theme_moreplus_colorsettings', get_string('colorsettings', 'theme_moreplus'));

   // @textColor setting.
    $name = 'theme_moreplus/textcolor';
    $title = get_string('textcolor', 'theme_moreplus');
    $description = get_string('textcolor_desc', 'theme_moreplus');
    $default = '#333366';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // @linkColor setting.
    $name = 'theme_moreplus/linkcolor';
    $title = get_string('linkcolor', 'theme_moreplus');
    $description = get_string('linkcolor_desc', 'theme_moreplus');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // @bodyBackground setting.
    $name = 'theme_moreplus/bodybackground';
    $title = get_string('bodybackground', 'theme_moreplus');
    $description = get_string('bodybackground_desc', 'theme_moreplus');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    
    // Background image setting.
    $name = 'theme_moreplus/backgroundimage';
    $title = get_string('backgroundimage', 'theme_moreplus');
    $description = get_string('backgroundimage_desc', 'theme_moreplus');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // Background repeat setting.
    $name = 'theme_moreplus/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_moreplus');
    $description = get_string('backgroundrepeat_desc', 'theme_moreplus');;
    $default = 'repeat';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_moreplus'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_moreplus'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_moreplus'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_moreplus'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // Background position setting.
    $name = 'theme_moreplus/backgroundposition';
    $title = get_string('backgroundposition', 'theme_moreplus');
    $description = get_string('backgroundposition_desc', 'theme_moreplus');
    $default = '0';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_moreplus'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_moreplus'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_moreplus'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_moreplus'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_moreplus'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_moreplus'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_moreplus'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_moreplus'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_moreplus'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // Background fixed setting.
    $name = 'theme_moreplus/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_moreplus');
    $description = get_string('backgroundfixed_desc', 'theme_moreplus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // Main content background color.
    $name = 'theme_moreplus/contentbackground';
    $title = get_string('contentbackground', 'theme_moreplus');
    $description = get_string('contentbackground_desc', 'theme_moreplus');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    // Secondary background color.
    $name = 'theme_moreplus/secondarybackground';
    $title = get_string('secondarybackground', 'theme_moreplus');
    $description = get_string('secondarybackground_desc', 'theme_moreplus');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);

    
    
     $ADMIN->add('theme_moreplus', $tempsettings);
    
  
     
     
     //Login Page Carousel -------------------------
     
     
     
    $tempsettings = new admin_settingpage('theme_moreplus_loginpagecarouselsettings', get_string('loginpagecarouselsettings', 'theme_moreplus'));
    
    //Carousel Slide time
    $name = 'theme_moreplus/carousel_slide_time';
    $title = get_string('carousel_slide_time','theme_moreplus');
    $description = get_string('carousel_slide_timedesc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, $defaultsetting= 1,$paramtype=PARAM_INT); 
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
   
    // Carousel Slide 1
    $name = 'theme_moreplus/carousel_slide1';
    $title = get_string('carousel_slide1','theme_moreplus');
    $description = get_string('carousel_slide1desc', 'theme_moreplus');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'carousel_slide1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 1 Caption Heading 
    $name = 'theme_moreplus/carousel_slide1_heading';
    $title = get_string('carousel_slide1_heading','theme_moreplus');
    $description = get_string('carousel_slide1_heading_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, 'Example Headline.');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 1 Caption Descrpition  
    $name = 'theme_moreplus/carousel_slide1_description';
    $title = get_string('carousel_slide1_description','theme_moreplus');
    $description = get_string('carousel_slide1_description_desc', 'theme_moreplus');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 1 Button Link  
    $name = 'theme_moreplus/carousel_slide1_link';
    $title = get_string('carousel_slide1_link','theme_moreplus');
    $description = get_string('carousel_slide1_link_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    
    // Carousel Slide 1 Button Text  
    $name = 'theme_moreplus/carousel_slide1_btn_text';
    $title = get_string('carousel_slide1_btn_text','theme_moreplus');
    $description = get_string('carousel_slide1_btn_text_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    
    // Carousel Slide 2
    $name = 'theme_moreplus/carousel_slide2';
    $title = get_string('carousel_slide2','theme_moreplus');
    $description = get_string('carousel_slide2desc', 'theme_moreplus');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'carousel_slide2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 2 Caption Heading 
    $name = 'theme_moreplus/carousel_slide2_heading';
    $title = get_string('carousel_slide2_heading','theme_moreplus');
    $description = get_string('carousel_slide2_heading_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, 'Example Headline.');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 2 Caption Descrpition  
    $name = 'theme_moreplus/carousel_slide2_description';
    $title = get_string('carousel_slide2_description','theme_moreplus');
    $description = get_string('carousel_slide2_description_desc', 'theme_moreplus');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 2 Button Link  
    $name = 'theme_moreplus/carousel_slide2_link';
    $title = get_string('carousel_slide2_link','theme_moreplus');
    $description = get_string('carousel_slide2_link_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    
    // Carousel Slide 2 Button Text  
    $name = 'theme_moreplus/carousel_slide2_btn_text';
    $title = get_string('carousel_slide2_btn_text','theme_moreplus');
    $description = get_string('carousel_slide2_btn_text_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    
    // Carousel Slide 3
    $name = 'theme_moreplus/carousel_slide3';
    $title = get_string('carousel_slide3','theme_moreplus');
    $description = get_string('carousel_slide3desc', 'theme_moreplus');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'carousel_slide3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 3 Caption Heading 
    $name = 'theme_moreplus/carousel_slide3_heading';
    $title = get_string('carousel_slide3_heading','theme_moreplus');
    $description = get_string('carousel_slide3_heading_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, 'Example Headline.');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 3 Caption Descrpition  
    $name = 'theme_moreplus/carousel_slide3_description';
    $title = get_string('carousel_slide3_description','theme_moreplus');
    $description = get_string('carousel_slide3_description_desc', 'theme_moreplus');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    // Carousel Slide 3 Button Link  
    $name = 'theme_moreplus/carousel_slide3_link';
    $title = get_string('carousel_slide3_link','theme_moreplus');
    $description = get_string('carousel_slide3_link_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    
    // Carousel Slide 3 Button Text  
    $name = 'theme_moreplus/carousel_slide3_btn_text';
    $title = get_string('carousel_slide3_btn_text','theme_moreplus');
    $description = get_string('carousel_slide3_btn_text_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
     $ADMIN->add('theme_moreplus', $tempsettings);
    
     //Login Page Carousel End-------------------------
    
    
    //Login Page featurette---------------
     
     
    $tempsettings = new admin_settingpage('theme_moreplus_loginpagefeaturette', get_string('loginpagefeaturette', 'theme_moreplus'));
    
    $name = 'theme_moreplus/login_featurette_status';
    $title = get_string('login_featurette_status','theme_moreplus');
    $description = get_string('login_featurette_status_desc', 'theme_moreplus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    $name = 'theme_moreplus/login_featurette_heading';
    $title = get_string('login_featurette_heading','theme_moreplus');
    $description = get_string('login_featurette_heading_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    $name = 'theme_moreplus/login_featurette_heading_muted';
    $title = get_string('login_featurette_heading_muted','theme_moreplus');
    $description = get_string('login_featurette_heading_muted_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    $name = 'theme_moreplus/login_featurette_text';
    $title = get_string('login_featurette_text','theme_moreplus');
    $description = get_string('login_featurette_text_desc', 'theme_moreplus');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    
    $name = 'theme_moreplus/login_featurette_image';
    $title = get_string('login_featurette_image','theme_moreplus');
    $description = get_string('login_featurette_imagedesc', 'theme_moreplus');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'login_featurette_image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
     //Login Page featurette end---------------
   
     //Social media 
    
    $name = 'theme_moreplus/socialmedia_status';
    $title = get_string('socialmedia_status','theme_moreplus');
    $description = get_string('socialmedia_status_desc', 'theme_moreplus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    $name = 'theme_moreplus/facebook_link';
    $title = get_string('facebook_link','theme_moreplus');
    $description = get_string('facebook_link_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    $name = 'theme_moreplus/twitter_link';
    $title = get_string('twitter_link','theme_moreplus');
    $description = get_string('twitter_link_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    $name = 'theme_moreplus/youtube_link';
    $title = get_string('youtube_link','theme_moreplus');
    $description = get_string('youtube_link_desc', 'theme_moreplus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $tempsettings->add($setting);
    
    
    $ADMIN->add('theme_moreplus', $tempsettings);
    
   
}

    
    




    
