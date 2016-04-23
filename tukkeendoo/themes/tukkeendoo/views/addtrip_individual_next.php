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
<script type="text/javascript" src="<?php echo theme_js('jquery.validate.js');?>"></script>
<?php echo theme_js('profile.js',true) ?>

<?php  echo theme_js('tab.js', true);?>
 <?php echo theme_js('notification/goNotification.js',true) ?>
<link href="<?php echo theme_js('notification/goNotification.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo theme_js('popup/css/jquery-confirm.css') ?>" />

<link rel="stylesheet" href="<?php echo theme_js('popup/boxy.css') ?>">
<?php echo theme_js('popup/jquery.boxy.js',true) ?>
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
var errorMessage = "<?php echo lang('rate_error_message');?>";
  
</script>
<?php  echo theme_js('common.js', true);?>
<div class="container-fluid margintop40">
  <div class="container">
   <div class="row">
     <ul class="brd-crmb">
      <li><a href="#"> <img src="<?php echo theme_img('home-ico.png') ?>"> </a></li>
      <li> / </li>
      <li><a href="#"><?php echo lang('register_your_carpool');?></a></li>
    </ul>
    <div class="row margin">
     
      <div class="container-fluid">
        <div class="container">
        <div class="fleft width100">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">     
      <div class="trip-lft">
         <div class="fleft width100 line4"></div>
        <h2 class="pst-trip-tit"><?php echo lang('register_your_trip');?></h2>
          <div class="fleft width100 margintop20">
          <ul class="trp-part">
            <li> <p><?php echo lang('part_1_of_2');?></p> <span class="cs-blue-bg"></span> </li>
             <li> <p><?php echo lang('part_2_of_2');?></p> <span class="cs-blue-border"></span> </li>
          </ul>
          </div>        
          <div class="fleft width100 margintop20"> 
            <div class="roundstep-no fleft size13"><?php echo lang('step_6');?> &nbsp;</div> 
            <span class="size16 fleft bold"><?php echo lang('manage_price');?></span>   
          </div>
     
        <div class="fleft width100 margintop20">
          <p class="rate-description"><?php echo lang('rate_description_text');?></p>  
                      <?php if($trip_details){
                      $i =1;?>          
                      <table class="table table-rate fleft width100 margintop20">
                        <thead>
                          <tr class="info">
                            <th><?php echo lang('trip_leg');?></th>
                            <th><?php echo lang('price');?></th>
                            <th><?php echo lang('edit_price');?></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($trip_details as $trip){

                        if(!empty($legdetails['leg_'.$trip['trip_id']])){
                          foreach ($legdetails['leg_'.$trip['trip_id']] as $trip_leg){?>
                          <tr>
                            <td>
                              
                              <?=$trip_leg['source_leg']?><span> <img src="<?php echo theme_img('search-arrow-right-grey.png') ?>"> </span> <?=$trip_leg['destination_leg']?>
                            </td>
                            
                            <td>
                            <input  type="text"  name="trip_rate_<?=$trip_leg['trip_led_id']?>" id="trip_rate_<?=$trip_leg['trip_led_id']?>" 
                            value="<?=$trip_leg['route_rate']?>" class="edit_fld" disabled>
                            <?php echo $symbol.' '.lang('per_passenger');?>
                            </td>
                            
                            <td>
                              <div id="edit-rate-<?=$trip_leg['trip_led_id']?>" style="display:none;">
                            <?php  
                              $fresult = $trip_leg['route_rate'];            
                              $data = array('name'=>'route_rate','id'=>'rate'.$trip_leg['trip_led_id'],'class'=>'rate'.$trip_leg['trip_led_id'], 'placeholder'=>'Trip Rate', 'value'=>set_value('avail_seats', $fresult));
                              echo form_input($data);?>
                              <span class="edit-rate-btn"><a href="javascript:void(0)" class="btn btn-success table-rate-btn padchg save-leg-rate" rel="<?=$trip_leg['trip_led_id']?>"> <?php echo lang('save');?> </a>
                              <a href="javascript:void(0)" class="btn btn-danger table-rate-btn padchg cancel-leg-rate" rel="<?=$trip_leg['trip_led_id']?>"> <?php echo lang('cancel');?> </a></span>
                          </div>
                        <div id="leg-rate-<?=$trip_leg['trip_led_id']?>">
                           
                          <a href="javascript:void(0)" class="table-rate-btn btn btn-warning edit-leg-rate efld fleftnon fright" rel="<?=$trip_leg['trip_led_id']?>"> <img src="<?php echo theme_img('edit-ico.png') ?>"> </a> </div>
                            </td>
                          </tr>
                        </tbody>
                        <?php } } ?> 
                         <?php $i++; } } ?>
                      </table>
            </div>

      <div class="fleft width100 padding20">
        <div class="next">        
          <a  class="publish-trip padding10 btn next-btn" rel="<?= $trip['trip_id'];?>" val="1"> <span class="fa fa-check"> </span> <?php echo lang('publish_trip');?></a>
        </div> 
            
        <div class="prev">
          <a href="<?= base_url('addtrip/step_1/'.$trip['trip_id']); ?>" class="padding10 btn prev-btn"><span class="fa fa-arrow-left"></span> <?php echo lang('prev');?></a>
        </div> 
        <div class="cancel">
          <a class="padding10 btn cancel-btn" href="<?= base_url('addtrip/delete/'.$trip['trip_id']); ?>"><span class="fa fa-times "></span> <?php echo lang('cancel');?></a>
        </div>     
    </div>

       
    <!-- End Left -->
   
    <!-- End Right -->
   

    </div>


  </div>
   <div class="col-lg-4  col-md-12 col-sm-12 col-xs-12">
      <div class="trip-right trip-view">

        <div class="roundstep-no fleft size13"><?php echo lang('info_map');?> &nbsp;</div>
        <h2 class="size16 fleft bold"><?php echo lang('journey_route');?></h2><br>

        <div class="float width100 line4"></div>
          <div class="rowrec view-map"><?php echo $map['js']; 
              echo $map['html']; ?>
      <div id="directionsDiv"></div></div>
        <div class="fleft width100 line4"></div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>

  </div>
 <!-- End -->
 
<?php include('footer.php');?> 