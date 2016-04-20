<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['theme']			= 'tukkeendoo';

// SSL support
$config['ssl_support']		= 'false';

// Business information
$config['company_name']		= 'Touba Web';
$config['address1']			= '4 Rue Léon Portier';
$config['address2']			= 'Chez Gueye Mouhamed';
$config['country']			= 'France'; // use proper country codes only
$config['city']				= 'Saint-Etienne'; 
$config['state']			= 'Unlisted/None';
$config['zip']				= '42100';
$config['email']			= 'yobaalema@gmail.com';
$config['admin_email']                  = 'yobaalema@gmail.com';


//facebook and google app id
$config['fb_appid']				= '';
$config['fb_appsecret']			= '';
$config['googleplus_appid']		= '';
$config['googleplus_appsecret']	= '';

$config['country_code']			= 'SEN'; // use proper country codes only

$config['site_language_prefix']			= 'fr';
$config['site_language']				= 'french';


// Store currency
$config['currency']						= 'Franc CFA';  // USD, EUR, etc
$config['currency_symbol']				= 'CFA';
$config['currency_symbol_side']			= 'left'; // anything that is not "left" is automatically right
$config['currency_decimal']				= '.';
$config['currency_thousands_separator']	= ',';

// site logo path (for packing slip)
$config['site_logo']		= '/assets/img/logo.png';

//change the name of the admin controller folder 
$config['admin_folder']		= 'admin';

//file upload size limit
$config['size_limit']		= intval(ini_get('upload_max_filesize'))*1024;

//are new registrations automatically approved (true/false)
$config['new_customer_status']	= true;

//are new registrations automatically approved (true/false)
$config['new_provider_status']	= false;

//do we require customers to log in 
$config['require_login']		= false;

//file upload path
$config['vechicle_upload_dir']='uploads/vechicle/';
$config['vehicles_upload_dir']='uploads/vehicle/'; 
$config['profile_upload_dir']='uploads/profile/';
$config['admin_upload_dir']='uploads/admin/';
$config['logo_upload_dir']='uploads/logo/';
$config['testimonials_upload_dir']='uploads/testimonials/';
$config['max_width']='1907';
$config['max_height']='1280';
$config['max_kb']='5000';
$config['acceptable_files']='gif|jpg|png|jpeg|bmp|PNG|JPG|JPEG|GIF|BMP';