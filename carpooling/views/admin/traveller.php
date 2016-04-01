<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php echo admin_js('admin.js', true);?>
<script type="text/javascript" language="javascript">

var baseurl = "<?php print base_url(); ?>";
function travel_ajax(url) {
		
		$.ajax({
		type: "POST",
		url: baseurl+"admin/traveller/travel_ajax/"+url,		
		success: function(html){		
		var message = $('<div />').append(html).find('#splitresult').html();
		$("#pageresult").html(message);
		$('body').find('.bacis a').popover();
		}
	});
}

function areyousure()
{
	return confirm('<?php echo lang('delete_confirm');?>');
}
</script>

<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url('admin/dashboard'); ?>"><?php echo lang('admin_home'); ?></a></li>
                                    <li class="active"><span><?php echo lang('all_traveller_list');?></span></li>
                                </ol>
                                
                                <div class="clearfix">
                                    <h1 class="pull-left">
										<?php if(!empty($page_title)):?>
										<?php echo  $page_title; ?>
										<?php endif; ?>
									</h1>
                                    
                                    <div class="pull-right top-page-ui">
                                        <a href="<?php echo base_url('admin/traveller/form');?>" class="btn btn-primary pull-right">
                                            <i class="fa fa-plus-circle fa-lg"></i> <?php echo lang('add_traveller');?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
								<div class="col-lg-12">
									<div class="main-box no-header clearfix">
										<div class="main-box-body clearfix">
											<div id="pageresult">
                                            <div class="table-responsive">                                             
												<table class="table user-list table-hover">
													<thead>
														<tr>
															<th><span><?php echo lang('first_name');?></span></th>
                                                            <th><span><?php echo lang('last_name');?><span></th>
															<th><span><?php echo lang('telephone');?></span></th>
                                                            <th><span><?php echo lang('email');?></span></th>
															<th class="text-center"><span><?php echo lang('status');?></span></th>															
															<th>&nbsp;</th>
														</tr>
													</thead>
													<tbody>
                                                    <?php foreach ($traveller as $travel):?>
														<tr>
															<td>
																<?=$travel['user_first_name']?>
															</td>
                                                            <td>
																<?=$travel['user_last_name']?>
															</td>
															<td>
																<?=$travel['user_mobile'];?> 
                                                                
															</td>
                                                            <td>
																<?=$travel['user_email']?>
															</td>
															<td class="text-center">
                                                            <?php if($travel['isactive'] == 0) { ?>
                <span class="label label-default" id="label-<?=$travel['user_id']?>"><?php echo lang('inactive');?></span>
                                                            <?php } else { ?>
                                                             <span class="label label-success" id="label-<?=$travel['user_id']?>"><?php echo lang('active');?></span>
                                                            <?php } ?>
               </td>
                                                            <td class="text-center">
                                                                <div class="btn-group" id="btn-<?=$travel['user_id']?>">
                                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                                        <?php echo lang('change_status');?> <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                    <?php if($travel['isactive'] == 0) { ?>
                                                                        <li style="border:0px; height:auto; padding:0px;"><a href="#" id="enable-<?=$travel['user_id']?>" class="change-status-traveller" rel="<?=$travel['user_id']?>"><?php echo lang('enable');?></a></li>
                                                                    <?php } else { ?>
                                                                     <li style="border:0px; height:auto; padding:0px;"><a href="#" id="disable-<?=$travel['user_id']?>" class="change-status-traveller" rel="<?=$travel['user_id']?>"><?php echo lang('disable');?></a></li>
                 <?php } ?>
                                                                        
                                                                        <li class="divider"></li>
                                                                    </ul>
                                                                    
                                                                 </div>
                                                            </td>
                                                            
															<td style="width: 20%;" class="bacis">																
																<a href="<?php echo base_url('admin/traveller/form/'.$travel['user_id']);?>" class="table-link">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
																	</span>
																</a>
																<a href="<?php echo base_url('admin/traveller/delete/'.$travel['user_id']);?>"  onclick="return areyousure();" class="table-link danger">
                                            <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                        </span>
            
                                                        </a>
															</td>
														</tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
                                            <?php echo $pagination?>
										</div>
                                        </div>
									</div>
								</div>
							</div>
						
						
					</div>
                    <script>
	 $(document).ready(function() {
              $('body').find('.bacis a').popover();
            });
	</script>


<?php include('footer.php'); ?>
