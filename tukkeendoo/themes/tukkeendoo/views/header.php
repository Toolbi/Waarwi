<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head>
<?php 
if(!empty($description)){
?>
<meta name="description" content="<?=$description?>">
<?php
}
?>
<title><?php echo lang('head_title'); ?> </title>
<!-- must have -->
<?php echo theme_js('jquery-1.9.1.js', true);?>
<!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<?php echo theme_js('bootstrap.js', true);?>

    <?php  echo theme_css('bootstrap.css', true);?>
    <?php  echo theme_css('font-awesome.min.css', true);?>
	<?php  echo theme_css('bootstrap-theme.css', true);?>
<?php  echo theme_css('style.css', true);?>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>



<script type="text/javascript">
$(document).ready(function(){
  $(".my-account-button").click(function(){
	$(".my-account-details").fadeToggle("fast", function(){
	  if($(".my-account-details").css('display') == "none")
		$(".my-account-button").removeClass("active");
	  else
		$(".my-account-button").addClass("active");
	});
  });
});
</script>
<link rel="shortcut icon" href="<?php echo theme_img('favicon.ico');?>">
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1618861935012037";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
<style type="text/css"> iframe[id^='twitter-widget-0']{ width:280px !important;} </style>

                                       
<div class="container-main header-bg">
  <div class="container">
     <div class="logo"> 
     
     <a href="<?php echo base_url('home');?>"id="logo" class="navbar-brand">
     <img src="<?php echo theme_logo_img($this->logo->name)?>"style="width:180px;"> </a> </div>
        <div class="pull-right head-rht">  
                  
       	 <?php 
				$this->CI =& get_instance();
				$carpool_session['carpool_session']		= $this->CI->carpool_session->userdata('carpool');
				//print_r($carpool_session['carpool_session']	);
			   $id	= $carpool_session['carpool_session']['user_id'];
			   $profile	= $this->auth_travel->get_travel($id);
				if($this->auth_travel->is_logged_in(false, false)):				
				?>	
            <ul class="top-nav new-top-nav pull-right">
            <!-- Publier un trajet -->
              <div class="top-trip-add">
                <a href="<?php echo base_url('addtrip/step_1');?>" class="top-trip ">
                  <h2 class="size16"> <?php echo lang('do_you_have_car');?> </h2>

                  <p class="size20">
                    <strong><?php echo lang('post_a_trip');?></strong>
                  </p>
                  <i class=" size16 fa fa-car"></i> <i class="size16 fa fa-bus"></i>
                </a>  
              </div>

              <li>
                <div id="my-account">
                  <div class="my-account-button">  <div class="profile-img"> <img src="<?php if($profile->user_profile_img) { echo theme_profile_img($profile->user_profile_img); } else { echo theme_img('default.png');  }?>" width="30" height="30"> </div> <span> <?=$profile->user_first_name.' '.$profile->user_last_name ?> </span> <p> <img src="<?php echo theme_img('drop-white.png')?>"> </p>  </div>
                  <div class="my-account-details" style="display: none">
                    <ul class="nav-set">
                      <li><a href="<?php echo base_url('profile');?>"> <img src="<?php echo theme_img('driver-ico.png')?>"> <?php echo lang('profile');?> </a></li>
                      <li><a href="<?php echo base_url('profile#settings');?>"> <img src="<?php echo theme_img('settings-ico.png')?>"> <?php echo lang('settings');?> </a></li>
                      <li><a href="<?php echo base_url('profile#my-cars-info');?>"> <img src="<?php echo theme_img('mail-ico.png')?>" width="13"> <?php echo lang('my_vehicles');?> </a></li>
                       <li><a href="<?php echo base_url('addtrip');?>"> <img src="<?php echo theme_img('mail-ico.png')?>" width="13"> <?php echo lang('my_trips');?> </a></li>
						<li><a href="<?php echo base_url('rating');?>"> <img src="<?php echo theme_img('star-ico.png')?>" width="13"> <?php echo lang('my_ratings'); ?> </a></li>
						<li><a href="<?php echo base_url('addtrip/enquery_list');?>"> <img src="<?php echo theme_img('star-ico.png')?>" width="13"> <?php echo lang('my_enquiries_message'); ?> <span class="badge badge-danger">3</span></a></li>
						
                      <li><a href="<?php echo base_url('login/logout');?>"> <img src="<?php echo theme_img('logout-ico.png')?>" width="13"> <?php echo lang('logout');?> </a></li>
                    </ul>
                  </div>
                </div>
              </li>
              
              <?php else: ?>
                <ul class="top-nav new-top-nav pull-right">
                <li>  <a href="<?php echo base_url('register');?>" class="btn ride bouton"><i class="fa fa-car"></i> <?php echo lang('post_a_trip');?> </a> </li>
                <!-- <li> <a href="<?php echo base_url('login');?>" class="btn ride top-login"><i class="fa fa-user"></i> <?php echo lang('login');?> </a> </li> -->
                <li> <a href="<?php echo base_url('register');?>" class="btn ride top-signup"><i class="fa fa-plus"></i> <?php echo lang('register');?> </a> </li>
                
                </ul>
            <?php endif; ?>
            </ul>
    </div>
  </div>
</div>
