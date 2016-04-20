<?php include('header.php');?>
<script type="text/javascript" src="<?php echo theme_js('jquery.validate.js');?>"></script>
<script type="text/javascript" src="<?php echo theme_js('travel-details-rules.js');?>"></script>
<?php echo theme_js('notification/goNotification.js',true) ?>
<link href="<?php echo theme_js('notification/goNotification.css') ?>" rel="stylesheet" type="text/css">
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
</script>
<div class="container-fluid margintop40">
        <div class="container">
            <div class="row margintop40">  

      <div class="col-lg-5 col-md-5 col-sm-6 padding20 reg-main">
        <ul class="reg-cont margintop40">
          <li class="margintop40">
            <h3><?php echo lang('road_travel_made_easy');?> !</h3><br>
            <?php echo lang('road_travel_made_easy_text'); ?> 
          </li>
        </ul>
      </div>      

      <div class="col-lg-6 col-md-6 col-sm-6 fleft padding20 grey-bg reg-main">
        <h2 class="center marginbot40"> <?php echo lang('sign_in_to_tukkeendoo');?> </h2>
         <?php 
				  $attributes = array('id' => 'frmlogin');
				 echo form_open('login',$attributes); ?>
           <input type="hidden" value="1" name="submitted" />
			<!-- <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" /> -->
        <ul class="top-nav reg-nav">
           <li> <a href="<?php echo base_url('login/facebooklogin');?>" class="btn fb-login"><i class="fa fa-facebook"></i> <?php echo lang('fb-login');?> </a> </li>
          <li class="reg-rht"> <a href="<?php echo base_url('login/googlelogin');?>" class="btn gl-login"><i class="fa fa-google"></i> <?php echo lang('gl-login');?> </a> </li>
        </ul>
        <ul class="rowrec reg-inp">
          <li>
            <span><?php echo lang('email_username');?></span>
            <input type="text" placeholder="<?php echo lang('email_username');?>" name="txtUserName" id="txtUserName"/>
          </li>
          <li>
            <span><?php echo lang('password'); ?></span>
            <input type="password" placeholder="<?php echo lang('password'); ?>" name="txtPassword" id="txtPassword" />
          </li>
          <li> <p> <a href="<?php echo base_url('login/forget_password'); ?>"><?php echo lang('forgot_password') . " ?";?></a> </p> </li>
          <li>       
            <button type="submit" class="btn login-btn fright reg-sbmt"><?php echo lang('login');?></button>
          </li>
        </ul>
        </form>
      </div>
      <!-- Right -->
    </div>
  </div>
</div>
<div class="container-fluid question paddingtopbot40">
  <div class="container">
    <div class="margintop40 marginbot40 center gtcont">
      <h2 class="colorwhite"> <?php echo lang('got_a_question');?></h2>
      <p class="padding20 row colorwhite"><?php echo lang('help_faqs'); ?></p>
      <a href="#"> <?php echo lang('contact_now');?> </a> </div>
  </div>
</div>

<?php include('footer.php');?>