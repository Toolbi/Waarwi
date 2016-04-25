<?php include('header.php'); ?>
<?php echo theme_js('jquery-ui.js', true);?>
<?php echo theme_js('popup.js', true);?>

<?php  echo theme_css('themes/base/jquery.ui.all.css', true);?>
<script type="text/javascript" src="<?php echo theme_js('jquery.validate.js');?>"></script>
<?php echo theme_js('pager.js', true);?>
<script>
  $(document).ready(function() {

  	$('#regular').attr('checked',true);
   $('#search_results').scrollPagination({

		nop     : 3, // The number of posts per scroll to be loaded
		offset  : 0, // Initial offset, begins at 0 in this case
		error   : '<?php echo lang('no_more_trips');?>', // When the user reaches the end this is the message that is
		                            // displayed. You can change this if you want.
		delay   : 500, // When you scroll down the posts will load after a delayed amount of time.
		               // This is mainly for usability concerns. You can alter this as you see fit
		scroll  : true // The main bit, if set to false posts will not load as the user scrolls. 
		               // but will still load if the user clicks.

                });

 });
</script> 
<?php echo theme_js('bootstrap-datepicker.js',true); ?>
<?php echo theme_js('bootstrap-datepicker.fr.js',true); ?>
<?php echo theme_css('bootstrap-datepicker.css', true);?>
<script type="text/javascript">
  var baseurl = "<?php print base_url(); ?>";
  var tickicon = "<?php echo theme_img('enquiry_tick.png'); ?>";
</script>
<script type="text/ecmascript">
  function viewPopup(pmId)
  {

  var pmQueryString	= 'pmProjId='+pmId;
  JqueryPopup('Login', 400, 460, '<?php echo base_url('search/popup/'); ?>', pmQueryString);
}

function viewroute(pmId)
{

	var pmQueryString	= 'pmProjId='+pmId;
	JqueryPopup('Route Map', 486, 652, '<?php echo base_url('search/route/'); ?>', pmQueryString);
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places&language=en"></script>
<script type="text/javascript" src="<?php echo theme_js('jquery.validate.js');?>"></script>
<script type="text/javascript">
  var country = '<?php print ($this->config->item('country_code') != '')?$this->config->item('country_code'):''; ?>';

  /*Datepicker*/
  var nowDate = new Date();
  var newDate = "<?=$selparam['date']?>";
  var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
  $(function () {
    $("#datepicker").datepicker({ 
      autoclose: true, 
      todayHighlight: true,
      language: "fr",
      startDate: today,
    }).datepicker('update', newDate);;
  });

</script>
<?php echo theme_js('search.js', true);?>
<?=  theme_js('rate.js',true)?>
<div class="container-fluid margintop40">
  <div class="container container-sea">
    <div class="row">
      <ul class="row brd-crmb">
        <li><a href="<?php echo base_url('home');?>"> <img src="<?php echo theme_img('home-ico.png') ?>"> </a></li>
        <li> / </li>
        <li><a href="#"><?php echo lang('find_your_carpool'); ?></a></li>
        <li class="view-menu">
          <ul>
            <li><a href="#" class="li-ico current-li-view list-view"> <span><?php echo lang('list_view');?></span> </a></li>
            <li><a href="#" class="map-ico map-view"> <span><?php echo lang('map_view');?></span> </a></li>
          </ul>
        </li>
      </ul>
      <div class="container-fluid">
        <div class="container container-sea">
          <div class="row">

           <div class="col-lg-3 col-md-3 col-sm-3 search-lft">
            <div class="row srh-hdr">
              <h3><?php echo lang('available_carpools');?></h3>
              <h3 id="count"><?=(!empty($count))?$count:0?></h3>
              <div class="tip-arrow"></div>
            </div>


            <div class="rowrec srh-lft-main">

              <div class="row srh-div">
                <h3><?php echo lang('short_by');?></h3>
                <ul class="row tb-mnu">
                  <li><a href="#"><?php echo lang('proximity');?></a></li>
                  <li><a href="#"><?php echo lang('time');?></a></li>
                  <li><a href="#"><?php echo lang('price');?></a></li>
                </ul>
              </div>

              <div class="rowrec srh-div">
                <h3><?php echo lang('trip_frequency');?></h3>
                <div class="row">
                  <label class="rowrec"> <input type="radio" value="1"  id="frequency_1" name="frequencytype" onchange="filter_result();"  > <?php echo lang('regular');?>  </label>
                  <label class="rowrec"> <input type="radio" value="2" id="frequency_2" name="frequencytype"  onchange="filter_result();"> <?php echo lang('casual');?>  </label>
                  <label class="rowrec"> <input type="radio" value="" id="frequency_3" name="frequencytype"  onchange="filter_result();"> <?php echo lang('both');?>  </label>
                </div>
              </div>

              <div class="rowrec srh-div">
                <h3><?php echo lang('car_comfort_level');?></h3>
                <div class="row">
                  <label class="rowrec"> <input type="radio"> <?php echo lang('Luxury');?></label>
                  <label class="rowrec"> <input type="radio"> <?php echo lang('comfort_or_above');?></label>
                  <label class="rowrec"> <input type="radio"> <?php echo lang('normal_or_above');?></label>
                  <label class="rowrec"> <input type="radio"> <?php echo lang('all_ypes');?></label>
                </div>
              </div>

              <div class="rowrec srh-div">
                <h3> <?php echo lang('return_journy');?> </h3>
                <div class="row" id="return_type">
                  <label class="rowrec"> <input type="radio"  id="return_1" value="yes" name="returntype"  onchange="filter_result();"  > <?php echo lang('yes');?> </label>
                  <label class="rowrec"> <input type="radio" id="return_2" value="no" name="returntype"  onchange="filter_result();"  > <?php echo lang('no');?>  </label>
                  <input type="hidden" name="return" id="return" value="" />             
                </div>
              </div>
            </div>
          </div>
          <!-- End Left -->

          <div class="col-lg-9 col-md-8 col-sm-9 search-right">

            <div class="rowrec search-header">
             <form method="get" id="findform"  action="<?php echo  base_url(); ?>search">
              <input type="text" placeholder="From"  name="source" id="source" class="sea-inp" value="<?=$selparam['SOURCE']?>"> 
              <input type="hidden" name="formlatlng" id="formlatlng"  value="<?=$selparam['fromlatlng']?>"/>
              <input type="text"  placeholder="To"   name="destination" id="destination" class="sea-inp" value="<?=$selparam['DESTINATION']?>"/>
              <input type="hidden" name="tolatlng" id="tolatlng"  value="<?=$selparam['tolatlng']?>" />            
              <span class="date" id="datepicker" data-date-format="<?php echo lang('date-format');?>">                
                <input type="text"  class="sea-dat"   name="journey_date">
                <span class="input-group-addon" style="display: none"><i class="glyphicon glyphicon-calendar"></i></span>
              </span>
              <input type="hidden" name="frequency" id="frequency"  value="<?=$selparam['frequency']?>"/>
              <button type="submit" class="btn search-btn"><span class="fa fa-search"></span> <?php echo lang('search');?></button>
            </form>       
          </div>
          <div id="rightarea">  
            <div id="search_results">
              <?php          
              if($search_results)
              {                              
                foreach ($search_results as $search_result)
                { 
                 ?>
                  <div class="row sea-box">
                    <a href="<?php echo base_url('trip/tripdetails/'.$search_result['trip_led_id']);?>">
                      <div class="sea-col1">            
                        <div class="sea-nam">
                        <img  class="search-user-img" src="<?php if($search_result['user_profile_img']) { echo theme_profile_img($search_result['user_profile_img']); } else { echo theme_img('default.png');  }?>"><br>
                          <h3> <?php if($search_result['user_type'] == 1){echo $search_result['user_company_name']; }else{ echo $search_result['user_first_name'];}?></h3><small><?php                              
                            if (!empty($search_result['show_number']))
                            {
                              $from = new DateTime($search_result['user_dob']);
                              $to   = new DateTime('today');
                              echo $from->diff($to)->y.' '.lang('dob_year'); 
                            }
                            else
                            {
                              echo '20 ans';
                            }
                          ?></small>
                           <p class="ratings">
                                <script>rate(<?=getOverallRating($search_result['user_id'])?>);</script>
                            </p>
                          <div class="line2"></div>
                           <div class="sea-user-rating">
                           
                            <div class="sea-preferences">

                                <div class="trip-icons">                        
                                    <?php  if($search_result['allowed_chat'] == 1)
                                    { ?>  
                                    <span class="chat-green t-tooltip">
                                      <span class="t-tooltiptext"><?php echo lang('chat_green')?></span>
                                    </span>
                                    <?php }
                                    else
                                        { ?>
                                    <span class="chat-red t-tooltip">
                                      <span class="t-tooltiptext"><?php echo lang('chat_red')?></span>
                                    </span>
                                    <?php } ?>

                                    <?php  if($search_result['allowed_food'] == 1)
                                    { ?>
                                    <span class="food-green t-tooltip">
                                      <span class="t-tooltiptext"><?php echo lang('food_green')?></span>
                                    </span>
                                    <?php }
                                    else
                                        { ?>

                                   <span class="food-red t-tooltip">
                                      <span class="t-tooltiptext"><?php echo lang('food_red')?></span>
                                    </span>
                                    <?php } ?>

                                    <?php  if($search_result['allowed_music'] == 1)
                                    { ?>
                                    <span class="music-green t-tooltip">
                                      <span class="t-tooltiptext"><?php echo lang('music_green')?></span>
                                    </span>
                                    <?php }
                                    else
                                        { ?>
                                    <span class="music-red t-tooltip">
                                      <span class="t-tooltiptext"><?php echo lang('music_red')?></span>
                                    </span>
                                    <?php } ?>
                                    <?php  if($search_result['allowed_smoke'] == 1)
                                    { ?>
                                    <span class="smoke-green t-tooltip">
                                      <span class="t-tooltiptext"><?php echo lang('smoke_green')?></span>
                                    </span>
                                    <?php }
                                    else
                                        { ?> 
                                    <span class="smoke-red t-tooltip">
                                      <span class="t-tooltiptext"><?php echo lang('smoke_red')?></span>
                                    </span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                                      
                        </div>
                      </div>
                      <div class="sea-col2">
                          <h3 class="sea-date"><?=date('l d - m - y',  strtotime(str_replace('/', '-', $selparam['date'])));?> <?=($search_result['expected_time']!=''? lang('at').' '.$search_result['expected_time']:$search_result['trip_depature_time']);?>
                          </h3>
                                               <div class="sea-city cs-blue-text"> 
                        <?php $source = explode(",", $search_result['source']); 
                          echo  $source[0]; ?> <span class="fa fa-arrow-right"> </span> 
                          <?php $destination = explode(",", $search_result['destination']); 
                          echo  $destination[0]; ?>
                        </div> 
                        <div class="search-pick-point">
                          <strong class="cs-blue-text"><span> <img class="sea-from" src="<?php echo theme_img('marker-from.png') ?>"> </span> <?php echo lang('departure');?></strong>
                          <?= $search_result['source'] ?><br>
                          <span class="cs-blue-text"><?='( '.$amenties_details['distance_'.$search_result['trip_id']].' '.lang('km_away')?></span>                          
                          <div class=""><strong class="cs-blue-text margintop10"><span> <img class="sea-to" src="<?php echo theme_img('marker-to.png') ?>"> </span> <?php echo lang('arrival');?></strong>
                           <?= $search_result['destination'] ?></div>
                            <span class="sea-car-type">
                          <dt class="sea-car-title"><?php echo lang('car');?>: 
                              <strong class="sea-car-name"><?= $search_result['vechicle_type_name'] ?></strong>
                          </dt>
                         
                          
                      </span>
                        </div>
                      </div>
                      <div class="sea-col3">
                         <div class="sea-price fright">
                            <strong class="sea-rate"><?= format_currency($search_result['route_rate']); ?></strong><br>
                            <span class="sea-rate-title"><?php echo lang('per_passenger');?></span>
                        </div></div>
                        <!--<h4> Payment Methods </h4>
                        <div class="pay-met paddingtop10"> <img src="<?php //echo theme_img('pay-method.png') ?>"> </div> <br>-->
                        <div class="sea-seat-av">
                          <div class="sea-seat">
                             <?php
                             if(getAvailableSeat($search_result['trip_casual_date'],$search_result['trip_id']) == 0){?>
                                <span class="badge badge-danger sea-trip-complet"><?php echo lang('sea_trip_complet');?> </span><?php
                              }
                              else if($search_result['trip_casual_date']){?>
                                <span class="sea-av badge badge-success"><?php 
                                echo getAvailableSeat(date('Y-m-d',  strtotime(str_replace('/', '-', $search_result['trip_casual_date']))),$search_result['trip_id']);?></span> <?php
                              }
                              else{
                                echo getAvailableSeat(date('Y-m-d',  strtotime(str_replace('/', '-', $selparam['date']))),$search_result['trip_id']);
                              }                  
                            ?>
                        </div> 
                         <h4><?php 
                              if (getAvailableSeat(date('Y-m-d',  strtotime(str_replace('/', '-', $selparam['date']))),$search_result['trip_id']) >= 2){
                                echo lang('available_seat_search_1'); 
                            }else if(getAvailableSeat(date('Y-m-d',  strtotime(str_replace('/', '-', $selparam['date']))),$search_result['trip_id']) == 1){
                                echo lang('available_seat_search_2'); 
                            }else if(getAvailableSeat(date('Y-m-d',  strtotime(str_replace('/', '-', $selparam['date']))),$search_result['trip_id']) == 0){
                                echo ''; 
                            }?></h4>

                          </div>
                     
                      <div class="fright">
                          <span class="">
                             <?php if(!empty($search_result['vechicle_logo'])){ ?>
                             <img src="<?php echo base_url('uploads/vehicle/thumbnails/'.$search_result['vechicle_logo']); ?>" class="sea-veh-logo"><?php } else {  ?>
                             <img src="<?php echo theme_img('no_car.png'); ?>" class="sea-veh-logo">
                             <?php }?><br>

                          <i class="star-img"><img src="<?php echo theme_img('star-ico.png') ?>"></i>
                          <i class="star-img"><img src="<?php echo theme_img('star-ico.png') ?>"></i>
                          <i class="star-img"><img src="<?php echo theme_img('star-ico.png') ?>"></i>
                          <i class="star-img"><img src="<?php echo theme_img('nostar-ico.png') ?>"></i>
                          <i class="star-img"><img src="<?php echo theme_img('nostar-ico.png') ?>"></i><br>
                           <span class="sea-car-comfort">
                              <?php echo lang('car_comfort_level');?> : normal
                          </sapn>
                          </span>
                        
                          
                        </span>
                      </div> 
                      
                    </a>
                  </div>                 

      <?php }
    }?>
  </div>
</div>
<div id="map-content" style="display:none">
</div>

</div>


</div>
</div>
</div>
</div>
</div>
</div>



<link rel="stylesheet" type="text/css" href="<?php echo  theme_js('jquery.datepick/redmond.datepick.css');?>"> 
<?php echo  theme_js('jquery.datepick/jquery.plugin.js',true);?>
<?php echo  theme_js('jquery.datepick/jquery.datepick.js',true);?>
<script type="text/javascript">

  $('#journey_date').datepick({
    changeMonth: false,autoSize: true,minDate: 0,dateFormat: 'dd/mm/yyyy'});
  </script>
  <div class="modal"></div>
  <?php include('footer.php'); ?>
