<?=theme_js('subscribe.js',TRUE);?> 
<div class="container-fluid footerbg paddingtopbot40">
  <div class="container">
    <div class="row footer">
    	<div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 log-subs fleft">
      	<div class="logo"> <a href="<?php echo base_url('home');?>" id="logo" class="navbar-brand"> 
			<img src="<?php echo theme_logo_img($this->logo->name)?>" style="width: 180px;height: 80px;"> </a> 
		</div>
      	<div class="ftr-subs margintop20 marginbot10 fleft lgrey-text">
	        <form id="subscribe">   
	            <p class="margintop20 colorwhite size17"><?php echo lang('newsletters');?> </p>
	            <input type="text" placeholder="<?php echo lang('email');?>" id="email_id" name="email_id" class="emaddr">
	            <div id="send">
	                <input type="submit" value="<?php echo lang('sign_up');?>" class="blue-bg white-text subs-brd">
	            </div>
	        </form>
      </div>
      
      <p class="colorwhite margintop20 size14 fleft"><?php echo lang('newsletter_below_text'); ?></p>
    </div>

			    <div class="col-lg-2 col-md-6 col-sm-6  col-xs-12">
			      <h3 class="colorwhite size18 marginbot10"> <?php echo lang('sitemap');?> </h3>
      <ul class="fleft ftr-ste">
		<li> <a href="<?php echo base_url('blog');?>"> <?php echo lang('blog');?> </a> </li>
        <li> <a href="<?php echo base_url('company-directory');?>"> <?php echo lang('company_directory');?> </a> </li>
        <li> <a href="<?php echo base_url('contact');?>"> <?php echo lang('contact');?> </a> </li>
        <li> <a href="<?php echo base_url('find_a_candidate');?>"> <?php echo lang('find_a_candidate');?>  </a> </li>
		  <li> <a href="<?php echo base_url('help_us');?>"> <?php echo lang('help_us');?></a></li> 
      </ul>
    </div>
    </div>
  </div>
</div>


    <div class="container-fluid ftrbg padding10">
  <div class="container">
    <div class="row footer colorwhite">
      <p class="size14 fleft"> &copy; <?php echo lang('copyright');?> </p>
      <div class="fright">
        <ul class="fleft soc-ico">
        </ul>
      </div>
    </div>
  </div>
</div>


