<?php include('header.php'); ?>

<?php echo theme_css('font-awesome.css',true) ?>

<script type="text/javascript">
var baseurl = "<?php print base_url(); ?>";
function viewPopcontact(pmId)
{
 
    if($('#tripDate').val()){
       var pmQueryString = 'pmId='+pmId+'&tripDate='+$('#tripDate').val(); 
       $.ajax({
         type: "POST", 
         url: baseurl + "communication/sendenquiry/true",  
         dataType: "json", 
         data:pmQueryString,
         success: function(json) {
          if (json.result == 0){                                                                   
           $('#enquiry_'+pmId).addClass(".book-active-success");
           $('#enquiry_'+pmId).removeClass("btn btn-success");
           $('#enquiry_'+pmId).html('<span> <?php echo lang("enquiry_request");?> </span>');
           //$('#spnError').show();
           return false;
          } else if (json.result == 1) {
              $('#enquiry_'+pmId).addClass(".book-active-success");
           $('#enquiry_'+pmId).removeClass("btn btn-success");
           $('#enquiry_'+pmId).html('<span> <?php echo lang("enquiry_confirm");?> </span>');
          }
         }
        });
    }else{
        alert('<?php echo lang('please_trip_date')?>');
        return false;
    }
} 
  $('[data-toggle="tooltip"]').tooltip();   
</script>

<?=  theme_js('rate.js',true)?>
<div class="container-fluid margintop40">
  <div class="container">
            <div class="row">
    <ul class="row brd-crmb">
      <li><a href="<?php echo  base_url('home'); ?>"> <img src="<?php echo theme_img('home-ico.png');?>"> </a></li>
      <li> / </li>
      <li><a href="javascript:void(0)"><?php echo lang('search');?></a></li>
      <li> / </li>
      <li><a href="javascript:void(0)">
            <?php $source = explode(",", $tripdetails['source_leg']); 
                    echo  $source[0]; ?> <span> <img src="<?php echo theme_img('search-arrow-right-grey.png') ?>"> </span> 
                    <?php $destination = explode(",", $tripdetails['destination_leg']); 
                    echo  $destination[0]; ?>
          
  </a></li>
    </ul>
    </div></div></div>    
      <div class="container-fluid margintop40">
  <div class="container">
            <div class="row"> 
    <div class="col-lg-8 col-md-8 col-sm-9 ">
<div class="share-post">
<ul>
  
<li><a href="javascript:void(0)" class="twitter share-tooltip share-tooltip-top social_icon" rel="nofollow" data_action="twitter"><i class="fa fa-twitter"></i>Twitter</a></li>
<li><a href="javascript:void(0)" class="facebook share-tooltip share-tooltip-top social_icon" rel="nofollow" data_action="facebook"><i class="fa fa-facebook" data_action="facebook"></i>Facebook</a></li>
<li><a href="javascript:void(0)" class="gplus share-tooltip share-tooltip-top social_icon"  rel="nofollow"  data_action="google"><i class="fa fa-google-plus"></i>Google</a></li>
<li><a href="javascript:void(0)" class="tumblr share-tooltip share-tooltip-top social_icon" rel="nofollow" data_action="tumblr"><i class="fa fa-tumblr"></i>Tumblr</a></li> 
<li><a href="javascript:void(0)" class="pinterest share-tooltip share-tooltip-top social_icon" rel="nofollow"  data_action="pinterest"><i class="fa fa-pinterest"></i>Pinterest</a></li>
</ul>
</div>
            
    <div class="rowrec margin">
      <div class="trip-lft">
        
      <div class="rowrec view-map"><?php echo $map['js']; 
              echo $map['html']; ?>
      <div id="directionsDiv"></div></div>
      <div class="rowrec line4"></div>

      <div class="sea-city-city cs-blue-text cs-lgrey-bg padding10" align="center"> <b><?= $tripdetails['source_leg'] ?> 
      <span> <img src="<?php echo theme_img('search-arrow-right-grey.png');?>"> </span>
    <?= $tripdetails['destination_leg'] ?> </b> </div>

      <div class="rowrec line4"></div>
      <div class="row margin">
        <div class="view-col1">
            <h4><?php echo lang('trip_detail');?> </h4><small class=""><?php echo lang('published_at');?> <?php echo date('d/m/Y',strtotime($tripdetails['trip_created_date']));?></small>
        </div>
        <!-- <div class="view-col1">
            <h4 class="cs-blue-text"> <?php echo lang('preferences');?>  </h4>
            <p> </p>
        </div> -->
      </div>
      

      <div class="rowrec">

        <div class="trip-col3">
            <span class=""><span> <img src="<?php echo theme_img('marker-from.png');?>"> </span> <?php echo lang('departure_point');?></span>
            <br>
            <span class=""><?= $tripdetails['source_leg'] ?></span>
            <br><br>
            <span class=""><span> <span> <img src="<?php echo theme_img('marker-to.png');?>"> </span> </span> <?php echo lang('destination');?></span>
            <br>
            <span class=""><?= $tripdetails['destination_leg'] ?></span>
        </div>

        <div class="trip-col3">
            <span><span> <img src="<?php echo theme_img('random-ico.png');?>"> </span> <?php echo lang('detour');?></span>
            <br><br><br>
            <span class="">
            <?php if ($tripdetails['detour'] == 1){
                    echo lang('detour_1');
                  }else if ($tripdetails['detour'] == 2) {
                   echo lang('detour_2');
                  }else{
                    echo lang('detour_3');
                  }
            ?></span>
        </div>

        <div class="trip-col3">
            <span><span> <img src="<?php echo theme_img('time-ico.png');?>"> </span> <?php echo lang('flexibility');?></span>
            <br><br>            
            <span> <?php if ($tripdetails['flexibility'] == 1){
                    echo lang('flexibility_1');
                  }else if ($tripdetails['flexibility'] == 2) {
                   echo lang('flexibility_2');
                  }else{
                    echo lang('flexibility_3');
                  }
            ?></span>
        </div>

        <div class="trip-col3">
            <span><span> <img src="<?php echo theme_img('suitcase-ico.png');?>"> </span> <?php echo lang('luggage_size');?></span>
            <br><br>
            <span>
              <?php if ($tripdetails['luggage_size'] == 1){
                    echo lang('luggage_size_1');
                  }else if ($tripdetails['luggage_size'] == 2) {
                   echo lang('luggage_size_2');
                  }else{
                    echo lang('luggage_size_3');
                  }
            ?>
            </span>
        </div>

      </div>

      <div class="rowrec line4"></div>

    </div></div></div>
    <!-- End Left -->

    <div class="trip-right cs-lgrey-bg">
      <div class="rowrec trp-top padding10">
          <img  class="passanger-img" src="<?php if($tripdetails['user_profile_img']) { echo theme_profile_img($tripdetails['user_profile_img']); } else { echo theme_img('default.png');  }?>">
          <strong class="cs-blue-text"><?= $tripdetails['user_first_name']?></strong> <span><?php echo lang('offer');?> </span>
          <h4 class="paddingtop10 cs-blue-text">
          <?php $source = explode(",", $tripdetails['source_leg']); 
          echo  $source[0]; ?>  <span class="paddinglr10"> <img src="<?php echo theme_img('search-arrow-right-grey.png');?>"> </span>
          <?php $destination = explode(",", $tripdetails['destination_leg']); 
          echo  $destination[0]; ?>
        </h4>
      </div>

      <div class="rowrec line4"></div>

      <div class="padding20">          
          <h4 class="size22">  <?= format_currency($tripdetails['route_rate']); ?>  <?php echo lang('per_passenger');?></h4>
          
      </div>

      <div class="row">
    <?php if($tripdetails['trip_casual_date']){ ?>
        <div class="colmd6">
            <?php echo lang('departure_date');?><br>
            <span class="size20"><span><img src="<?php echo theme_img('cal-14-14.png');?>"></span> <?php echo date('d/m/Y',strtotime($tripdetails['trip_casual_date']));?>
            </span><br>
            <!-- <small> <?php echo date('M',strtotime($tripdetails['trip_casual_date']));?> </small> -->
        </div>
        <?php } ?>
        <div class="colmd6 noborder">
            <?php echo lang('departure_time');?><br>
            <span class="size20"><span><img src="<?php echo theme_img('time-ico.png');?>"></span> <?= $tripdetails['expected_time'] ?>
            </span><br>
           
        </div>

      </div>

      <div class="rowrec line4"></div>

      <div class="rowrec size20 cs-blue-text center"> <?php echo lang('total_no_seats');?> <?= $tripdetails['trip_avilable_seat'] ?>   </div> 

      <div class="rowrec line4"></div>
      
      <div class="rowrec size20 cs-blue-text center"> 
            <?php echo lang('available_seat');?> <?php
                if($tripdetails['trip_casual_date']){
                    echo getAvailableSeat($tripdetails['trip_casual_date'],$tripdetails['trip_id']);
                }else{
                    if($journeyDate == ''){
                        $journeyDate = date('d/m/Y', now());
                    }
                    echo getAvailableSeat(date('Y-m-d',  strtotime(str_replace('/', '-', $journeyDate))),$tripdetails['trip_id']);
                }
            ?>   
      </div> 

      <div class="rowrec line4"></div>    
      <div class="rowrec center margin padding10">
      <!-- On vérifie si l'utilisateur est connecté: -->      
        <?php if($islogin){
          if($tripdetails['trip_user_id'] == $user['user_id']){?>
<!--Possibilité #1 : Si oui et que c'est son annonce, il peut pas réserver -->
            <a href="javascript:void(0)" class="badge badge-success your-trip">  <?php echo lang('your_trip');?></a>    <?php 
          }
          else if(isset($tripenquirydetail->enquiry_passanger_id) == $user['user_id']){
            if ($tripenquirydetail->enquiry_trip_status == 0) {?>
<!--Possibilité #3 : Si elle est en attente de confirmation-->
              <span href="javascript:void(0)" class="label label-info padding10 ">  <?php echo lang('already');?> </span>
              <button href="#" class="btn btn-danger padding10 cancel_enquiry">  <?php echo lang('cancel_enquiry');?> </button><?php            
            }
            else{
               ?>
<!--Possibilité #3 : Si sa réservation est confirmée -->
              <span href="javascript:void(0)" class="label label-success padding10 ">  <?php echo lang('enquiry_accepted');?> </span>
              <button href="#" class="btn btn-danger padding10 cancel_enquiry">  <?php echo lang('cancel_enquiry');?> </button><?php              
            }                
          }
          else{
            if(getAvailableSeat($tripdetails['trip_casual_date'],$tripdetails['trip_id']) == 0){?>
              <span class="badge badge-danger trip-complet"><?php echo lang('trip_complet');?> </span><?php
            }
            else{
              if($tripdetails['trip_casual_date']){
                ?>
<!--Possibilité #4 :Si c'est occasionnel, il peut réserver en cliquant sur le bouton -->
                  <input type="hidden" name="tripDate" id="tripDate" value="<?=date('d/m/Y', strtotime($tripdetails['trip_casual_date']));?>"/>  
                  <button  href="#" class="btn btn-success padding10 " id="enquiry_<?=$tripdetails['trip_id']?>" 
                      onclick="viewPopcontact(<?=$tripdetails['trip_id']?>)"><?php echo lang('get_enquiry');?>
                  </button>  
                <?php     
            }
            /*Si c'est fréquent, on lui demande de choisir la date de son voyage puis de réserver*/
            else{   
                ?>      
                  <input type="texte" name="tripDate" id="tripDate" value="<?=$journeyDate?>"/>
                  <button href="javascript:void(0)" class="btn btn-success padding10 "  id="enquiry_<?=$tripdetails['trip_id']?>"
                          onclick="viewPopcontact(<?=$tripdetails['trip_id']?>)"><?php echo lang('get_enquiry');?>
                  </button>
                <?php
              }
            }              
          }
          ?>
          <div class="rowrec line4"></div>
            <div class="rowrec size20 cs-blue-text center"> 
              <?php echo lang('passenger_in_trip');?></br>
             
            <div class="passenger-in-trip">
            <?php if($passangers_in_trip){?>          
              <ul>            
                <?php foreach ($passangers_in_trip as $passangers){ ?>                     
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $passangers->user_first_name?>"> <li> <img  class="passanger-img" src="<?php if($passangers->user_profile_img) { echo theme_profile_img($passangers->user_profile_img); } else { echo theme_img('default.png');  }?>">
                </li><?php } ?></a>
              </ul>
              <?php }else{            
                echo lang('no_passanger');             
             }?>
            </div><?php
        }       
        /*S'il n'est pas connecté, on lui renvoie dans la page de connexion*/
        else{
          if(getAvailableSeat($tripdetails['trip_casual_date'],$tripdetails['trip_id']) == 0){?>
            <span class="badge badge-danger trip-complet"><?php echo lang('trip_complet');?> </span><?php
          }
          else{?>
            <a href="<?=base_url('login')?>" class="btn btn-success padding10 "> <?php echo lang('get_enquiry');?> </a> 
            <?php
          }
        }?>
      </div>
      <div class="rowrec line4"></div>

    </div>
    <!-- End Right -->

    </div>
    <!-- End -->

    <div class="rowrec margin">

      <div class="trip-lft">
      <h4 class="cs-lgrey-bg padding10"><span class="fa fa-comment"></span> <?php echo lang('more_details');?> </h4>
        <div class="rowrec line4"></div>

        <p class="para"> <?= $tripdetails['trip_comments'] ?> </p>

        <div class="rowrec line4"></div></br>

        <div class="trip-lft">

        <h4 class="cs-lgrey-bg padding10"><span class="fa fa-star"></span> <?php echo lang('received_ratings');?> </h4>
        <!-- Avis récus -->
        <div class="rowrec line4"></div>
          <?php if ($received_rating) { ?>  
            <?php foreach ($received_rating as $rating) { ?>    
              <div class="received-rating">
                <a class="profile-img" href="#"> <img src="<?php if($rating->user_profile_img) { echo theme_profile_img($rating->user_profile_img); } else { echo theme_img('default.png');  }?>" width="30" height="30"> 
                </a>
              <div class="rate-content">
                <h3 class="<?php if ($rating->rating == 5){echo 'fa fa-star rate5';}elseif ($rating->rating == 4) { echo 'fa fa-star rate4';
                }elseif ($rating->rating == 3) { echo 'fa fa-star rate3';} elseif ($rating->rating == 2) { echo 'fa fa-star rate2';}
                elseif ($rating->rating == 1) { echo 'fa fa-star rate1';}?>">
                <?php 
                if ($rating->rating == 5){
                  echo lang('rate5');
                }elseif ($rating->rating == 4) {
                 echo lang('rate4');
                }elseif ($rating->rating == 3) {
                 echo lang('rate3');
                }elseif ($rating->rating == 2) {
                 echo lang('rate2');
                }elseif ($rating->rating == 1) {
                 echo lang('rate1');
                }
                ?></h3><br><br>                
                <p class="rating-comment"><strong><?=$rating->user_first_name;?>: </strong><?=$rating->rating_comment;?></p>
              </div>
              <span class="rating-info">
                <small class="rating-date"><?php echo date('d/m/Y',strtotime($rating->created_date));?></small>
              </span>
              </div>
              <?php } ?>
              <?php
            } else { ?>
              <p class="para"><?php echo lang('no_ratings'); ?></p>
                <?php
              }?>

      </div>
      </div>
      <!-- End 2  left row -->
      <!-- Row avis driver -->
      

      <div class="trip-right">

        <h4 class="cs-lgrey-bg padding10"><i class="fa fa-user" aria-hidden="true"></i>
        <?php echo lang('driver');?> </h4>

        <div class="rowrec line4"></div>

        <div class="rowrec">

          <div class="fleft paddingright10">
              <a href="javascript:void(0)"> <img src="<?php if($tripdetails['user_profile_img']) { echo theme_profile_img($tripdetails['user_profile_img']); } else { echo theme_img('default.png');  }?>" class="search-thumb search-user-thumb"> </a>
          </div>
          <div class="fleft paddingtop10">
              <strong class="size16">
                  <a href="javascript:void(0)" class="cs-blue-text"><?= $tripdetails['user_first_name'] .' '.$tripdetails['user_last_name'] ?></a>
              </strong><br>
        
              <!-- <small class="size13" > 
        DOB : 
          <?php
 
               if (!empty($tripdetails['show_number']))
                {
                  DOB :  echo $tripdetails['user_dob'];
                }
                else
               {
                  echo "User is not specified";
               }
 ?></small><br> -->
        <small class="size14" >
        <?php echo lang('age');?>:  
          <?php
 
               if (!empty($tripdetails['show_number']))
         {
          $from = new DateTime($tripdetails['user_dob']);
          $to   = new DateTime('today');
          echo $from->diff($to)->y; 
         }
                  else
          {
            echo lang('no_age');
          }
                 ?>
          </small>
        
              <span class="rowrec size14"> 
                <span class="fleft"> <?php echo lang('ratings');?> </span>
                  <div class="starrow fleft marginleft10">           
                    <script>rate(<?=getOverallRating($tripdetails['user_id'])?>);</script>                
                 </div>
              </span>
              
          </div>
          
        </div>

        <div class="rowrec line4"></div>

        <h4 class="rowrec cs-lgrey-bg padding10"><i class="fa fa-check-circle" aria-hidden="true"></i>
        <?php echo lang('my_verifications');?> </h4>

        <div class="rowrec line4"></div>

        <ul class="rowrec trp-cont-rht">
            <li>
                <span class="trp-imge paddingtop5 glyphicon glyphicon-phone"></span> <strong class="size14 paddingleft8"><?php echo lang('phone');?> </strong>
        
        <?php  if($tripdetails['show_number'] == 1)
        { ?>  
                <span class="fright paddingtop5"><img src="<?php echo theme_img('verified-ico-green.png ');?>"></span>
        
        <?php }
              
                else
        { ?>
        <span class="fright paddingtop5"><img src="<?php echo theme_img('verified-ico-red.png ');?>"></span>
         <?php  } ?>
            </li>
            <li>
              <span class="trp-imge paddingtop5 fa fa-envelope"></span> <strong class="size14 paddingleft8"><?php echo lang('email');?> </strong>            
              <span class="fright paddingtop5"><img src="<?php echo theme_img('verified-ico-green.png');?>"></span>
            </li>
        </ul>
        <div class="rowrec line4"></div>
      <h4 class="rowrec cs-lgrey-bg padding10"> <i class="fa fa-thumbs-up" aria-hidden="true"></i>
      <?php echo lang('preferences');?> </h4>
      <div class="rowrec line4"></div>
      <div class="trip-icons">
        
        <?php  if($tripdetails['allowed_chat'] == 1)
                 { ?>  
                    <li><span class="chat-green"></span></li>
         <?php }
        else
        { ?>
                <li><span class="chat-red"></span></li>
        <?php } ?>
        
       <?php  if($tripdetails['allowed_food'] == 1)
        { ?>
                    <li><span class="food-green"></span></li>
       <?php }
        else
        { ?>
        
       <li><span class="food-red"></span></li>
    <?php } ?>
        
        <?php  if($tripdetails['allowed_music'] == 1)
        { ?>
                    <li><span class="music-green"></span></li>
        <?php }
        else
        { ?>
        <li><span class="music-red"></span></li>
        <?php } ?>
        <?php  if($tripdetails['allowed_smoke'] == 1)
        { ?>
                    <li><span class="smoke-green"></span></li>
               <?php }
        else
        { ?> 
            <li><span class="smoke-red"></span></li>
        <?php } ?>
                    </div>
      
      

        <div class="rowrec line4"></div>

        <!-- <h4 class="rowrec cs-lgrey-bg padding10"> <span> <img src="<?php echo theme_img('suitcase-ico.png');?>"> </span> <?php echo lang('activity');?> </h4> -->

        <!-- <div class="rowrec line4"></div> -->

        <ul class="size14 row trp-cont-rht">           
            <li><span class="trp-imge paddingtop5"><img src="<?php echo theme_img('cal-14-14.png');?>" width="12" height="12"></span> <strong class="paddingleft8"><?php echo lang('since');?></strong>: <?php echo date('d/m/Y',strtotime($tripdetails['user_created_date']));?></li>
            <li><span class="trp-imge paddingtop5"><img src="<?php echo theme_img('time-ico.png');?>"></span> <strong class="paddingleft8"><?php echo lang('last_visit');?></strong>: <?php echo date('d/m/Y',strtotime($tripdetails['user_last_login']));?></li>           
        </ul>

        <div class="rowrec line4"></div>

        <h4 class="rowrec cs-lgrey-bg padding10"> <span class="fa fa-car"> </span> <?php echo lang('car');?> </h4>

        <div class="rowrec line4"></div>

        <div class="rowrec center">
              <span class=" rowrec cs-blue-text"><b><?= $tripdetails['vechicle_type_name'] ?></b></span>
              <img class="search-thumb search-user-thumb " style="margin: 15px 0 15px 7px;" src="<?php if(!empty($tripdetails['vechicle_logo'])){ echo  base_url('uploads/vehicle/thumbnails/'.$tripdetails['vechicle_logo'] ); } else { echo theme_img('no_car.png'); } ?>">
               
        </div>
        <div class="rowrec line4"></div>
          </div>


      </div>
      <!-- End 2  right row -->

    </div>


  </div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo  theme_js('jquery.datepick/redmond.datepick.css');?>">

<?php echo  theme_js('jquery.datepick/jquery.plugin.js',true);?> 
<?php echo  theme_js('jquery.datepick/jquery.datepick.js',true);?>
<script type="text/javascript">
$('#tripDate').datepick({
 changeMonth: false,autoSize: true,minDate: 0,dateFormat: 'dd/mm/yyyy'
});
  
   var baseurl = "<?php print base_url(); ?>";
$(document).ready(function() {
  
  /* Slider Expand Click */
  $('body').on("click",'.social_icon',function()
  {
    var action = $(this).attr("data_action");
    var url = window.location.href;
    if(action == 'facebook'){
      window.open("https://www.facebook.com/sharer/sharer.php?u="+url, '_blank');
    }
    if(action == 'twitter'){
      window.open("https://twitter.com/intent/tweet?url="+url, '_blank');
    }
    if(action == 'google'){
      window.open("https://plus.google.com/share?url="+url, '_blank');
    }
    if(action == 'tumblr'){
      window.open("http://www.tumblr.com/share?url="+url, '_blank');
    }
    if(action == 'pinterest'){
      window.open("http://pinterest.com/pin/create/button/?url="+url, '_blank');
    }
  });
});
  
</script>
<?php include('footer.php'); ?>