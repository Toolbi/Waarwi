<?php include('header.php'); ?>
    <?php include('left.php'); ?>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/redactor.min.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/file-browser.js');?>"></script> 
    <script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});
	
	$('.redactor').redactor({
		focus: true,
		plugins: ['fileBrowser']
	});
});
</script>
    <div id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <ol class="breadcrumb">
               
                <li><a href="<?php echo base_url('admin/dashboard'); ?>"><?php echo lang('admin_home'); ?></a></li>
              
                <li><a href="<?php echo base_url('admin/pages');?>"><?php echo lang('page_manage');?></a></li>
                <li class="active"><span><?php echo lang('new_page');?></span></li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="main-box">
                <header class="main-box-header clearfix">
                 <h1 class="pull-left">
                <?php if(!empty($page_title)):?>
                <?php echo  $page_title; ?>
                <?php endif; ?>
              </h1>
                </header>
                <?php echo form_open($this->config->item('admin_folder').'/pages/form/'.$id); ?>
                <div id="main">
                  <div class="container-fluid">
                    <div class="row-fluid">
                      <div class="span12">
                        <div class="box-content">
                          <div class="tabbable">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#content_tab" data-toggle="tab"><?php echo lang('content_page');?></a></li>
                             
                              <li><a href="#seo_tab" data-toggle="tab"><?php echo lang('seo');?></a></li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane active" id="content_tab">
                                <fieldset>
                                  <div class="row">
                                    <div class="form-group col-xs-3">
                                      <label for="title"><b><?php echo lang('title_page');?></b></label>
                                      <?php
				$data	= array('name'=>'title', 'value'=>set_value('title', $title), 'class'=>'span12 form-control');
				echo form_input($data);
				?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-xs-12">
                                      <label for="content"><b><?php echo lang('content_page');?></b></label>
                                      <?php
				$data	= array('name'=>'content', 'class'=>'redactor form-control ckeditor', 'cols' => 10,'value'=>set_value('content', $content));
				echo form_textarea($data);
				?>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>
                              
                              <div class="tab-pane" id="seo_tab">
                                <fieldset>
                                  <div class="row">
                                    <div class="form-group col-xs-3">
                                      <label for="code"><b><?php echo lang('title_seo');?></b></label>
                                      <?php
				$data	= array('name'=>'seo_title', 'value'=>set_value('seo_title', $seo_title), 'class'=>'span12 form-control');
				echo form_input($data);
				?>
                                    </div>
                                  </div>
                                    
                                    
                                    <div class="row">
                                    <div class="form-group col-xs-3">
                                      <label for="slug"><b><?php echo lang('slug');?></b></label>
                                      <?php
				$data	= array('name'=>'slug', 'value'=>set_value('slug', $slug), 'class'=>'span3 form-control');
				echo form_input($data);
				?>
                                    </div>
                                  </div>
                                    
                                    
                                    
                                    <div class="row">
                                    <div class="form-group col-xs-3">
                                      <label for="sequence"><b><?php echo lang('sequence');?></b></label>
                                      <?php
				$data	= array('name'=>'sequence', 'value'=>set_value('sequence', $sequence), 'class'=>'span3 form-control');
				echo form_input($data);
				?>
                                    </div>
                                  </div>
                                    
                                    
                                    
                                    
                                  <div class="row">
                                    <div class="form-group col-xs-3">
                                      <label><b><?php echo lang('metadata');?></b></label>
                                      <?php
				$data	= array('rows'=>'3', 'name'=>'meta', 'value'=>set_value('meta', html_entity_decode($meta)), 'class'=>'span12 form-control');
				echo form_textarea($data);
				?>
                                    </div>
                                  </div>
                                  <p class="help-block"><?php echo lang('meta_data_description');?></p>
                                </fieldset>
                              </div>
                            </div>
                          </div>
                        
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
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
				
				
				
				
            </div>
   <script src="<?php echo admin_js('ckeditor/ckeditor.js');?>"></script>      
       
        <script>
var baseurl = "<?php print base_url(); ?>";
function redirect()
{
	window.location = baseurl +'admin/pages'
}
</script>
        <?php include('footer.php'); ?>