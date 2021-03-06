﻿<?php include('header.php');?>
<?php include ('jquery.tagbox.php');?>
<style type="text/css">
 .mandatory,spnerror { color:red; }
</style>
<script type="text/javascript" src="<?php echo theme_js('travel-details-rules.js');?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places&language=en"></script>
<link rel="stylesheet" type="text/css" href="<?php echo  theme_js('jquery.datepick/redmond.datepick.css');?>"> 
<?php echo  theme_js('jquery.datepick/jquery.plugin.js',true);?>
<?php echo  theme_js('jquery.datepick/jquery.datepick.js',true);?>
<?php echo theme_js('bootstrap-datepicker.js',true); ?>
<?php echo theme_js('bootstrap-datepicker.fr.js',true); ?>
    <?php echo theme_css('bootstrap-datepicker.css', true);?>

<?php echo theme_js('notification/goNotification.js',true) ?>
<link href="<?php echo theme_js('notification/goNotification.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo theme_js('popup/css/jquery-confirm.css') ?>" />

<link rel="stylesheet" href="<?php echo theme_js('popup/boxy.css') ?>">
<?php echo theme_js('popup/jquery.boxy.js',true) ?>
<script>
$(document).ready(function() {
  
  $('#rpt_from_date').datepick({
   changeMonth: false,autoSize: true,minDate: 0,dateFormat: 'dd/mm/yyyy'});
    
    change_trip(1);
    <?php if($return == 'yes') { ?>
    change_trip(2);
    <?php } ?>
    
    $('#tzone').attr('selectedIndex', 0);
    
                <?php if(!$rpt_from_date == '') { ?>
    $('#regu').attr('checked',true);
                change_type(1)
                <?php } else { ?>
    $('#casu').attr('checked',true);
                change_type(2)
                <?php } ?>
    $('#<?=$return?>').attr('checked',true);
    var initValues = <?=$frequency_values?>;
    //alert(initValues);
    $('#frmtrip').find(':checkbox[name^="frequency[]"]').each(function () {
      $(this).attr("checked", ($.inArray($(this).val(), initValues) != -1));
    });
    
    
    
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
var nowDate = new Date();
var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
$(function () {
  $(".datepicker").datepicker({ 
    autoclose: true, 
    todayHighlight: true,
    language: "fr",
    startDate: today 
  }).datepicker('update', new Date());;
});
  
</script>
<!-- <?php  echo theme_css('jquery.tagbox.css', true);?> -->
<!-- <?php  echo theme_js('jquery.tagbox.js', true);?> -->
<script type="text/javascript" src="<?php echo theme_js('jquery.validate.js');?>"></script>
<script type="text/javascript">
var baseurl = "<?php print base_url(); ?>";
var country = '<?php print ($this->config->item('country_code') != '')?$this->config->item('country_code'):''; ?>';



</script>
<!-- <?php  echo theme_js('trip.js', true);?> -->
<?php include ('trip.php');?>
  
  
<div class="container-fluid margintop40">
  <div class="container">
   <div class="row">
     <ul class="brd-crmb">
      <li><a href="#"> <img src="<?php echo theme_img('home-ico.png') ?>"> </a></li>
      <li> / </li>
      <li><a href="#"><?php echo lang('register_your_carpool');?></a></li>
    </ul>
    <div class="row margin">
   
    <?php /*?><?php 
      $attributes = array('id' => 'frmtrip','class'=>'bbq');         
     echo form_open('addtrip/step_1/'.$tripid,$attributes); ?><?php */?>
      <form class="bbq" id="frmtrip">
        <input type="hidden" name="tripid" id="tripid" value="<?=$tripid?>" />
        <input type="hidden" name="submitted" id="route-map" value="submitted" />
        <input type="hidden" name="edited" id="edited" value="" />
        <input type="hidden" name="checktrip" id="checktrip" value="1" />
        <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />     
      <div class="container-fluid">
        <div class="container">
        <div class="fleft width100">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">     
      <div class="trip-lft">
         <div class="fleft width100 line4"></div>
        <h2 class="pst-trip-tit"><?php echo lang('register_your_trip');?></h2>
          <div class="fleft width100 margintop20">
          <ul class="trp-part">
            <li> <p><?php echo lang('part_1_of_2');?></p> <span class="cs-blue-border"></span> </li>
             <li> <p><?php echo lang('part_2_of_2');?></p> <span></span> </li>
          </ul>
        </div>
        
                <div class="fleft width100 margintop20"> 
          <div class="roundstep-no fleft size13"><?php echo lang('step_1');?> &nbsp;</div> 
          <span class="size16 fleft bold"><?php echo lang('add_vehicle_info');?></span>   
        </div>
       <div class="fleft width100 margintop20">
          <span class="size14 bold"><span class="mandatory">*</span> <?php echo lang('travel_type');?></span>
           <?php        
        $data = array('' => lang('select_your_car'));       
        foreach($vehicle as $parent)
        { 
           $data[$parent->vechicle_id ] = strtoupper($parent->vechicle_type_name) .' - '. $parent->vechicle_number; 
        }
        echo form_dropdown('vechicletype', $data, $vechicletype,' id="vechicletype" class="fleft width100 padding10" onchange="get_vehicle();"');
        ?>
        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold fleft paddingright10"><?php echo lang('vehicle_number');?> </span>
          <p class="fleft size16 bold" id="vehnum"><?=$vehnum?></p>          
        </div>
        <div class="fleft width100 line4"></div>
                <div class="fleft width100 margintop20"> 
          <div class="roundstep-no fleft size13"><?php echo lang('step_2');?> &nbsp;</div> 
          <span class="size16 fleft bold"><?php echo lang('add_trip');?></span>   
        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold"><span class="mandatory">*</span> <?php echo lang('from');?></span>          
          <input type="text" class="fleft width100 padding10" placeholder="<?php echo lang('from_placeholder');?>"   name="txtsource" id="txtsource"class="frt_src" value="<?=$txtsource?>" >
            <input type="hidden" name="source_ids" id="source_ids"  value="<?=$source_ids?>"/>
        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold"><span class="mandatory">*</span> <?php echo lang('to');?></span>          
            <input type="text" class="fleft width100 padding10" placeholder="<?php echo lang('to_placeholder');?>"  name="txtdestination" id="txtdestination"  value="<?=$txtdestination?>"/>
            <input type="hidden" name="destination_ids" id="destination_ids"  value="<?=$destination_ids?>"/>
        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold row"><span class="mandatory"></span> <?php echo lang('add_route');?></span><br>
          <span class="description"> <?php echo lang('add_route_desc');?></span>
          <input  type="text" id="jquerytagboxtext" class="fleft padding10 width51" name="jquerytagboxtext"  value="<?=$jquerytagboxtext?>"/>
           <input type="hidden" name="routes" id="routes" value="<?=$routes?>" />
          <input type="hidden" name="routesdata" id="routesdata" value="<?=$routesdata?>" />
         <input type="hidden" name="route_lanlat" id="route_lanlat" value="<?=$route_lanlat?>" />         
        </div>
        <div class="fleft width100 line4"></div>
            <div class="fleft width100 margintop20"> 
                <div class="fleft width100 margintop20"> 
          <div class="roundstep-no fleft size13"><?php echo lang('step_3');?> &nbsp;</div> 
          <span class="size16 fleft bold"><?php echo lang('add_frequency');?></span>   
        </div>
        <div class="fleft width100 margintop20">

          <span class="size14 bold row"><span class="mandatory">*</span> <?php echo lang('frequency');?></span>
          <p class="row bold paddingtop10"> 
            
            <span class="fleft size14 marginleft30"> <input type="radio" name="trip_type" id="casu" onclick="change_type(2)"/> <?php echo lang('one_time');?>  </span>
            <span class="fleft size14"> <input type="radio" name="trip_type" id="regu" onclick="change_type(1)"/> <?php echo lang('recurring');?> </span>
            
          </p>
          <p class="row paddingtop10 bold" id="regular"> 
            <span class="fleft size14"> <input type="checkbox" name="frequency[]" value="0" onchange="filter_result()"/> <?php echo lang('mon'); ?> </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="1" onchange="filter_result()"/> <?php echo lang('tue'); ?> </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="2" onchange="filter_result()"/> <?php echo lang('wed'); ?> </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="3" onchange="filter_result()"/> <?php echo lang('thu'); ?> </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="4" onchange="filter_result()"/> <?php echo lang('fri'); ?> </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="5" onchange="filter_result()"/> <?php echo lang('sat'); ?> </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="6" onchange="filter_result()"/> <?php echo lang('sun'); ?> </span>
             <input type="hidden" name="frequency_ids" id="frequency_ids" value="<?=$frequency_ids?>" />
          </p>
          <p class="datepicker input-group date row paddingtop10 bold" id="casuals" data-date-format="<?php echo lang('date-format');?>"> 
            <span class="size14 bold"> </span>    
             <!-- <input type="text" id="rpt_from_date" placeholder="<?php echo lang('date_of_journey'); ?>" class="fleft width100 padding10 row" name="rpt_from_date" onchange="clearnow();" value="<?=$rpt_from_date?>"> -->

            
                <input class="form-control" type="text" name="rpt_from_date"/>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
      
          </p>

        </div>
       <div class="fleft width100 margintop20">           
          <span class="row size14 bold"><span class="mandatory">*</span> <?php echo lang('type_of_trip');?></span>
        </div>
        <div class="fleft width100 margintop20">
          <ul class="trp-part paddingtop10">
            <li class="bold"> <input name="return" type="radio" value="no" id="no" onclick="change_trip(1)"> <?php echo lang('one_way_trip');?> </li>
            <li class="bold"> <input name="return" type="radio" value="yes" id="yes" onclick="change_trip(2)"> <?php echo lang('return_trip');?> </li>             
          </ul>
        </div>
        <div class="fleft width100 margintop20">
          <ul class="trp-step">
            <li id="departure"> 
              <span class="row size14 bold"><?php echo lang('departure_time');?></span>              
              <?php $options = createTime();
        echo form_dropdown('fhh', $options['hh'], set_value('fhh',$fhh),' id="fhh" class="fleft padding10 " onchange="clearnow();"  placeholder="hh"');?>
              <p class="marginleft10 paddingtop6 size16 fleft">:</p>
              <?php echo form_dropdown('fmm', $options['mm'], set_value('fmm',$fmm),' id="fmm" class="fleft padding10 marginleft10" onchange="clearnow();" ');?>
              <p class="marginleft10 paddingtop6 size16 fleft"> </p>
            </li>
            <li id="return"> 
              <span class="row size14 bold"><?php echo lang('return_time');?></span>
              <?php  echo form_dropdown('thh', $options['hh'], set_value('thh',$thh),' id="thh" class="fleft padding10 " onchange="clearnow();"  placeholder="hh"');?>
              <p class="marginleft10 paddingtop6 size16 fleft">:</p>
              <?php  echo form_dropdown('tmm', $options['mm'], set_value('tmm',$tmm),'id="tmm" class="fleft padding10 marginleft10" onchange="clearnow();" ');?>
              <p class="marginleft10 paddingtop6 size16 fleft"> </p>
            </li>
            <input type="hidden" name="depature_time" id="depature_time" value="<?=$depature_time?>" />
            <input type="hidden" name="arrival_time" id="arrival_time" value="<?=$arrival_time?>" />
          </ul>
        </div>  
        
        <!-- <div class="fleft width100 line4"></div> -->
        <div class="fleft  margintop20">
          <span class="size14 bold row"><span class="mandatory">*</span> <?php echo lang('available_seat');?></span>          
          <?php
    $data = array('name'=>'avail_seats', 'type'=>'number', 'min'=>'0','id'=>'avail_seats','class'=>'fleft width100 padding10 row width300', 'placeholder'=>lang('available_seat_placeholder'), 'value'=>set_value('avail_seats', $avail_seats));
    echo form_input($data);?>
        </div>
        <div class="fleft width100 line4"></div>
        <div class="roundstep-no fleft size13"><?php echo lang('step_4');?> &nbsp;</div> 
          <span class="size16 fleft bold"><?php echo lang('add_details');?></span>   

        <div class="fleft  width100 margintop20">
          <span class="size14 bold row"><span class="mandatory"></span> <?php echo lang('luggage_size');?></span>   
          <select class="fleft width100 padding10 width300" name="luggage_size" id="luggage_size" form="frmtrip">
            <option value="1"><?php echo lang('luggage_size_1');?></option>
            <option value="2"><?php echo lang('luggage_size_2');?></option>
            <option value="3"><?php echo lang('luggage_size_3');?></option>
          </select>     
        </div>

        <div class="fleft  width100 margintop20">
          <span class="size14 bold row"><span class="mandatory"></span> <?php echo lang('flexibility');?></span>   
          <select class="fleft width100 padding10 width300" name="flexibility" id="flexibility" form="frmtrip">
            <option value="1"><?php echo lang('flexibility_1');?></option>
            <option value="2"><?php echo lang('flexibility_2');?></option>
            <option value="3"><?php echo lang('flexibility_3');?></option>
          </select>     
        </div>

        <div class="fleft  width100 margintop20">
          <span class="size14 bold row"><span class="mandatory"></span> <?php echo lang('detour');?></span>   
          <select class="fleft width100 padding10 width300" name="detour" id="detour" form="frmtrip">
            <option value="1"><?php echo lang('detour_1');?></option>
            <option value="2"><?php echo lang('detour_2');?></option>
            <option value="3"><?php echo lang('detour_3');?></option>
          </select>     
        </div>

        <div class="fleft width100 margintop20">
          <span class="size14 bold row"><span class="mandatory">*</span> <?php echo lang('phone_number');?></span><br>
          <span class="description"> <?php echo lang('phone_number_desc');?></span>
          <?php
    $data = array('name'=>'number', 'id'=>'number','class'=>'fleft width300 padding10 row',  'placeholder'=>lang('contact_person_number'), 'value'=>set_value('number', $number));
    echo form_input($data);?>
        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold row"><span class="mandatory">*</span> <?php echo lang('comments');?></span><br>
          <span class="description"> <?php echo lang('comments_desc');?></span>
           <?php
    $data = array('name'=>'comments','class'=>'fleft width100 padding10 rows','rows'=>'4', 'id'=>'comments', 'value'=>set_value('comments', $comments));
    echo form_textarea($data);?> 
         
        </div>
    <div class="float width100 line4"></div>
    <div class="fleft width100 padding20">
        <div class="next">
          <button type="submit" class="padding10 btn next-btn"><span class="fa fa-arrow-right"></span> <?php echo lang('next');?></button>
        </div> 
            
        <div class="prev">
          <button class="padding10 btn prev-btn" disabled="disabled"><span class="fa fa-arrow-left"></span> <?php echo lang('prev');?></button>
        </div> 
        <div class="cancel">
          <a class="padding10 btn cancel-btn" href="<?php print base_url(); ?>"><span class="fa fa-times "></span> <?php echo lang('cancel');?></a>
        </div>     
    </div>


     
    </div>
     </div>
    <!-- End Left -->
    <div class="col-lg-4  col-md-12 col-sm-12 col-xs-12">
    <div class="trip-right map">

      <div class="roundstep-no fleft size13"><?php echo lang('info_map');?> &nbsp;</div>
      <h2 class="size16 fleft bold"><?php echo lang('journey_route');?></h2><br>

      <div class="float width100 line4"></div>

        <div id="route-map-data"></div>
      <div class="fleft width100 line4"></div>

    </div>
    <!-- End Right -->

    </div>
    <!-- End -->

    </div>


  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(14.499454,-14.445561),
    zoom:6,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("route-map-data"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

 
<?php include('footer.php');?> 