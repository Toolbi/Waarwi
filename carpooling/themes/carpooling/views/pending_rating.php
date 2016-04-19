<?php include('header.php'); ?>

<?php echo theme_js('tab.js', true); ?>
<?php echo theme_js('notification/goNotification.js', true) ?>
<link href="<?php echo theme_js('notification/goNotification.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo theme_js('popup/css/jquery-confirm.css') ?>" />

<link rel="stylesheet" href="<?php echo theme_js('popup/boxy.css') ?>">
<?php echo theme_js('popup/jquery.boxy.js', true) ?>

<script>
    var baseurl = "<?php print base_url(); ?>";
    $(document).ready(function () {
<?php
//lets have the flashdata overright "$message" if it exists
if ($this->session->flashdata('message')) {
    $message = $this->session->flashdata('message');
    ?>
            $.goNotification('<?= $message ?>', {
                type: 'success', // success | warning | error | info | loading
                position: 'top center', // bottom left | bottom right | bottom center | top left | top right | top center
                timeout: 5000, // time in milliseconds to self-close; false for disable 4000 | false
                animation: 'fade', // fade | slide
                animationSpeed: 'slow', // slow | normal | fast
                allowClose: true, // display shadow?true | false
            });
<?php
}
if ($this->session->flashdata('error')) {
    $error = $this->session->flashdata('error');
    ?>
            $.goNotification("<?= trim($error) ?>", {
                type: 'error', // success | warning | error | info | loading
                position: 'top center', // bottom left | bottom right | bottom center | top left | top right | top center
                timeout: 5000, // time in milliseconds to self-close; false for disable 4000 | false
                animation: 'fade', // fade | slide
                animationSpeed: 'slow', // slow | normal | fast
                allowClose: true, // display shadow?true | false
            });
    <?php
}
if (function_exists('validation_errors') && validation_errors() != '') {
    $error = validation_errors();
    ?>
            $.goNotification('<?= trim($error) ?>', {
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


function refresh() {
    location.reload();
}

</script>
<link rel="stylesheet" href="<?php echo theme_js('rating/rating.css') ?>">
<?php echo theme_js('rating/jquery.rating.js', true) ?>
<?php echo theme_js('common.js', true); ?>
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
</script>
<?php echo theme_js('profile.js',true) ?>
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
            <li  class="emerald-bg"><a href="profile#personal-infos">
              <i class="fa fa-user"></i>
              <span><?php echo lang('profile');?></span>
            </a></li>
            <li class="colored green-bg"><a href="profile#settings">
              <i class="fa fa-cogs"></i>
              <span><?php echo lang('settings');?></span>
            </a></li>
            <li class="colored purple-bg"><a href="profile#my-cars-info">
              <i class="fa fa-car"></i>
              <span><?php echo lang('my_vehicles');?></span>
            </a></li>
            <li  class="dropdown hidden-xs colored red-bg">
              <a class="drop dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-road"></i>
                <span><?php echo lang('my_trip');?></span>
                <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="item">
                  <a href="<?php print base_url(); ?>addtrip">
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
            <li  tab="my-ratings" class="dropdown hidden-xs colored yellow-bg">
              <a class="drop dropdown-toggle" data-toggle="dropdown">
                 <i class="fa fa-star"></i>
                <span><?php echo lang('my_ratings');?></span>
                <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="item">
                  <a href="#">
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
            <li class="colored gray-bg"><a href="#my-enquiries">
              <i class="fa fa-question"></i>
              <span><?php echo lang('my_enquiries_message');?></span>
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
          <li><a href="<?php print base_url(); ?>rating"><?php echo lang('my_rating');?></a></li>
          <li> / </li>
          <li><?php echo lang('ratings_pending');?></li>
         
        </ul>
             
         <div class="active-yellow padding10">
        <h4> <?php echo lang('my_rating');?>: <?php echo lang('ratings_pending');?></h4>
        </div>
            <div class="inner-yellow">
                <div class="obj_cont p_block_bottom rowrec" style="display: block;">
                    <div class="my-trp-tab row">
                    <div class="my-trp-main">
                    <a id="a_tab" class="btn btn-tab-y  active" onclick="tab_tab(this, 'p_block_bottom'), height_right()"><?php echo lang('ratings_pending'); ?></a>      
                    <a id="a_tab" class="btn btn-tab-y enquery" href="<?php echo base_url('rating/received_rating');?>"><?php echo  lang('received_ratings'); ?></a>
                    <a id="a_tab" class="btn btn-tab-y enquery" href="<?php echo base_url('rating/given_rating');?>"><?php echo lang('rating_given'); ?></a>  
                    <div class="cr"></div>
                        <div class="my-trp-content rowrec" id="pageresult">
                             <?php if ($pending_rating) { ?> 
                            <div class="add_trip_enquery_tbl">                                        
                                    <table valign="center" class="rating-table" cellpadding="0" cellspacing="0"  width="100%">
                                        <tbody>
                                            <tr bgcolor="#01acf1">
                                                <th> <?php echo lang('user_image'); ?></th> 
                                                <th> <?php echo lang('user_name'); ?></th>  
                                                <th> <?php echo lang('rating'); ?> </th>                                                                           
                                            </tr>  
                                            <?php foreach ($pending_rating as $rating) { ?>
                                                <tr id="enquiry-<?=$rating->enquiry_id?>">                          
                                                    <td> 
                                                        <div class="profile-img"> 
                                                            <img src="<?php if($rating->user_profile_img) { echo theme_profile_img($rating->user_profile_img); } else { echo theme_img('default.png');  }?>" width="30" height="30"> 
                                                        </div>
                                                    </td>
                                                    <td> <?=$rating->user_first_name?></td>
                                                    <td> 
                                                        <div id="rating-<?php echo $rating->user_id; ?>">
                                                            <textarea placeholder="<?php echo lang('exple_rate'); ?>" type="text" name="comment" id="comment" value="" /></textarea>                                                            
                                                              <input type="hidden" name="trip_date" id="trip_date" value="<?php echo date('Y,m,d');?>" />                                                            
                                                              <input type="hidden" name="trip_id" id="trip_id" value="<?=$rating->enquiry_trip_id?>" />                                                            
                                                            <select name="rating" id="rating" form="rateform">
                                                              <option value="5"><?php echo lang('rate5'); ?></option>
                                                              <option value="4"><?php echo lang('rate4'); ?></option>
                                                              <option value="3"><?php echo lang('rate3'); ?></option>
                                                              <option value="2"><?php echo lang('rate2'); ?></option>
                                                              <option value="1"><?php echo lang('rate1'); ?></option>
                                                            </select>
                                                              <button class="btn btn-warning" onClick="addRating(this,<?php echo $rating->user_id;?>); refresh();"><?php echo lang('give_rate'); ?></button>  
                                                              
                                                        </div>
                                                    </td>
                                                                                
                                                </tr>   
                                            <?php } ?>
                                        </tbody></table>
                                <?php
                                } else { ?>
                                    <p class="para"><?php echo lang('no_ratings'); ?></p>
                                <?php    
                                }
                                ?>
                            </div>
                            
                        </div>
                    </div>        
                </div>
                <!-- end tab1 -->
                
                    <!-- end tab2 -->
                   
                </div>
                <!-- End -->
            </div>
        </div>
    </div>  