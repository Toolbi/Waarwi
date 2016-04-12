<?php include('header.php'); ?>

<?php echo theme_js('tab.js', true); ?>
<link rel="stylesheet" type="text/css" href="<?php echo theme_js('popup/css/jquery-confirm.css') ?>" />

<link rel="stylesheet" href="<?php echo theme_js('popup/boxy.css') ?>">
<?php echo theme_js('popup/jquery.boxy.js', true) ?>
<script type="text/javascript">
    var baseurl = "<?php print base_url(); ?>";

    $(document).ready(function() {
    
    // clique sur accpter ou rejeter
    $('body').on("click", '.enquiryBtn', function(){
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        var pmQueryString = 'enquiryId='+id+'&action='+action;
        // on envoie les données au serveur
        $.ajax({
            type: "POST", 
            url: baseurl + "addtrip/enquiryaction/true",  
            dataType: "json", 
            data:pmQueryString
                
        });
        // on recharge la page
        window.location.reload(true);
    });

    
  /************************************/
    /* Slider Expand Click */
    $('body').on("click", '.slider', function()
    {
    var ID = $(this).attr("rel");
            if ($('#slide' + ID).is(':visible'))
    {
    close()
    }
    else
    {
    close()

            $('#slide' + ID).addClass('open').removeClass('close');
            $('#slide' + ID).slideToggle('slow');
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

  });</script>
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
<?php echo theme_js('common.js', true); ?>
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
            <li tab="my-enquiries" class="colored gray-bg"><a href="#my-enquiries">
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
          <li><a href="<?php print base_url(); ?>enquery_list"><?php echo lang('my_enquiry_message');?></a></li>
          <li> / </li>
          <li><?php echo lang('my_enquiries_description');?></li>
         
        </ul>
             
         <div class="active-gray padding10">
        <h4> <?php echo lang('my_enquiry_message');?>: <?php echo lang('my_enquiries_description');?></h4>

        </div>
            <div class="inner-gray">
                <div class="obj_cont p_block_bottom rowrec" style="display: block;">
                   
                          
                            <div class="add_trip_enquery_tbl">
                                <?php if ($enquiries) { ?>         	
                                    <table class="table table-striped">
                                        <tbody class="table_title">
                                            <tr>
                                                <th> <?php echo lang('view_trip'); ?></th> 
                                                <th> <?php echo lang('enquiry_date'); ?></th> 
                                                <th> <?php echo lang('trip_date'); ?></th>  
                                                <th> <?php echo lang('vehicle_number'); ?> </th>                            
                                                <th> <?php echo lang('passenger_name'); ?> </th>
                                                <th> <?php echo lang('passenger_number'); ?> </th>
                                                <th> <?php echo lang('passenger_email'); ?> </th>
                                                <th> <?php echo lang('enquniry_status'); ?></th>
                                            </tr>  

                                            <?php foreach ($enquiries as $enquiry) { ?>

                                                <tr id="enquiry-<?=$enquiry->enquiry_id?>">                        	
                                                    <td> # </td>
                                                    <td> <?= date('d, M Y', strtotime($enquiry->enquiry_date_time)) ?> </td>
                                                    <td> <?= date('d, M Y', strtotime($enquiry->enquiry_trip_date)) ?> </td>
                                                    <td> <?= $enquiry->vechicle_number ?> </td>
                                                    <td> <?= $enquiry->user_first_name . '.' . $enquiry->user_last_name ?> </td> 
                                                    <td> <?= $enquiry->user_mobile ?> </td>                           
                                                    <td class="lst"> <?= $enquiry->user_email ?></td>
                                                    <td id="enquirySuccess-<?=$enquiry->enquiry_id?>">
                                                        <?php if ($enquiry->enquiry_trip_status == 0){ ?>
<a href="javascript:void(0)" class="enquiryBtn btn btn-success" data-action="accept" data-id="<?=$enquiry->enquiry_id?>"><?php echo lang('accept'); ?></a>
<a href="javascript:void(0)" class="enquiryBtn btn btn-danger" data-action="reject" data-id="<?=$enquiry->enquiry_id?>"><?php echo lang('reject'); ?></a>
                                                        <?php } else {?>                                                        
                                                        <p class="badge badge-success"> <?php echo lang('accepted'); ?> </p>
                                                   <?php } ?>
                                                    </td>                             
                                                </tr>   
                                            <?php } ?>
                                        </tbody></table>
                                <?php
                                } else {

                                    echo lang('no_enquiry');
                                }
                                ?>

                            </div>
                        </div>
                        <!-- end tab1 -->



                    </div>
                </div>
                <!-- end tab2 -->

            </div>

        </div>
        <!-- End -->
    </div>
</div>  

