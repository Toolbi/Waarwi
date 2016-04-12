<?php include('header.php');?>

<?php echo theme_js('jquery_tab.min.js',true) ?>
<?php echo theme_js('jquery.ba-hashchange.js',true) ?>
<?php echo theme_js('tab_script.js',true) ?>
<?php echo theme_js('jquery.wallform.js',true) ?>
<?php echo theme_js('notification/goNotification.js',true) ?>
<link href="<?php echo theme_js('notification/goNotification.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo theme_js('popup/css/jquery-confirm.css') ?>" />
<link rel="stylesheet" href="<?php echo theme_js('popup/boxy.css') ?>">
<?php echo theme_js('popup/jquery.boxy.js',true) ?>
<?php echo theme_css('checkbox.css',true) ?>

<script>
$(document).ready(function() {  
  
    <?php if (empty($txtphone)){ ?>
    $('#txtphone').attr('readonly', false);
    $('#txtphone').removeClass('disable');
    <?php } ?>
    
    <?php
    //lets have the flashdata overright "$message" if it exists
    if($this->session->flashdata('message'))
    {
      $message  = $this->session->flashdata('message'); ?>
      $.goNotification('<?=$message?>', { 
      type: 'success', // success | warning | error | info | loading
      position: 'top center', // bottom left | bottom right | bottom center | top left | top right | top center
      timeout: 5000, // time in milliseconds to self-close; false for disable 4000 | false
      animation: 'fade', // fade | slide
      animationSpeed: 'slow', // slow | normal | fast
      allowClose: true, // display shadow?true | false
      });
    <?php }
    
    if($this->session->flashdata('error'))
    {
      $error  = $this->session->flashdata('error'); 
      ?>
      $.goNotification("<?=trim($error)?>", { 
      type: 'error', // success | warning | error | info | loading
      position: 'top center', // bottom left | bottom right | bottom center | top left | top right | top center
      timeout: 5000, // time in milliseconds to self-close; false for disable 4000 | false
      animation: 'fade', // fade | slide
      animationSpeed: 'slow', // slow | normal | fast
      allowClose: true, // display shadow?true | false
      });
    <?php
    }
    
    if(function_exists('validation_errors') && validation_errors() != '')
    {
      $error  = validation_errors();
      ?>
      $.goNotification('<?=trim($error)?>', { 
      type: 'error', // success | warning | error | info | loading
      position: 'top center', // bottom left | bottom right | bottom center | top left | top right | top center
      timeout: 200000, // time in milliseconds to self-close; false for disable 4000 | false
      animation: 'fade', // fade | slide
      animationSpeed: 'slow', // slow | normal | fast
      allowClose: true, // display shadow?true | false
      });
    <?php
    }
    ?>
    
      
  });
  
<?php /*?>function areyousure()
{
  //return confirm('<?php echo 'Are you want to delete this Vehicle';?>');
   Boxy.confirm("Please confirm:", function() { return true; }, {title: 'Message'});
    //return false;
} <?php */?>
  
 
</script>

<?php  echo theme_js('tab.js', true);?>
<script>
 var baseurl = "<?php print base_url(); ?>";
$(document).ready(function() {
	
	/* Slider Expand Click */
	$('body').on("click",'.slider',function()
	{
		var ID = $(this).attr("rel");
		if($('#slide'+ID).is(':visible'))
		{
			close()
		}
		else
		{
			close()
					
			$('#slide'+ID).addClass('open').removeClass('close');		
			 $('#slide'+ID).slideToggle('slow');
			
			return false;
		}
	});
	
	function close() {
        opened = $(document).find('.open');
        $.each(opened, function() {
            //give the proper class to the linked element
            $(this).addClass('close').removeClass('open');
             $(this).slideToggle('slow');
        });
    }
	
	
	
	
			
	});
	


</script>
<?php  echo theme_js('common.js', true);?>

<div class="container-fluid margintop40">
  <div class="row"> 
  <!--  nav tab  -->
    <div class="panel panel-tabs text-center">
      
    </div>
  </div>

  <div class="panel panel-tabs text-center">

      <div class="panel-heading">  
      <!-- Navigation haut -->
      <div id="user-tabs"> 
        <ul align="center" class="nav nav-tabs">
            <li class="colored black-bg"><a href="<?php print base_url(); ?>">
              <i class="fa fa-home"></i>
              <span><?php echo lang('home');?></span>
            </a></li> 
            <li  class="emerald-bg"><a href="<?php print base_url(); ?>profile#personal-infos">
              <i class="fa fa-user"></i>
              <span><?php echo lang('profile');?></span>
            </a></li>
            <li class="colored green-bg"><a href="<?php print base_url(); ?>profile#settings">
              <i class="fa fa-cogs"></i>
              <span><?php echo lang('settings');?></span>
            </a></li>
            <li class="colored purple-bg"><a href="<?php print base_url(); ?>profile#my-cars-info">
              <i class="fa fa-car"></i>
              <span><?php echo lang('my_vehicles');?></span>
            </a></li>
            <li tab="my-trips" class="dropdown hidden-xs colored red-bg">
              <a class="drop dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-road"></i>
                <span><?php echo lang('my_trip');?></span>
                <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="item">
                  <a href="#">
                      <i class="fa fa-car"></i> 
                      <?php echo lang('rides_offered');?>
                  </a>
                </li>
                <li class="item">
                  <a href="<?php print base_url(); ?>addtrip/upcoming_trip_passenger">
                    <i class="fa fa-car"></i> <i class="fa fa-question"></i> 
                      <?php echo lang('enquiry');?>
                  </a>
                </li>                   
              </ul>
            </li>
            <li  class="dropdown hidden-xs colored yellow-bg">
              <a class="drop dropdown-toggle" data-toggle="dropdown">
                 <i class="fa fa-star"></i>
                <span><?php echo lang('my_ratings');?></span>
                <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="item">
                  <a href="<?php print base_url(); ?>rating">
                      <i class="fa fa-star-o"></i> 
                      <?php echo lang('ratings_pending'); ?>
                  </a>
                </li>
                <li class="item">
                  <a href="<?php print base_url(); ?>rating/received_rating">
                    <i class="fa fa-star"></i> 
                      <?php echo lang('received_ratings'); ?>
                  </a>
                </li> 
                <li class="item">
                  <a href="<?php print base_url(); ?>rating/given_rating">
                    <i class="fa fa-star-half-o"></i> 
                      <?php echo lang('rating_given'); ?>
                  </a>
                </li>                   
              </ul>
            </li>
            <li class="colored gray-bg"><a href="<?php print base_url(); ?>profile#my-enquiries">
              <i class="fa fa-question"></i>
              <span><?php echo lang('my_enquiries');?></span>
            </a></li>
          </ul>
        </div>
      </div>
    </div>
  <div class="container">
    <div class="row"> 
    
    <!-- Photo de profil -->
    <div class="profile-picture">  
      <div class="profile-pic" id="ProfilePic"> 
        <img src="<?php if($customer->user_profile_img) { echo theme_profile_img($customer->user_profile_img); } else { echo theme_img('default.png');  }?>" id="old-image" width="100" height="100">
      </div>
      <span><a class="add-picture-btn btn btn-info" href="javascript:void(0)" id="edit-profile">
      <?php echo lang('edit_photo');?> </a></span>
      <h5 class="">
        <?php echo lang('dashboard_message');?>  <?=$customer->user_first_name ?>
      </h5> 
      
      <div id='imageloadstatus' style="display:none">
        <img src='<?php echo theme_img('ajaxloader.gif'); ?>'/> <?php echo lang('uploading_message');?>
      </div>
    </div>
     <!-- Formulaire cachée pour la modification de l'image de profil -->
    <?php 
      $attributes = array('id' => 'profileimageform');
        echo form_open_multipart(base_url('profile/profile_image_upload'),$attributes);
      ?>
    <div  class="uploadFile timelineUploadImg" style="display:none">
      <input type="file"  name="profileimg" id="profileimg">
    </div>          
    </form>

  <div class="trips">    

    <ul class="brd-crmb">
      <li><a href="<?php print base_url(); ?>"> <img src="<?php echo theme_img('home-ico.png') ?>"> <?php echo lang('home');?></a></li>
      <li> / </li>
      <li><a href="<?php print base_url(); ?>addtrip"><?php echo lang('my_trip');?></a></li>
      <li> / </li>
      <li><a href="<?php print base_url(); ?>addtrip/past_trip"><?php echo lang('rides_offered');?></a></li>
      <li> / </li>
      <li><?php echo lang('past_trips');?></li>
    </ul>
             
 <div class="active-red padding10">
<h4> <?php echo lang('my_trip');?>: <?php echo lang('rides_offered');?></h4>

</div>
<div class="inner-red"> 
 <div class="tab-container">
   	<div class="obj_cont p_block_bottom rowrec" style="display: block;">
			<div class="my-trp-tab row">
          <div class="my-trp-main">
           <a href="<?=base_url('addtrip/upcoming_trip')?>" class="ride btn-tab"><?php echo lang('upcoming_trips');?> </a>&nbsp
            <a href="javascript:void(0)" class="ride btn-tab active"><?php echo lang('past_trips');?></a>
          </div>
			          <div class="my-trp-content rowrec">
                <div>
            <h5 align="center"> <?php echo lang('past_trips_description');?></h5>
          </div>
			            <p class="para"><?php echo lang('up_this_page');?></p>
            <?php if($trip_details){
				$i =1;
					foreach ($trip_details as $trip){
						?>
            <div class="inner-trip-det">
              <div class="topbg padding10"> 
                <a href="javascript:void(0)" class="trp-acc-arr slider" rel="<?=$i?>">
                <b><?=$trip['source']?> <span> <img src="<?php echo theme_img('arrow-right-white.png') ?>"> </span> <?=$trip['destination']?><span class="edit_option"> <?php echo lang('edit_options');?></span> </b> </a>
                <a href="javascript:void(0)" class="fright trp-acc-arr slider" rel="<?=$i?>">
                  <span class="trp-para">
                  <?php echo lang('trip_date');?>: 
                    <?php echo date('d - m - y',strtotime ($trip['trip_created_date']));?>  |
                  <?php echo lang('trip_type');?>: <?php if(!empty($trip['trip_casual_date'])){ echo lang('casual'); } else { echo lang('regular');} ?></span> 
                  <img src="<?php echo theme_img('arr-ver-down.png') ?>"> </a>
              </div>
              <div id="slide<?=$i?>" style="display:none">
			              <div class="fleft width100 margintop20 padding20">
                <span class="fleft"> <img src="<?php echo theme_img('marker-from.png') ?>"> </span>
			                <div class="sea-city-city fleft cs-grey-text size14 mar-min fleftnon"> 
			                  <b><?=$trip['source']?></b> <?php  
							 if(!empty($legdetails['route_'.$trip['trip_id']])){
							 foreach ($legdetails['route_'.$trip['trip_id']] as $trip_routes){ 
							?>
                 <span> <img src="<?php echo theme_img('search-arrow-right-grey.png') ?>"> </span> <?=$trip_routes?> <span> 
                 <?php } } ?>
                 <img src="<?php echo theme_img('search-arrow-right-grey.png') ?>"> </span> <b><?=$trip['destination']?> </b>
                 <span class=""> <img src="<?php echo theme_img('marker-to.png') ?>"> </span>
                  
                 <span class=""><?php echo lang('trip_type');?>: <?php if(!empty($trip['trip_casual_date'])){ echo lang('casual'); } else { echo lang('regular');} ?></span> 
                </div>
              </div>
			              <h5 class="fleft width100 inner-in-trp"> <img src="<?php echo theme_img('trip-icon.png') ?>"> <?php echo lang('trip_detail');?>: </h5>
               <?php  
							 if(!empty($legdetails['leg_'.$trip['trip_id']])){
							 foreach ($legdetails['leg_'.$trip['trip_id']] as $trip_leg){ 
							 //print_r($trip_leg); die;
							?>
			              <div class="fleft width100 inner-in-trp">
                <div class="inner-trip-det marginbot10">
                  <div class="sea-city-city topbg2 colorwhite padding5 cs-blue-text size14"> 
                    <b><span><?php echo lang('trip_leg');?>:</span> 
                    <img src="<?php echo theme_img('marker-from.png') ?>"> </span>
                    <?=$trip_leg['source_leg']?><span> <img src="<?php echo theme_img('search-arrow-right-grey.png') ?>"> </span> <?=$trip_leg['destination_leg']?> <img src="<?php echo theme_img('marker-to.png') ?>"> </span></b> 
                  </div>
			                  <div class="padding20 fleft width100">
                    <div class="inn-in-left fleft">
			                      <div class="sea-city-city cs-grey-text size14"> 
                        <img src="<?php echo theme_img('time-ico.png') ?>"> <b> <?php echo lang('expected_departure');?> </b> <span id="time_<?=$trip_leg['trip_led_id']?>"><?=$trip_leg['expected_time']?></span>
                      </div>
			                      <div class="sea-city-city margintop30 cs-grey-text size14"> 
			                        <img src="<?php echo theme_img('rs-ico-big.png') ?>"> <b> <?php echo lang('price');?>: </b> <span class="grey" id="amount_<?=$trip_leg['trip_led_id']?>"> <?php if(!empty($trip_leg['route_rate'])){ echo format_currency($trip_leg['route_rate']);  } else { echo '-';} ?> <?php echo lang('inr');?></span>
                      </div>
                      <h4 class="cs-blue-text size14"> <?php echo lang('available_seats');?> <?=$trip['trip_avilable_seat']?> </h4>
                    </div>
			             <div class="inn-in-left fright flefti margintop20i">
			                   <!-- plus de details -->
                    </div>




                  </div>
                </div>
              </div>
              <?php } } ?>
			              <!-- End Trip3 -->

			              <div class="fleft width100 padding20 ed-can-trp">
                <a href="<?= base_url('addtrip/delete/'.$trip['trip_id']); ?>" class="red-bg"> <img src="<?php echo theme_img('cancel-ico.png') ?>"> <?php echo lang('delete_all_trips');?> </a>

                <!--<a href="<?= base_url('addtrip/form/'.$trip['trip_id']); ?>"> <img src="<?php echo theme_img('edit-ico.png') ?>"><?php echo lang('edit_trips'); ?></a>-->


              </div>
        

              </div>
                  <!-- Ena Main Trip 2 -->
            </div>
             <?php $i++; } } ?>
          </div>
        </div>
      </div>
      <!-- end tab1 -->
      
      <div class="obj_cont p_block_bottom" style="display: none;">
      <div class="enquery_list"> <?php echo lang('no_ratings_given');?> </div>
      </div>
      <!-- end tab2 -->
      
			     
			      <!-- end tab3 -->
		      
      </div>


    </div>
        </div>
    </div>


