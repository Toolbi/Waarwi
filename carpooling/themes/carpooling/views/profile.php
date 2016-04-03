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
			$message	= $this->session->flashdata('message'); ?>
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
			$error	= $this->session->flashdata('error'); 
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
			$error	= validation_errors();
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

}	<?php */?>
	
 
var baseurl = "<?php print base_url(); ?>";  
</script>
<script type="text/javascript" src="<?php echo theme_js('jquery.validate.js');?>"></script>
<?php echo theme_js('profile.js',true) ?>

<div class="container-fluid margintop40">
  <div class="container">
    <div class="row"> 
    <!-- Breadcrumb -->
        <ul class="row brd-crmb">
          <li><a href="<?php echo base_url('home');?>"> <img src="<?php echo theme_img('home-ico.png') ?>"> </a></li>
          <li> / </li>
          <li><a href="<?php echo base_url('profile');?>"><?php echo lang('personal_information');?></a></li>
          <div class="col-lg-12">                 
            <h2 class="pull-right">
              <?php echo lang('dashboard');?>  <?=$customer->user_first_name ?>
            </h2>            
          </div>
        </ul>
       
    </div>
    <!-- Photo de profil -->
    <div class="profile-picture">
      <div class="profile-pic" id="ProfilePic"> 
        <img src="<?php if($customer->user_profile_img) { echo theme_profile_img($customer->user_profile_img); } else { echo theme_img('default.png');  }?>" id="old-image" width="100" height="100">
      </div>
      <span><a class="add-picture-btn btn btn-info" href="javascript:void(0)" id="edit-profile">
      <?php echo lang('edit_photo');?> </a></span>
      
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
    <!-- Navigation haut  -->
    <!-- Profil  -->
    <div class="row">
    <a href="profile#personal-infos">
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box colored emerald-bg">
           <i class="fa fa-user"></i>
           <span><?php echo lang('profile');?></span>
        </div>
      </div>
    </a>
    <!-- Parametres -->
    <a href="profile#settings">
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box colored green-bg">
          <i class="fa fa-cogs"></i>
          <span><?php echo lang('settings');?></span>
        </div>
      </div>
    </a>
    <!-- Infos voitures -->
    <a href="profile#my-cars-info">
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box colored purple-bg">
          <i class="fa fa-car"></i>
          <span><?php echo lang('my_vehicles');?></span>
        </div>
      </div>
    </a>
    <!-- Voyages -->
    <a href="profile#my-trips">
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box colored red-bg">
          <i class="fa fa-road"></i>
          <span><?php echo lang('my_trips');?></span>
        </div>
      </div>
    </a>
    <!-- Avis -->
    <a href="profile#my-ratings">
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box colored yellow-bg">
          <i class="fa fa-star"></i>
          <span><?php echo lang('my_ratings');?></span>
        </div>
      </div>
    </a>
    <!-- Demandes -->
    <a href="profile#my-enquiries">
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box colored gray-bg">
          <i class="fa fa-question"></i>
          <span><?php echo lang('my_enquiries');?></span>
        </div>
      </div>
    </a>
  </div>
  </div> 
</div>
 <!-- FIN NAV HAUT -->

<div class="container-fluid">
  <div class="container">
    <div class="row">
    <!-- Navigation gauche -->
      <div id="v-nav" >

        <ul style="display: none">
          <!-- Profil -->
          <li tab="personal-infos"><span> <img src="<?php echo theme_img('profile-tab-ico.png') ?>"> </span> <?php echo lang('personal_info');?></li> 
          <!-- Paramètres -->
          <li tab="settings" ><span> <img src="<?php echo theme_img('preference-tab-ico.png') ?>"> </span> <?php echo lang('settings');?></li>
          <!-- Voitures -->
          <li tab="my-cars-info" ><span> <img src="<?php echo theme_img('my-car-tab-ico.png') ?>"> </span> <?php echo lang('my_cars');?></li>
          <!-- Trajets/Annonces -->
           <li tab="my-trips" ><span> <img src="<?php echo theme_img('preference-tab-ico.png') ?>"> </span> <?php echo lang('my_trips');?></li> 
           <!-- Avis -->
           <li tab="my-ratings" ><span> <img src="<?php echo theme_img('preference-tab-ico.png') ?>"> </span> <?php echo lang('my_ratings');?></li> 
           <!-- Demandes -->
           <li tab="my-enquiries"> <span> <img src="<?php echo theme_img('preference-tab-ico.png') ?>"> </span> <?php echo lang('my_enquiries');?></li>
        </ul>
      
        <!-- Tab info.personnelles -->
        <div class="tab-content" style="display: block;">       
        	<?php include('personal-infos.php');?>
        </div>
        <!-- Tab paramètres  -->
        <div class="tab-content" style="display: none;">
          <?php include('settings.php');?>
        </div>

        <!-- Tab voitures -->
        <div class="tab-content" style="display: none;">
          <div id="vehicle-list">
           	<?php include('vechicles.php');?>
          </div>   
          <div id="vehicle-from-content" style="display:none"></div>           
			  </div>
        <!-- Tab annonces/trajets -->
         <div class="tab-content" style="display: none;">
          <h4> <?php echo lang('trips');?> </h4>
          En cours de développement...
        </div>

        <!-- Tab avis -->
         <div class="tab-content" style="display: none;">
          <h4> <?php echo lang('ratings');?> </h4>
          En cours de développement...
        </div>
        
        <!-- Tab demandes -->
         <div class="tab-content" style="display: none;">
          <h4> <?php echo lang('enquiry');?> </h4>
          En cours de développement...
        </div>



    </div>
    <!-- End V Tab -->

    </div>
    <!-- End -->

    </div>


  </div>
</div>
<div class="modal"></div>
