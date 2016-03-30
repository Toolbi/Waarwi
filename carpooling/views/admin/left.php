<?php
$status = $this->uri->segment(2);
$masteractive="";

if( $this->uri->segment(2) == "users")
{
	 $useractive = "active";
}
else
{
	$masteractive = "active";
}
	

?>

<?php echo theme_js('jquery.wallform.js',true) ?>
<div id="nav-col">
<section id="col-left" class="col-left-nano">
    <div id="col-left-inner" class="col-left-nano-content">
            
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">	
       
            <ul class="nav nav-pills nav-stacked">                
                
                <li>
                    <a href="<?php echo $admin_url;?>dashboard/">
                        <i class="fa fa-dashboard"></i>
                        <span><?php echo lang('admin_dashboard');?></span>
                        <span class="label label-primary label-circle pull-right"></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $admin_url;?>dashboard/">
                        <i class="fa fa-dashboard"></i>
                        <span><?php echo lang('admin_dashboard');?></span>
                        <span class="label label-primary label-circle pull-right"></span>
                    </a>
                </li>
          
                   <li> 
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-table"></i>
                        <span><?php echo lang('master');?></span>
                        <i class="fa fa-angle-right drop-icon"></i>
                    </a>                   
                     <ul class="submenu">
                     	<li>
                            <a href="<?php echo $admin_url;?>country">                                
                                <?php echo lang('country');?>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo $admin_url;?>currency">                                
                                <?php echo lang('currency');?>
                            </a>
                        </li>                    
                                            
                        <li>
                            <a href="<?php echo $admin_url;?>language">                                
                                <?php echo lang('language');?>
                            </a>
                        </li>
                         <li>
                            <a href="<?php echo $admin_url;?>category">                                
                                <?php echo lang('vehicle_brand');?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $admin_url;?>vehicle">                               
                                <?php echo lang('vehicule');?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $admin_url;?>radius">                               
                                <?php echo lang('radius');?>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-child"></i>
                        <span><?php echo lang('users');?></span>
                        <i class="fa fa-angle-right drop-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
							<a href="<?php echo $admin_url;?>traveller/form"><?php echo lang('add_site_user');?></a>
                        </li>
                        <li>
                            <a href="<?php echo $admin_url;?>traveller"><?php echo lang('list_site_users');?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-users"></i>
                        <span><?php echo lang('admin_management');?></span>
                        <i class="fa fa-angle-right drop-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
							<a href="<?php echo $admin_url;?>admin"><?php echo lang('admin');?></a>
						</li>
                    </ul>
                </li>
            
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="fa  fa-file-text"></i>
                        <span><?php echo lang('cms');?></span>
                        <i class="fa fa-angle-right drop-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
							<a href="<?php echo $admin_url;?>banner"><?php echo lang('banners');?></a>
						</li>
						<li>
							<a href="<?php echo $admin_url;?>pages"><?php echo lang('pages');?></a>
						</li>
                        <li>
							<a href="<?php echo $admin_url;?>testimonials"><?php echo lang('testimonials');?></a>
						</li>
                    </ul>
                </li>
                
                
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-cab"></i>
                        <span><?php echo lang('trips');?></span>
                        <i class="fa fa-angle-right drop-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
							<a href="<?php echo $admin_url;?>trip"><?php echo lang('list_of_trips');?></a>
						</li>
                    </ul>
                </li>
                
                
                
                
            </ul>
        </div>
    </div>
</section>
<div id="nav-col-submenu"></div>
</div>