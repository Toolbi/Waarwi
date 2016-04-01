<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php echo theme_js('jquery.wallform.js', true); ?>
<?php echo admin_js('admin.js', true); ?>

<div id="content-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('admin/dashboard'); ?>"><?php echo lang('admin_home'); ?></a></li>
                        <li><a href="<?php echo base_url('admin/testimonials'); ?>"><?php echo lang('testimonials'); ?></a></li>
                        <li class="active"><span><?php echo lang('add_new_testimonial');?></span></li>
                    </ol>


                </div>
            </div>


            <div class="row">

                <div class="col-lg-12">
                    <div class="main-box">
                        <header class="main-box-header clearfix">
                            <h1 class="pull-left">
               
                <?php echo  lang('add_new_testimonial'); ?>
               
              </h1>
                        </header>
                        <?php echo form_open($this->config->item('admin_folder') . '/testimonials/form/' . $id, ' id="req-form"'); ?>
                        <div class="main-box-body clearfix">


                            <div class="row">
                                <div class="form-group col-xs-3">
                                    <label><b><?php echo lang('testimonials_name');?></b></label>
<?php
$data = array('name' => 'name', 'value' => set_value('name', $test_name), 'class' => 'form-control');
echo form_input($data);
?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-5">
                                    <label><b><?php echo lang('testimonials_description');?></b></label>
<?php
$data = array('name' => 'description', 'value' => set_value('description', $description), 'class' => 'form-control', 'rows' => '3');
echo form_textarea($data);
?>
                                </div>
                            </div>

                            <div class="row">										
                                <div class="form-group col-xs-5">
                                    <label><b><?php echo lang('testimonials_image');?></b></label>
                                    <div id='preview' class="img-preview">
                                        <?php if (!empty($id)) {
                                            if (!empty($uploadvalues)) {
                                                ?>
                                                <div id="gallery-photos-wrapper" class="testimonialsimage">
                                                    <ul id="gallery-photos" class="clearfix gallery-photos gallery-photos-hover ui-sortable">
                                                        <li id="recordsArray_1" class="col-md-2 col-sm-3 col-xs-6" style="width:45%">								
                                                            <div class="photo-box" style="background-image: url('<?= theme_testimonials_img($uploadvalues) ?>');"></div>
                                                            <a href="javascript:void(0);" class="remove-photo-link" id="testimonials-img-remove">
                                                                <span class="fa-stack fa-lg">
                                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>                                                
                                                    <img src="'<?= theme_testimonials_img($uploadvalues) ?>" style="display:none;">
                                                    <input type="hidden" name="uploadvalues" value="<?= $uploadvalues ?>" />
                                                </div>
                                                

                                            <?php }
                                        } ?>
                                    </div>
                                    <div id='imageloadstatus' style="display:none">
                                        <img src='<?php echo theme_img('loader.gif'); ?>'/> <?php echo lang('uploading_message');?>
                                    </div>                                    
                                    <div id="uploadlink" <?= !empty($uploadvalues) ? 'style="display: none"' : '' ?>>
                                        <a href="javascript:void(0);" class="btn btn-link" id="camera" title="Upload Image">
                                            <?php echo lang('upload_image');?>
                                        </a>
                                    </div>
                                        
                                </div>
                            </div>  

                            <div class="row">
                                <div class="form-group col-xs-5">
                                    <label><b><?php echo lang('status');?></b></label>
                                    <div class="checkbox-nice">
                                        <?php
                                        $data = array('name' => 'isactive', 'value' => 1, 'id' => 'checkbox-1', 'checked' => $isactive);
                                        echo form_checkbox($data)
                                        ?>

                                        <label for="checkbox-1">
                                            <?= lang('active'); ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
						</div>
                            <br/><br/>
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
				
				
				  <div class="row">
                            <div id='imageloadbutton' style="display:none">
                                <?php
                                $attributes = array('id' => 'testimonialsimageform');
                                echo form_open_multipart(base_url('admin/testimonials/testimonials_image_upload'), $attributes);
                                ?>

                                <input type="file" name="testimonialsimg" id="testimonialsimg"/>
                                <input type='hidden'  name="imageType" />
                               </form> 
                            </div>
                        </div>  
                    </div>
                </div>	
            </div>

  
    <script type="text/javascript" src="<?php echo admin_js('jquery.validate.js'); ?>"></script>
<?php echo admin_js('jquery.validate-rules.js', true); ?>


    <script src="<?php echo admin_js('jquery.maskedinput.min.js'); ?>"></script>
    <script src="<?php echo admin_js('bootstrap-datepicker.js'); ?>"></script>

    <script>
                                            var baseurl = "<?php print base_url(); ?>";
                                            function redirect()
                                            {
                                                window.location = baseurl + 'admin/testimonials'
                                            }
    </script> 

<?php include('footer.php'); ?>
