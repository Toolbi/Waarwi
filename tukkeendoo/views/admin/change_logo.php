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
                        <li class="active"><span><?php echo lang('change_logo_page');?></span></li>
                    </ol>


                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="main-box">
                        <header class="main-box-header clearfix">
                           <h1 class="pull-left">
                                <?php echo lang('change_logo_page');?>
                            </h1>
                        </header>
                        <?php echo form_open($this->config->item('admin_folder') . '/admin/change_logo/'); ?>
                        <div class="main-box-body clearfix">
                            
                            <div class="logo">
                               <h1><?php echo lang('upload_text');?></h1>
                               <p><?php echo lang('change_size_text');?></p>
                               </div>
                              
                                    <div class="form-group col-xs-12">
                                        <label><b><?php echo lang('logo_image');?></b></label>
                                        <div id='preview' class="img-preview">
                                            <?php
                                            if (!empty($vehicletypeid)) {
                                                if (!empty($uploadvalues)) {
                                                    ?>
                                                    <div id="gallery-photos-wrapper" class="vehiclesimage">
                                                        <ul id="gallery-photos" class="clearfix gallery-photos gallery-photos-hover ui-sortable">
                                                            <li id="recordsArray_1" class="col-md-2 col-sm-3 col-xs-6" style="width:45%">								
                                                                <div class="photo-box" style="background-image: url('<?= theme_vehicles_img($uploadvalues) ?>');"></div>
                                                                <a href="javascript:void(0);" class="remove-photo-link" id="vehicles-img-remove">
                                                                    <span class="fa-stack fa-lg">
                                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                
                                                        <img src="'<?= theme_vehicles_img($uploadvalues) ?>" style="display:none;">
                                                        <input type="hidden" name="uploadvalues" value="<?= $uploadvalues ?>" />
                                                    </div>


                                                <?php }
                                            }
                                            ?>
                                        </div>
                                        <div id='imageloadstatus' style="display:none">
                                            <img src='<?php echo theme_img('loader.gif'); ?>'/><?php echo lang('upload_msg');?>
                                        </div>


                                        <div id="uploadlink" <?= !empty($uploadvalues) ? 'style="display: none"' : '' ?>>

                                            <a href="javascript:void(0);" class="btn btn-link" id="camera2" title="Upload Image">
                                                <?php echo lang('add_photo');?>
                                            </a>
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
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
			
			
			
                </form>
                <div class="row">
                    <div id='imageloadbutton' style="display:none">
                        <?php
                        $attributes = array('id' => 'logoimgform');
                        echo form_open_multipart(base_url('admin/admin/logo_image_upload'), $attributes);
                        ?>

                        <input type="file" name="logoimg" id="logoimg"/>
                        <input type='hidden'  name="imageType" />
                        </form>  



                    </div>
                


<?php include('footer.php'); ?>
</div>