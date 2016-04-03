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
<style>
.size14 {
    font-size: 14px;
    margin-left: 20px;
}
</style>
<div class="container-fluid margintop40">
  <div class="container">
     <div class="row"> 
    <ul class="row brd-crmb">
      <li><a href="<?php echo base_url('home');?>"> <img src="<?php echo theme_img('home-ico.png') ?>"> </a></li>
      <li> / </li>
      <li><a href="#"><?php echo lang('my_account');?></a></li>
    </ul>
    </div>
    </div>
    </div>
   

   <div class="container-fluid">
  <div class="container">
  <div id="v-nav">
   
<div id="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                              
                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored emerald-bg">
                    <i class="fa fa-user"></i>
                    <span class="headline"><?php echo lang('users');?></span>
                    <span class="value">1</span>
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored green-bg">
                    <i class="fa fa-map-marker"></i>
                    <span class="headline"><?php echo lang('trips');?></span>
                    <span class="value">1</span>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored purple-bg">
                    <i class="fa fa-bookmark-o"></i>
                    <span class="headline"><?php echo lang('subscribers');?></span>
                    <span class="value">1</span>
                  </div>
                </div>

                 <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored emerald-bg">
                    <i class="fa fa-user"></i>
                    <span class="headline"><?php echo lang('users');?></span>
                    <span class="value">1</span>
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored green-bg">
                    <i class="fa fa-map-marker"></i>
                    <span class="headline"><?php echo lang('trips');?></span>
                    <span class="value">1</span>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored purple-bg">
                    <i class="fa fa-bookmark-o"></i>
                    <span class="headline"><?php echo lang('subscribers');?></span>
                    <span class="value">1</span>
                  </div>
                </div>
                
                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="main-box infographic-box colored red-bg">
                    <i class="fa  fa-car"></i>
                    <span class="headline"><?php echo lang('vehicle');?></span>
                    <span class="value">1</span>
                  </div>
                </div>
              </div>
                     
                          
              
              
            </div>
          </div>
  


  </div>
</div>
</div>
</div>
