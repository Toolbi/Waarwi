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
  
  
  
</script>
<?php  echo theme_js('common.js', true);?>



            <?php if($trip_details){
        $i =1;
          foreach ($trip_details as $trip){
            ?>
           
              
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
                      <div class="sea-city-city row cs-grey-text size14"> 
                        <img src="<?php echo theme_img('time-ico.png') ?>"> <b> <?php echo lang('expected_departure');?> </b> <span id="time_<?=$trip_leg['trip_led_id']?>"><?=$trip_leg['expected_time']?></span>
                      </div>
                      <div class="sea-city-city margintop30 row cs-grey-text size14"> 
                        <img src="<?php echo theme_img('rs-ico-big.png') ?>"> <b> <?php echo lang('price');?> </b> <span class="grey" id="amount_<?=$trip_leg['trip_led_id']?>"> <?php if(!empty($trip_leg['route_rate'])){ echo format_currency($trip_leg['route_rate']); } else { echo '-';} ?> </span><span><?php echo lang('inr');?></span>
                      </div>
                      <h4 class="cs-blue-text size14"> <?php echo lang('available_seats');?> <?=$trip['trip_avilable_seat']?> </h4>
                    </div>
                    <div class="inn-in-left fright flefti margintop20i">
                      <div class="sea-city-city fright fleftnon cs-grey-text size14 ed-tme"> 
                        <b><?php echo lang('edit_time');?></b>
                        <div id="edit-time-<?=$trip_leg['trip_led_id']?>" style="display:none">
                        <?php  
            $fresult = explode(' ',$trip_leg['expected_time']);           
            $ftime = explode(':',$fresult[0]);
            $options = array(           
            '1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12' );
            echo form_dropdown('fhh', $options, set_value('fhh',$ftime[0]),' id="fhh" class="hour'.$trip_leg['trip_led_id'].'" placeholder="hh"');?>
                        <?php  $options = array(
            '' => 'MM','00'=>'00',
            '15'=>'15','30'=>'30','45'=>'45');
        echo form_dropdown('fmm', $options, set_value('fmm',$ftime[1]),' id="fmm" class="min'.$trip_leg['trip_led_id'].'"');?>
                        <?php  $options = array(            
            'am'=>'AM','pm'=>'PM');
            echo form_dropdown('fzone', $options, set_value('fzone',$fresult[1]),' id="fzone" class="zone'.$trip_leg['trip_led_id'].'"');?>  
                        <a href="javascript:void(0)" class="btn btn-success padchg save-leg" rel="<?=$trip_leg['trip_led_id']?>"> <?php echo lang('save');?> </a>
                        <a href="javascript:void(0)" class="btn btn-danger padchg cancel-leg" rel="<?=$trip_leg['trip_led_id']?>"> <?php echo lang('cancel');?> </a>
                        </div>
                        <div id="leg-time-<?=$trip_leg['trip_led_id']?>">
                        <input type="text" name="trip_time_<?=$trip_leg['trip_led_id']?>" id="trip_time_<?=$trip_leg['trip_led_id']?>" value="<?=$trip_leg['expected_time']?>" class="edit_fld"> 
                        <a href="javascript:void(0)" class="btn btn-warning edit-leg efld" rel="<?=$trip_leg['trip_led_id']?>"> <img src="<?php echo theme_img('edit-ico.png') ?>"> </a>
                        </div>
                      </div>
                       <div class="sea-city-city fright cs-grey-text size14 ed-tme" style="clear:both"> 
                       <b><?php echo lang('edit_rate');?></b>
                        <div id="edit-rate-<?=$trip_leg['trip_led_id']?>" style="display:none">
                        <?php  
            $fresult = $trip_leg['route_rate'];            
    $data = array('name'=>'route_rate','id'=>'rate'.$trip_leg['trip_led_id'],'class'=>'rate'.$trip_leg['trip_led_id'], 'placeholder'=>'Trip Rate', 'value'=>set_value('avail_seats', $fresult));
    echo form_input($data);?>
            
            
                        <a href="javascript:void(0)" class="btn btn-success padchg save-leg-rate" rel="<?=$trip_leg['trip_led_id']?>"> <?php echo lang('save');?> </a>
                        <a href="javascript:void(0)" class="btn btn-danger padchg cancel-leg-rate" rel="<?=$trip_leg['trip_led_id']?>"> <?php echo lang('cancel');?> </a>
                        </div>
                        <div id="leg-rate-<?=$trip_leg['trip_led_id']?>">
                        <input type="text"  name="trip_rate_<?=$trip_leg['trip_led_id']?>" id="trip_rate_<?=$trip_leg['trip_led_id']?>" value="<?=$trip_leg['route_rate']?>" class="edit_fld"> 
                        <a href="javascript:void(0)" class="btn btn-warning edit-leg-rate efld fleftnon" rel="<?=$trip_leg['trip_led_id']?>"> <img src="<?php echo theme_img('edit-ico.png') ?>"> </a>     
                      </div>
                      </div>
                     <!-- <div class="fright margintop30 row size14 sea-trp-view"> 
                        <a href="#"> View Trip </a>
                      </div>-->
                    </div>
                    
                  </div>
                </div>
              </div>
              <?php } } ?>
              <!-- End Trip Leg -->
              <div class="fleft width100 padding20 ">

                

               <a href="<?= base_url('addtrip/step_1/'.$trip['trip_id']); ?>"> <img src="<?php echo theme_img('edit-ico.png') ?>"><?php echo lang('edit_trips'); ?></a>

               <a href="<?= base_url('addtrip/delete/'.$trip['trip_id']); ?>" class="btn btn-danger"> <img src="<?php echo theme_img('cancel-ico.png') ?>"> <?php echo lang('delete_all_trips');?> </a>

               <a href="#" class="btn btn-success fright"> <?php echo lang('save');?> </a>

               

              </div>
              </div>
            </div>
             <?php $i++; } } ?>
            <!-- Ena Main Trip -->
       