<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head>
<title><?php echo lang('head_title'); ?> </title>
<!-- JS -->
<?php echo theme_js('jquery-1.9.1.js', true);?>
<?php echo theme_js('bootstrap.js',true); ?>
<?php echo theme_js('bootstrap-datepicker.js',true); ?>
<?php echo theme_js('bootstrap-datepicker.fr.js',true); ?>
<script type="text/javascript" src="<?php echo theme_js('jquery.validate.js');?>">
</script>
<script type="text/javascript">
var baseurl = "<?php print base_url(); ?>";  
var country = '<?php print ($this->config->item('country_code') != '')?$this->config->item('country_code'):''; ?>';
</script>


<script src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places&language=en"></script>
<!-- CSS -->
<?php  echo theme_css('bootstrap.css', true);?>
<?php  echo theme_css('bootstrap-datepicker.css', true);?>
<?php  echo theme_css('style.css', true);?>
<?php  echo theme_css('bannerscollection_kenburns.css', true);?>
<!-- <?php echo admin_css('libs/font-awesome.css', true); ?> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php  echo theme_css('bootstrap-theme.css', true);?>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>

<?php  echo theme_js('home.js', true);?>


<?php echo theme_js('jquery.ui.touch-punch.min.js', true);?>
<?php echo theme_js('bannerscollection_kenburns.js', true);?>
<!--[if IE]><?php echo theme_js('excanvas.compiled', true);?><![endif]-->
<!-- must have -->
  <script>
    jQuery(function() {
      jQuery('#bannerscollection_kenburns_generous').bannerscollection_kenburns({
        skin: 'generous',
        responsive:true,
        width: 1920,
        height: 580,
        width100Proc:true,
        thumbsOnMarginTop:14,
        thumbsWrapperMarginTop: -110,
        autoHideBottomNav:false,
        showBottomNav: false,
        showCircleTimer:false,
        showCircleTimerIE8IE7:false,
        showAllControllers:false
      });         
    });
  </script>
    <?php echo theme_js('jquery.ddslick.js', true);?>
    <?php echo theme_js('script.js', true);?>
    
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
<!-- Date picker FR -->
<script type="text/javascript">
    $(function () {
      $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true,
            language: "fr",
      }).datepicker('update', new Date());;
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

  <div class="container-fluid pull-top topbg paddingtopbot10">
  <div class="container">
    <div class="row">  
      <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 tophdr"> <a href="<?php echo base_url('home');?>" id="logo" class="navbar-brand"> 
        <img src="<?php echo theme_logo_img($this->logo->name)?>" style="width: 180px;height: 80px;"> </a>  </div>
          <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
             <?php 
        $this->CI =& get_instance();
        $carpool_session['carpool_session']   = $this->CI->carpool_session->userdata('carpool');
        //print_r($carpool_session['carpool_session'] );
         $id  = $carpool_session['carpool_session']['user_id'];
         $profile = $this->auth_travel->get_travel($id);
        if($this->auth_travel->is_logged_in(false, false)):       
        ?>  
            <ul class="top-nav new-top-nav pull-right">
              <li>
                <div id="my-account">
                  <div class="my-account-button">  <div class="profile-img"> <img src="<?php if($profile->user_profile_img) { echo theme_profile_img($profile->user_profile_img); } else { echo theme_img('default.png');  }?>" width="30" height="30"> </div> <span> <?=$profile->user_first_name.' '.$profile->user_last_name ?> </span> <p> <img src="<?php echo theme_img('drop-white.png')?>"> </p>  </div>
                  <div class="my-account-details" style="display: none">
                    <ul class="nav-set">
                      <li><a href="<?php echo base_url('profile');?>"> <img src="<?php echo theme_img('driver-ico.png')?>"> <?php echo lang('profile');?> </a></li>
                      <li><a href="<?php echo base_url('profile#settings');?>"> <img src="<?php echo theme_img('settings-ico.png')?>"><?php echo lang('settings');?> </a></li>
                      <li><a href="<?php echo base_url('profile#my-cars-info');?>"> <img src="<?php echo theme_img('mail-ico.png')?>" width="13"> <?php echo lang('my_vehicles');?> </a></li>
                       <li><a href="<?php echo base_url('addtrip');?>"> <img src="<?php echo theme_img('mail-ico.png')?>" width="13"> <?php echo lang('my_trips');?> </a></li>
                       <li><a href="<?php echo base_url('rating');?>"> <img src="<?php echo theme_img('star-ico.png')?>" width="13"> <?php echo lang('my_ratings'); ?> </a></li>
             <li><a href="<?php echo base_url('addtrip/enquery_list');?>"> <img src="<?php echo theme_img('star-ico.png')?>" width="13"> <?php echo lang('my_enquiries'); ?> </a></li>
            
                      <li><a href="<?php echo base_url('login/logout');?>"> <img src="<?php echo theme_img('logout-ico.png')?>" width="13"> <?php echo lang('logout'); ?></a></li>
                    </ul>
                  </div>
                </div>  
              </li>

              
              <?php else: ?>
            <ul class="top-nav new-top-nav pull-right">              
              <li> <a href="<?php echo base_url('login');?>" class="top-login ride"><i class="fa fa-user"></i> <?php echo lang('login');?> </a> </li>
              <li> <a href="<?php echo base_url('register');?>" class="top-signup ride"><i class="fa fa-plus"></i> <?php echo lang('register');?> </a> </li>
              <!-- <li>  </li> -->
            </ul>
            
            <?php endif; ?>
            </ul>                     
        </div>
    </div>
  </div>
</div>

<div class="top-trip-add">
  <a href="<?php echo base_url('addtrip/form');?>" class="top-trip ">
    <h2 class="size16"> <?php echo lang('do_you_have_car');?> </h2>

    <p class="size20">
      <strong><?php echo lang('post_a_trip');?></strong>
    </p>
    <i class=" size16 fa fa-car"></i> <i class="size16 fa fa-bus"></i>
  </a>  
</div>

    <div class="container-fluid padding0 banner">

    <div id="bannerscollection_kenburns_generous">

      <div class="myloader"></div>
        <!-- CONTENT -->
        <ul class="bannerscollection_kenburns_list">

            <li data-initialZoom="1" data-finalZoom="1" data-horizontalPosition="center" data-verticalPosition="left" data-text-id="#bannerscollection_kenburns_photoText1" ><img src="<?php echo theme_img('slider001.jpg')?>" alt="" width="2500" height="919" /></li>
            
            <li data-initialZoom="1" data-finalZoom="1" data-horizontalPosition="center" data-verticalPosition="left" data-text-id="#bannerscollection_kenburns_photoText2" ><img src="<?php echo theme_img('slider002.jpg')?>" alt="" width="2500" height="919" /></li>

            <li data-text-id="#bannerscollection_kenburns_photoText3" data-horizontalPosition="center" data-verticalPosition="top" data-initialZoom="1" data-finalZoom="1"><img src="<?php echo theme_img('slider003.jpg')?>" alt="" width="2500" height="782" /></li>       
        
        </ul>        
        <!-- TEXTS -->

        <div id="bannerscollection_kenburns_photoText1" class="bannerscollection_kenburns_texts">
          <div class="bannerscollection_kenburns_text_line textElement11_generousFullWidth" data-initial-left="200" data-initial-top="50" data-final-left="200" data-final-top="320" data-duration="0.5" data-fade-start="0" data-delay="0"><?php echo lang('home_slide1');?></div>
       </div>   
                 
        <div id="bannerscollection_kenburns_photoText2" class="bannerscollection_kenburns_texts">
          <div class="bannerscollection_kenburns_text_line textElement21_generousFullWidth" data-initial-left="200" data-initial-top="50" data-final-left="200" data-final-top="280" data-duration="0.5" data-fade-start="0" data-delay="0.5"><?php echo lang('home_slide2');?></div>         
        </div>
       
        <div id="bannerscollection_kenburns_photoText3" class="bannerscollection_kenburns_texts">
          <div class="bannerscollection_kenburns_text_line textElement31_generousFullWidth" data-initial-left="200" data-initial-top="50" data-final-left="200" data-final-top="320" data-duration="0.5" data-fade-start="0" data-delay="0"><?php echo lang('home_slide3');?></div>
        </div> 
    
                                            
    
    <!-- test vertical -->
    <!-- <div class="bottom-bar-vert padding10-vert">           
        <div class="search-bar-vert">
          <h2> <?php echo lang('find_a_ride');?> </h2>
          <form class="form-inline">
            <div class="form-group">
              <input  type="text" placeholder="<?php echo lang('from');?>"  
                      name="source" id="source" class="form-control srcdes marker-ico-from">
              <input type="hidden" name="formlatlng" id="formlatlng"  value=""/>
            </div>
            <div class="form-group">
              <input type="text"  placeholder="<?php echo lang('to');?>"   name="destination" id="destination" class="form-control srcdes marker-ico-to" />
              <input type="hidden" name="tolatlng" id="tolatlng"  value=""/>
            </div>
            <div class="form-group">
              <input type="text" placeholder="<?php echo lang('dd/mm/yyyy');?>" id="journey_date" class="form-control srcdes cal-ico" onchange="getfrequency();"  name="journey_date" >
              <input type="hidden" name="frequency" id="frequency"  value=""/>
            </div>
            <div class="form-group">
              <button class="btn btn-success search-bouton-vert" type="submit" ng-disabled="!Simpleform.$valid" ng-click="save()"><span class="glyphicon glyphicon-search"></span>   <?php echo lang('search');?></button>
            </div>
          
            
          </form>
        </div>      
    </div> -->
    <!-- test horizontal -->
    <div class="bottom-bar padding10">

        <div class="search-bar">

          <h2> <?php echo lang('find_a_ride');?> </h2>

          <form method="get" id="searchform"  action="<?php echo  base_url(); ?>search">
            <input type="text" placeholder="<?php echo lang('from');?>"  name="source" id="source" class="srcdes marker-ico-from"> 
            <input type="hidden" name="formlatlng" id="formlatlng"  value=""/>
            <input type="text"  placeholder="<?php echo lang('to');?>"   name="destination" id="destination" class="srcdes marker-ico-to" />
            <input type="hidden" name="tolatlng" id="tolatlng"  value=""/>
           <!--  <input type="text" placeholder="<?php echo lang('date-format');?>" id="journey_date" class="srcdes cal-ico" onchange="getfrequency();"  name="journey_date" > -->
            <div id="datepicker" class="input-group date" data-date-format="<?php echo lang('date-format');?>">
                <input class="form-control srcdes" type="text" />
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
             
             <input type="hidden" name="frequency" id="frequency"  value=""/>
             <button class="top-login ride search-bouton" type="submit"><span class="fa fa-search"></span>   <?php echo lang('search');?></button>      
          </form>
        </div>      
    </div> 


</div>  
</div> 
 <div class="container-fluid padding0 banner-search">
      <div class="bottom-bar padding10">  

        <div class="search-bar">

          <h2> <?php echo lang('find_a_ride');?> </h2>

          <form method="get" id="searchform"  action="<?php echo  base_url(); ?>search">
            <input type="text" placeholder="<?php echo lang('from');?>"  name="source" id="mob_source" class="srcdes marker-ico"> 
            <input type="hidden" name="formlatlng" id="mob_formlatlng"  value=""/>
            
            <input type="text"  placeholder="<?php echo lang('to');?>"   name="destination" id="mob_destination" class="srcdes marker-ico" />
           <input type="hidden" name="tolatlng" id="mob_tolatlng"  value=""/>
            
            <input type="text" placeholder="<?php echo lang('dd/mm/yyyy');?>" id="journey_dater" class="srcdes cal-ico" onchange="getfrequencymob();"  name="journey_date" >
             
             <input type="hidden" name="frequency" id="mob_frequency"  value=""/>
      <input type="submit"  value="<?php echo lang('recherche');?>"   class="ind-src-but"/>       
               </form>

        </div>     

      </div>

    </div>
  