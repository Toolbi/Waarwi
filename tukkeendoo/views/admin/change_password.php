<?php include('header.php'); ?>
<?php include('left.php'); ?>
<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="<?php echo base_url('admin/dashboard'); ?>"><?php echo lang('admin_home'); ?></a></li>
										<li class="active"><span><?php echo lang('change_password_page');?></span></li>
									</ol>
									
									
								</div>
							</div>
							<div class="row">
								
								<div class="col-lg-12">
									<div class="main-box">
										<header class="main-box-header clearfix">
										<h1 class="pull-left">
						               		<?php echo lang('change_password_page');?>
						              	</h1>
										</header>
										 
                                         <?php echo form_open($this->config->item('admin_folder').'/admin/changepwd_form/'.$id); ?>
										<div class="main-box-body clearfix">
                                    <div class="row">
                                    <div class="form-group col-xs-5">
                                    <label><b><?php echo lang('user_pass');?></b></label>
		<?php
		$data	= array('name'=>'password', 'class'=>'form-control');
		echo form_password($data);
		?></div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group col-xs-5">
                                    <label><b><?php echo lang('user_pass_confirm');?></b></label>
		<?php
		$data	= array('name'=>'confirm', 'class'=>'form-control');
		echo form_password($data);
		?>
                                    
                                    </div>
                                    </div>
                                           
                                                
                                                
                                                
											</div>
										</div>
                                        
                                       
							
						</div>
					</div>	
                    </div>
						
						
						
			 <div class="col-lg-12">
                    <div style="padding:15px;overflow: hidden;" class="main-box">
                        <div class="row">
                            <div class="row actions">
                                <div class="col-md-3">&nbsp;</div>
                                <div class="col-md-3"><button type="submit" style="margin-left: 35px;" class="col-md-9 btn btn-primary"><?php echo lang('save_form');?></button></div>
                                <div class="col-md-3"><button type="button" onClick="redirect();" style="margin-left: 35px;" class="col-md-9 btn btn-default"><?php echo lang('cancel');?></button></div>
                                <div class="col-md-3">&nbsp;</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>


<script type="text/javascript">
if ($.browser.webkit) {
    $('input').attr('autocomplete', 'off');
}
$('form').submit(function() {
	$('.btn').attr('disabled', true).addClass('disabled');
});
</script>
<script>
var baseurl = "<?php print base_url(); ?>";
function redirect()
{
	window.location = baseurl +'admin/dashboard'
}
</script>
<?php include('footer.php');