<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo lang('head_title'); ?> </title>
        <!-- Librairies -->
        <?php echo theme_js('jquery-1.9.1.js', true);?>
        <?php  echo theme_css('bootstrap.css', true);?>       
        <?php  echo theme_css('font-awesome.min.css', true); ?>
        <?php echo admin_css('libs/nanoscroller.css', true); ?>
        <?php echo admin_css('compiled/theme_styles.css', true); ?>
        <?php echo admin_css('libs/datepicker.css', true); ?>
        <?php echo admin_css('libs/daterangepicker.css', true); ?>
        <?php echo admin_css('libs/bootstrap-timepicker.css', true); ?>
        <?php echo admin_css('libs/select2.css', true); ?>
        <?php echo admin_css('libs/google-fonts.css', true); ?>
        <!-- Favicon -->        
        <link rel="shortcut icon" href="<?php echo theme_img('favicon.ico');?>">
        <script type="text/javascript">
        var baseurl = "<?php print base_url(); ?>";

        </script>
    </head>
    <body>
        <?php
            $this->CI = & get_instance();
            $admin_session['admin_session'] = $this->CI->admin_session->userdata('admin');
            $name = $admin_session['admin_session']['name'];
            $admin_img = (array) $this->auth->get_admin($admin_session['admin_session']['id']);
        ?>
        <?php $admin_url = base_url($this->config->item('admin_folder')) . '/'; ?>
        <!--Smooth Scroll-->
        <?php echo admin_js('jquery.livequery.js', true); ?>
        <?php echo admin_js('jquery.timeago.js', true); ?>
        <script type="text/javascript" language="javascript">
            $("span.time").livequery(function () {
                $(this).timeago();
            });
        </script>

        <div id="theme-wrapper">

            <header class="navbar" id="header-navbar">
                <div class="container">
                
                   
                        <div id="logo" class="navbar-brand dropdown-toggle">
                            <a href="<?php echo base_url('admin/dashboard'); ?>" id="logo">
    <img src="<?php echo theme_logo_img($this->logo->name); ?>" style="width:200px; height:90px;" alt="" class="normal-logo logo-white"/>
</a>
 
                        </div>
                             
                        <div class="clearfix">
                        <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                            <span class="sr-only"><?php echo lang('toggle_navigation');?></span>
                            <span class="fa fa-bars"></span>
                        </button>

                        <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                            <ul class="nav navbar-nav pull-left">
                                <li>
                                    <a class="btn" id="make-small-nav">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <li class="dropdown hidden-xs">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bell"></i>
                                    </a>
                                    <ul class="dropdown-menu notifications-list">
                                        <li class="pointer">
                                            <div class="pointer-inner">
                                                <div class="arrow"></div>
                                            </div>
                                        </li>
                                        <li class="item-header">
                                       <?php echo lang('you_have');?><?= sizeof($this->trips)?><?php echo lang('new_message');?>
                                        </li>
                                        <?php
                                        if ($this->trips) {
                                            foreach ($this->trips as $trips) {
                                                ?>
                                                <li class="item">
                                                    <a href="<?= base_url('admin/trip') ?>">
                                                        <i class="fa fa-plus"></i>
                                                        <span class="content"><?= 'New trip posted ' . $trips['source'] . ' to ' . $trips['destination'] ?></span>
                                                        <span class="time" title="<?= $trips['trip_created_date'] ?>"></span>
                                                    </a>
                                                </li>
                                            <?php }
                                        } ?>
                                        <li class="item-footer">
                                            <a href="#">                                        
                                            </a>
                                        </li>
                                    </ul>
                                </li>                       
                                <li class="dropdown hidden-xs 
                                    <?php if ($page_title ==  lang('country')      || 
                                            $page_title ==  lang('country_form')     || 
                                            $page_title ==  lang('currency')     || 
                                            $page_title ==  lang('currency_form')     || 
                                            $page_title ==  lang('language')     || 
                                            $page_title ==  lang('language_form')     || 
                                            $page_title ==  lang('vehicle_brand')|| 
                                            $page_title ==  lang('vehicle_brand_forms')|| 
                                            $page_title ==  lang('vehicles')     || 
                                            $page_title ==  lang('vehicles_form')  || 
                                            $page_title ==  lang('radius_page')  || 
                                            $page_title ==  lang('radius_form') ) 
                                            echo 'active'; ?>"> 
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        <?php echo lang('master');?>
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item <?php if ($page_title ==  lang('country')||$page_title ==  lang('country_form')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>country">
                                                <i class="fa  fa-arrows-alt"></i> 
                                                <?php echo lang('country');?>
                                            </a>
                                        </li>
                                        <li class="item <?php if ($page_title ==  lang('currency')||$page_title ==  lang('currency_form')) echo 'active'; ?>">
                                                <a href="<?php echo $admin_url; ?>currency">
                                                        <i class="fa fa-archive"></i> 
                                                        <?php echo lang('currency');?>
                                                </a>
                                        </li>
                                        <li class="item <?php if ($page_title ==  lang('language')||$page_title ==  lang('language_form')) echo 'active'; ?>">
                                                <a href="<?php echo $admin_url; ?>language">
                                                        <i class="fa fa-archive"></i> 
                                                        <?php echo lang('language');?>
                                                </a>
                                        </li>
                                        <li class="item <?php if ($page_title ==  lang('vehicle_brand')||$page_title ==  lang('vehicle_brand_forms')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>category">
                                                <i class="fa  fa-arrows-alt"></i> 
                                                <?php echo lang('vehicle_brand');?>
                                            </a>
                                        </li>
                                        <li class="item <?php if ($page_title ==  lang('vehicles')||$page_title ==  lang('vehicles_form')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>vehicle">
                                                <i class="fa  fa-car"></i> 
                                                <?php echo lang('vehicles');?>
                                            </a>
                                        </li>
                                        <li class="item <?php if ($page_title ==  lang('radius')||$page_title ==  lang('radius_form')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>radius">
                                                <i class="fa fa-circle-o-notch"></i> 
                                                <?php echo lang('radius');?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown hidden-xs 
                                    <?php if (  $page_title ==  lang('traveller_form')      || 
                                                $page_title ==  lang('traveler_user_list')  ) 
                                                echo 'active'; ?>">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        <?php echo lang('users');?>
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item <?php if ($page_title ==  lang('traveller_form')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>traveller/form">
                                                <i class="fa fa-plus"></i>
                                                 <?php echo lang('add_site_user');?>
                                            </a>
                                        </li>
                                        <li class="item <?php if ($page_title ==  lang('traveler_user_list')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>traveller">
                                                <i class="fa fa-male"></i>
                                                 <?php echo lang('list_site_users');?>
                                            </a>
                                        </li>
                                        <!-- <li class="item <?php if ($page_title ==  lang('list_site_users_details')) echo 'active'; ?>">
                                                <a href="<?php echo $admin_url; ?>traveller/details">
                                                         <?php echo lang('list_site_users_details');?>
                                                </a>
                                        </li> -->
                                    </ul>
                                </li>

                                <li class="dropdown hidden-xs 
                                    <?php if (  $page_title ==  lang('admins') || $page_title ==  lang('admins_form')) 
                                                echo 'active'; ?>">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        <?php echo lang('admin_management');?>
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item <?php if ($page_title ==  lang('admins')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>admin"><i class="fa fa-users"></i> <?php echo lang('admin');?></a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown hidden-xs 
                                    <?php if (  $page_title ==  lang('banners')    || 
                                                $page_title ==  lang('pages')      || 
                                                $page_title ==  lang('page_form')      || 
                                                $page_title ==  lang('testimonials_form')      || 
                                                $page_title ==  lang('testimonials')) 
                                                echo 'active'; ?>">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        <?php echo lang('cms');?>
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item <?php if ($page_title ==  lang('pages') || $page_title ==  lang('page_form')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>pages">
                                                <i class="fa fa-file"></i> 
                                                <?php echo lang('pages');?>
                                            </a>
                                        </li>
                                        <li class="item <?php if ($page_title ==  lang('testimonials')|| $page_title ==  lang('testimonials_form')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>testimonials">
                                                <i class="fa fa-sliders"></i> 
                                                <?php echo lang('testimonials');?>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown hidden-xs 
                                    <?php if (  $page_title ==  lang('trips')) 
                                                echo 'active'; ?>">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        <?php echo lang('trips');?>
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item <?php if ($page_title ==  lang('trips')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>trip">
                                                <i class="fa  fa-map-marker"></i> 
                                                <?php echo lang('list_of_trips');?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown hidden-xs 
                                    <?php if (  $page_title ==  lang('email_template') || 
                                                $page_title ==  lang('email_template_form') || 
                                                $page_title ==  lang('subscriber')) 
                                                echo 'active'; ?>">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                       <?php echo lang('notification');?>
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item <?php if ($page_title ==  lang('email_template') || $page_title ==  lang('email_template_form') ) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>settings">
                                                <i class="fa fa-inbox"></i> 
                                                <?php echo lang('email_template');?>
                                            </a>
                                        </li>
                                        <li class="item <?php if ($page_title ==  lang('subscriber')) echo 'active'; ?>">
                                            <a href="<?php echo $admin_url; ?>subscriber">
                                                <i class="fa fa-bookmark-o"></i> 
                                                 <?php echo lang('subscriber');?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="nav-no-collapse pull-right" id="header-nav">
                            <ul class="nav navbar-nav pull-right">
                                <!-- Profile image admin-->
                               <span id="user-left-box" >
                                    <span id="ProfilePic">    
                                    <img class="admin-picture" alt="" id="previousImage" src="<?php if(!empty($admin_img['admin_img'])){ echo admin_profile_img($admin_img['admin_img']); }else { echo theme_img('default.png'); }?>" />
                                    </span>  
                                </span>  
                                <li class="dropdown profile-dropdown">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="hidden-xs">
                                        <?php echo lang('welcome');?> <?= $name; ?> </span> <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="<?php echo base_url('admin/admin/edit_profile'); ?>"><i class="fa fa-user"></i><?php echo lang('edit_profile');?></a></li>
                                        <li><a href="<?php echo base_url('admin/admin/edit_settings'); ?>"><i class="fa fa-wrench"></i><?php echo lang('edit_settings');?></a></li> 
                                        <li><a href="<?php echo base_url('admin/admin/changepwd_form'); ?>"><i class="fa fa-cog"></i><?php echo lang('change_password');?></a></li>                     
                                        <li><a href="<?php echo base_url('admin/admin/change_logo'); ?>"><i class="fa fa-cog"></i><?php echo lang('change_logo');?></a></li>
                                        <li><a href="#" id="profile_pic"><i class="fa fa-user"></i><?php echo lang('edit_photo');?></a>
                                        </li>                                                
                                        <li><a href="<?php echo base_url('admin/login/logout'); ?>"><i class="fa fa-power-off"></i><?php echo lang('logout');?></a></li>
                               </ul>
 <?php 
        $attributes = array('id' => 'profileimageform');
        echo form_open_multipart(base_url('admin/admin/profile_image_upload'),$attributes);?>
    <div style="display:none;">
        <input type="file"  name="photoimg" id="profilephotoimg" class="custom-file-input " original-title="Upload Profile Picture">
    </div></form>
                                </li>
                                <li class="hidden-xxs" >
                                    <a class="btn" href="<?php echo base_url('admin/login/logout'); ?>" >
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </header>

            <script type="text/javascript">
  $(document).ready(function() {  
    /* Uploading Profile Image */
    $('body').on('click','#profile_pic', function()
    {
        $( "#profilephotoimg" ).trigger( "click" );
    });
    
    /* Uploading timelineProfile  Image left menu */
    $('body').on('change','#profilephotoimg', function()
    {
        $("#profileimageform").ajaxForm({target: '#ProfilePic',
            beforeSubmit:function(){
            },
            success:function(){
                $("#previousImage").hide();             
            },
            error:function(){
            
            } }).submit();
    });
   });
</script>
<?php echo theme_js('jquery.wallform.js',true) ?>
            <div id="page-wrapper" class="container">

                <div class="row">
                    <?php
                    //lets have the flashdata overright "$message" if it exists
                    if ($this->session->flashdata('message')) {
                        $message = $this->session->flashdata('message');
                    }

                    if ($this->session->flashdata('error')) {
                        $error = $this->session->flashdata('error');
                    }

                    if (function_exists('validation_errors') && validation_errors() != '') {
                        $error = validation_errors();
                    }
                    ?>

                    <div class="main-box-body clearfix">
                    <?php if (!empty($message)): ?>
                            <div class="alert alert-success fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-check-circle fa-fw fa-lg"></i>
                                <strong><?php echo lang('well_done');?></strong> <?php echo $message; ?>
                            </div>
<?php endif; ?>

                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-times-circle fa-fw fa-lg"></i>
                                <strong><?php echo lang('on_snap');?></strong><?php echo $error; ?>
                            </div>              
<?php endif; ?>
                    </div>

