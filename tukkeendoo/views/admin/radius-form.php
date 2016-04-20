<?php include('header.php'); ?>
<?php include('left.php'); ?>

<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="<?php echo base_url('admin/dashboard'); ?>"><?php echo lang('admin_home'); ?></a></li>
										<li class="active"><span><?php echo lang('add_radius');?></span></li>
									</ol>
									
									
								</div>
							</div>
                             <?php
	//lets have the flashdata overright "$message" if it exists
	if($this->session->flashdata('message'))
	{
		$message	= $this->session->flashdata('message');
	}
	
	if($this->session->flashdata('error'))
	{
		$error	= $this->session->flashdata('error');
	}
	
	if(function_exists('validation_errors') && validation_errors() != '')
	{
		$error	= validation_errors();
	}
	?>
	
	<div id="js_error_container" class="alert alert-error" style="display:none;"> 
		<p id="js_error"></p>
	</div>
	
	<div id="js_note_container" class="alert alert-note" style="display:none;">
		
	</div>
	
	<?php if (!empty($message)): ?>
		<div class="alert alert-success">
			<a class="close" data-dismiss="alert">×</a>
			<?php echo $message; ?>
		</div>
	<?php endif; ?>

	<?php if (!empty($error)): ?>
		<div class="alert alert-error">
			<a class="close" data-dismiss="alert">×</a>
			<?php echo $error; ?>
		</div>
	<?php endif; ?>
							
							<div class="row">
								
								<div class="col-lg-12">
									<div class="main-box">
										<header class="main-box-header clearfix">
											<h1 class="pull-left">
							                	<?php echo lang('add_radius');?>
							                </h1>
										</header>
										  <?php 
										 
										  echo form_open($this->config->item('admin_folder').'/radius/form/'.$radiusid,' id="req-form"'); ?>
										<div class="main-box-body clearfix">
                                     <div class="row">
											<div class="form-group col-xs-3">
												   <label><b><?php echo lang('distance_from');?></b></label>
                                                     <?php
													$data	= array('name'=>'distancefrom', 'value'=>set_value('distancefrom', $distancefrom), 'class'=>'form-control');
													echo form_input($data); ?>
											</div>
                                    </div>
                                    <div class="row">
											<div class="form-group col-xs-3">
												   <label><b><?php echo lang('distance_to');?></b></label>
                                                     <?php
													$data	= array('name'=>'distanceto', 'value'=>set_value('distanceto', $distanceto), 'class'=>'form-control');
													echo form_input($data); ?>
											</div>
                                    </div>
                                    <div class="row">
											<div class="form-group col-xs-3">
												   <label><b><?php echo lang('radius');?></b></label>
                                                      <?php
													$data	= array('name'=>'radius', 'value'=>set_value('radius', $radius), 'class'=>'form-control');
													echo form_input($data); ?>
											</div>
                                    </div>
										</div>
											<br/><br/>
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
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	
	<script type="text/javascript" src="<?php echo admin_js('jquery.validate.js');?>"></script>
<?php echo admin_js('jquery.validate-rules.js', true);?>
<!--     
	<script src="<?php echo admin_js('bootstrap.js');?>"></script> -->
     <script src="<?php echo admin_js('jquery.maskedinput.min.js');?>"></script>
	 <script src="<?php echo admin_js('bootstrap-datepicker.js');?>"></script>
    
 <script>
var baseurl = "<?php print base_url(); ?>";
function redirect()
{
	window.location = baseurl +'admin/radius'
}
</script> 
 
<?php include('footer.php'); ?>
