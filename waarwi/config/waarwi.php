<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['theme']			= 'carpooling';

// SSL support
$config['ssl_support']		= 'false';

// Business information
$config['company_name']		= '<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: company_name</p>
<p>Filename: templates/waarwi.php</p>
<p>Line Number: 10</p>

</div>';
$config['address1']			= '<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: address1</p>
<p>Filename: templates/waarwi.php</p>
<p>Line Number: 11</p>

</div>';
$config['address2']			= '<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: address2</p>
<p>Filename: templates/waarwi.php</p>
<p>Line Number: 12</p>

</div>';
$config['country']			= '<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: country</p>
<p>Filename: templates/waarwi.php</p>
<p>Line Number: 13</p>

</div>'; // use proper country codes only
$config['city']				= '<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: city</p>
<p>Filename: templates/waarwi.php</p>
<p>Line Number: 14</p>

</div>'; 
$config['state']			= '<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: state</p>
<p>Filename: templates/waarwi.php</p>
<p>Line Number: 15</p>

</div>';
$config['zip']				= '<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: zip</p>
<p>Filename: templates/waarwi.php</p>
<p>Line Number: 16</p>

</div>';
$config['email']			= 'notremail@gmail.com';
$config['admin_email']                  = 'notremail_contact@gmail.com';


//facebook and google app id
$config['fb_appid']				= '263443957017496';
$config['fb_appsecret']			= '5cd826e5a64b89981075d6f41a522eba';
$config['googleplus_appid']		= '472269687820-k28acr2gebm0utid3kbsnte1ap7jr4k6.apps.googleusercontent.com';
$config['googleplus_appsecret']	= 'U3cQlM1Msxf5MIcoTFINY_g4';

$config['country_code']			= 'SEN'; // use proper country codes only

$config['site_language_prefix']			= 'FR';
$config['site_language']				= 'Francais';


// Store currency
$config['currency']						= 'West African CFA franc';  // USD, EUR, etc
$config['currency_symbol']				= 'XOF';
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