<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="tukkeendoo, rideshare, travel, car pool, car pooling, car, commute, vanpools, carpools, commuter services, dynamic ridesharing" name="keywords">
<meta content="www.tukkeendoo.com | India's largest ridesharing network" name="description">
<link type="image/png; charset=binary" href="http://www.tukkeendoo.com/tukkeendoo/themes/tukkeendoo/assets/img/favicon.ico" rel="shortcut icon">
<title><?php echo lang('head_title'); ?></title>

<?php  echo theme_css('style.css', true);?>
<?php echo theme_js('jquery-1.6.1.js', true);?>
<?php echo theme_js('jquery.min.js', true);?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<?php echo theme_js('jquery.ui.touch-punch.min.js', true);?>
<?php echo theme_js('ddmenu.js', true);?>
<?php echo theme_js('bootstrap.min.js', true);?>
<?php echo theme_js('common.js', true);?>
<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>

<div class="header">
	<div class="header_wrap">
    	<div class="logo"> <a href="<?php echo base_url('home');?>"> <img src="<?php echo theme_img('tukkeendoo-logo.png') ?>" title="Travel Eazy" alt="Travel Eazy Logo"> </a> </div>
		
       <div class="userlogin">
	   <?php 
				$this->CI =& get_instance();
				$carpool_session['carpool_session']		= $this->CI->carpool_session->userdata('carpool');
			   $id	= $carpool_session['carpool_session']['user_id'];
			   $profile	= $this->auth_travel->get_travel($id);
				if($this->auth_travel->is_logged_in(false, false)):				
				?>	<div class="welcome"><a href="<?php echo base_url('profile');?>"> <?php lang('welcome'); ?> <?=$profile->user_first_name?></a></div> <ul> 
                    <?php /*?><li> <a href="#">Sign In</a> </li><?php */?>
					<li><a href="/" alt="home"><?php lang('admin_home'); ?></a></li>
					<li> <a href="<?php echo base_url('vechicle/vechicleform');?>"><?php echo lang('add_vehicle'); ?></a> </li>
                    <li class="post_ride"> <a href="<?php echo base_url('addtrip/step_1');?>"><?php echo lang('post_a_ride'); ?></a> </li> 
					<li> <a href="<?php echo base_url('login/logout');?>"><?php lang('logout'); ?></a> </li></ul> 
                <?php else: ?>
                 <ul class="notregi">
				    <li><a href="/" alt="home"><?php lang('admin_home'); ?></a></li>
                    <li> <a href="<?php echo base_url('register');?>"><?php echo lang('login'); ?></a> </li>
                    <li> <a href="<?php echo base_url('login');?>"><?php echo lang('login'); ?></a> </li>
                    <li class="post_ride"> <a href="<?php echo base_url('register');?>"><?php echo lang('post_a_ride'); ?></a> </li>
                </ul>
            <?php endif; ?>
			</div>
    </div>
</div>