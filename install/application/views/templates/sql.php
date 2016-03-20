
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `menu_title` varchar(128) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `route_id` int(128) NOT NULL,
  `content` longtext NOT NULL,
  `sequence` int(11) NOT NULL DEFAULT '0',
  `seo_title` text NOT NULL,
  `meta` text NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `new_window` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`,`content`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `route` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(120) DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- new query

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `setting_key` varchar(255) NOT NULL,
  `setting` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `tbl_address` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `trip_id` int(150) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `weight` int(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- new query

INSERT INTO `settings` (`id`, `code`, `setting_key`, `setting`) VALUES
(1, 'payment_modules', 'cod', '0'),
(2, 'cod', 'enabled', '0'),
(3, 'shipping_modules', 'flatrate', '0'),
(4, 'flatrate', 'rate', ''),
(5, 'flatrate', 'enabled', '0');

-- new query

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `admin_password` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `admin_name` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_mobile` varchar(255) DEFAULT NULL,
  `admin_img` varchar(255) DEFAULT NULL,
  `access` varchar(12) NOT NULL DEFAULT 'Admin',
  `admin_createddate` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_amenities` (
  `amenities_id` int(11) NOT NULL AUTO_INCREMENT,
  `amenities_name` varchar(40) DEFAULT NULL,
  `created_on` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`amenities_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(15) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(56) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(2) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `tbl_email_template` (
  `tplid` int(11) NOT NULL AUTO_INCREMENT,
  `tplshortname` varchar(250) NOT NULL,
  `tplsubject` varchar(250) NOT NULL,
  `tplmessage` text NOT NULL,
  `tplmailid` varchar(100) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tplid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

insert  into `tbl_email_template`(`tplid`,`tplshortname`,`tplsubject`,`tplmessage`,`tplmailid`,`isactive`) values (3,'Activate your {COMPANY_NAME} account','Activate your {COMPANY_NAME}account','<p>Hello <strong>{NAME}</strong></p>\n\n<p>Thank you for registering with {COMPANY_NAME}</p>\n\n<p>Before we can complete your registration, we need to verify your e-mail address. Please click on the link below to complete your registration.</p>\n\n<p><a href=\"{SITE_PATH}user/access/{code}\" target=\"_blank\">{SITE_PATH}user/access/{code}</a></p>\n\n<p>If you have problems following the link, please copy and paste it into your browser to complete your registration.</p>\n\n<p>A request to create account was received from your {COMPANY_NAME} Account - {EMAIL} from the IP - {IP}</p>\n\n<p>Enjoy!<br />\n<strong>The {COMPANY_NAME} Team</strong><br />\n<br />\n<br />\nIf you have not initiated this request, send mail to {ADMIN_EMAIL}<br />\nIf you have any query please send mail to {ADMIN_EMAIL}<br />\nThis is an automated email, please don&#39;t reply.</p>',NULL,0),(10,'Thanks for Contact Us','Thanks for Contact Us','<p>Dear Admin,<br />\r\n<br />\r\nName: {Name}<br />\r\nEmail: {email}<br />\r\nPhone: {phone}<br />\r\nMessage:<br />\r\n<br />\r\n{message}<br />\r\n<br />\r\nRegards,<br />\r\ncarpoolingscript.com Team</p>',NULL,0),(11,'Feedback','Feedback','<p>Dear Admin,<br />\r\n<br />\r\nName: {Name}<br />\r\nEmail: {email}<br />\r\nPhone: {phone}<br />\r\nFeedback:<br />\r\n<br />\r\n{message}<br />\r\n<br />\r\nPage: {page}<br />\r\nRating: {rating}<br />\r\nRegards,<br />\r\ncarpoolingscript.com Team</p>',NULL,0),(12,'Activate your {COMPANY_NAME} account','Activate your {COMPANY_NAME} account','<p>Hello <strong>{NAME}</strong></p>\n\n<p>Thank you for registering with {COMPANY_NAME}</p>\n\n<p>Your Password is <strong>{PASSWORD}</strong></p>\n\n<p>A request to create account was received from your {COMPANY_NAME} Account - {EMAIL}</p>\n\n<p>Enjoy!<br />\n<strong>The {COMPANY_NAME} Team</strong><br />\n<br />\n<br />\nIf you have not initiated this request, send mail to {ADMIN_EMAIL}<br />\nIf you have any query please send mail to {ADMIN_EMAIL}<br />\nThis is an automated email, please don&#39;t reply.</p>',NULL,0),(26,'{COMPANY_NAME}:Password changed','{COMPANY_NAME}:Reset password-{EMAIL}','<p>A request to reset password was received from your Carpooling Account - {EMAIL}</p>\n\n<p>Your password has been reset to <strong> {PASSWORD} </strong></p>\n\n<p>Enjoy!<br />\n<strong>The Carpooling Script Team</strong><br />\n<br />\n<br />\nIf you have not initiated this request, send mail to care@carpoolingscript.com<br />\nIf you have any query please send mail to care@carpoolingscript.com<br />\nThis is an automated email, please don&#39;t reply.</p>',NULL,0),(2,'Thank you for subscribe','Thank you for subscribe','<p> Thank you for subscribe </p>',NULL,0),(28,'{COMPANY_NAME}:Thank you for your enquiry with the ({OWNER_NAME})','{COMPANY_NAME}:Thank you for your enquiry with the ({OWNER_NAME})','<p>Hello <strong>{NAME}</strong></p>\r\n\r\n<p>Just now a rider enquired for the availability of a seat in your car. Kindly login to your dashboard for accepting or rejecting the request.</p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The {COMPANY_NAME} Team</strong><br />\r\n<br />\r\n&nbsp;</p>',NULL,0),(27,'{COMPANY_NAME}:You just received an enquiry for your ({VEHICLE_NUMBER})','{COMPANY_NAME}:You just received an enquiry for your ({VEHICLE_NUMBER})','<p>Hello <strong>{NAME}</strong></p>\r\n\r\n<p>Just now a rider enquired for the availability of a seat in your car. Kindly login to your dashboard for accepting or rejecting the request. Kindly find the details of the rider below.</p>\r\n\r\n<p>Traveller_name: <strong>{NAME}</strong></p>\r\n\r\n<p>Passanger_name: <strong>{PNAME}</strong></p>\r\n\r\n<p>Passanger_email: <strong>{PEMAIL}</strong></p>\r\n\r\n<p>Passanger_mobile: <strong>{PMOBILE}</strong></p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The</strong> <strong> {COMPANY_NAME} Team</strong><br />\r\n<br />\r\n&nbsp;</p>',NULL,0),(29,'Activate your {SITENMAE} account','Activate your {SITENAME} account','<p>Hello <strong>{NAME}</strong></p>\r\n\r\n<p>Thank you for registering with <strong>{SITENAME}</strong></p>\r\n\r\n<p>USER NAME: <strong>{EMAIL}</strong></p>\r\n\r\n<p>PASSWORD: <strong>{PASSWORD}</strong></p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The</strong> <strong>{SITENAME} Team</strong><br />\r\n<br /></p>',NULL,0),(30, '{COMPANY_NAME}:You just received an enquiry Acceptance', '{COMPANY_NAME}:You just received an enquiry Acceptance', 'Dear {NAME},\r\n\r\nCongratulations! Your ride enquiry as been accepted by the Car Owner. Thank you for using our Carpooling service. Kindly find your trip details and car details. Happy Riding and we will see you again.\r\n\r\n<p>Traveller name: <strong>{TNAME}</strong></p>\r\n\r\n<p>Traveller email: <strong>{TEMAIL}</strong></p>\r\n\r\n<p>Traveller mobile: <strong>{TMOBILE}</strong></p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The</strong> <strong> {COMPANY_NAME} Team</strong><br />\r\n<br />\r\n&nbsp;</p>', NULL, 0),
(31, '{COMPANY_NAME}:You just received an enquiry rejection', '{COMPANY_NAME}:You just received an enquiry rejection', 'Dear {NAME},\r\n\r\nOops! We are very sorry to inform you that the Car Owner has rejected your ride enquiry. Kindly find the link below to search and find more trips. Wish you a good luck this time to find a ride. \r\n\r\n<p><a href="{LINK}" target="_blank">More Rides</a></p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The</strong> <strong> {COMPANY_NAME} Team</strong><br />\r\n<br />\r\n&nbsp;</p>', NULL, 0);

-- new query

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `country_id` int(6) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(120) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `currency` varchar(100) NOT NULL,
  `is_active` int(11) DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_currency` (
  `currency_id` int(6) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(120) DEFAULT NULL,
  `currency_symbol` varchar(15) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_enquires` (
  `enquiry_id` int(16) NOT NULL AUTO_INCREMENT,
  `enquiry_passanger_id` varchar(40) DEFAULT NULL,
  `enquiry_trip_id` varchar(40) DEFAULT NULL,
  `enquire_travel_id` varchar(255) DEFAULT NULL,
  `enquiry_trip_date` date DEFAULT NULL,
  `enquiry_trip_status` int(11) DEFAULT NULL,
  `enquiry_date_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`enquiry_id`),
  KEY `tbl_trips_tbl_enquires` (`enquiry_trip_id`),
  KEY `tbl_passengers_tbl_enquires` (`enquiry_passanger_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(22) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(44) NOT NULL,
  `feedback` varchar(444) NOT NULL,
  `page` varchar(50) DEFAULT NULL,
  `rating` varchar(50) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `language_id` int(6) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(120) DEFAULT NULL,
  `language_code` varchar(15) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `tbl_radius` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `distance_from` int(150) NOT NULL,
  `distance_to` int(150) NOT NULL,
  `radius` int(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_subscribe` (
  `subscribe_id` int(150) NOT NULL AUTO_INCREMENT,
  `subscribe_email` varchar(255) NOT NULL,
  `subscribe_ip` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`subscribe_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `tbl_testimonials` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `isactive` int(2) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_trips` (
  `trip_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_driver_id` varchar(40) DEFAULT NULL,
  `trip_vehicle_id` varchar(40) DEFAULT NULL,
  `trip_from_latlan` text,
  `trip_to_latlan` text,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `route` text NOT NULL,
  `route_full_data` text NOT NULL,
  `trip_routes_lat_lan` text,
  `trip_routes` text NOT NULL,
  `trip_return` varchar(40) DEFAULT NULL,
  `trip_depature_time` time DEFAULT NULL,
  `trip_return_time` time DEFAULT NULL,
  `trip_journey_hours` varchar(40) DEFAULT NULL,
  `trip_amenities` varchar(255) DEFAULT NULL,
  `trip_frequncy` varchar(40) DEFAULT NULL,
  `trip_avilable_seat` varchar(40) DEFAULT NULL,
  `passenger_type` varchar(255) DEFAULT NULL COMMENT '1->male 2->female 3->both',
  `trip_rate_details` varchar(40) DEFAULT NULL,
  `contact_person_name` varchar(40) DEFAULT NULL,
  `contact_person_number` varchar(40) DEFAULT NULL,
  `trip_comments` text,
  `trip_user_id` varchar(40) DEFAULT NULL,
  `trip_casual_date` varchar(255) NOT NULL,
  `trip_created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `trip_status` tinyint(1) NOT NULL DEFAULT '1',
  `trip_otp_status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`trip_id`),
  KEY `tbl_users_tbl_trips` (`trip_user_id`),
  KEY `tbl_vehicle_tbl_trips` (`trip_vehicle_id`),
  KEY `tbl_drivers_tbl_trips` (`trip_driver_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_t_login_logs` (
  `login_log_id` double DEFAULT NULL,
  `login_id` double DEFAULT NULL,
  `login_ip` varchar(675) DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- new query

CREATE TABLE IF NOT EXISTS `tbl_t_trip_legs` (
  `trip_led_id` int(150) NOT NULL AUTO_INCREMENT,
  `source_leg` text NOT NULL,
  `source_latitude` varchar(255) NOT NULL,
  `source_longitude` varchar(255) NOT NULL,
  `destination_leg` text NOT NULL,
  `destination_latitude` varchar(255) NOT NULL,
  `destination_longitude` varchar(255) NOT NULL,
  `expected_time` varchar(50) NOT NULL,
  `trip_return` int(10) NOT NULL,
  `route_rate` int(150) NOT NULL DEFAULT '0',
  `trip_id` int(150) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`trip_led_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(40) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_type` varchar(40) DEFAULT NULL COMMENT '1->Travel  , 2->Individuals',
  `user_company_name` varchar(255) DEFAULT NULL,
  `user_first_name` varchar(40) DEFAULT NULL,
  `user_last_name` varchar(40) DEFAULT NULL,
  `user_about_us` text NOT NULL,
  `user_profile_img` varchar(255) NOT NULL,
  `user_mobile` varchar(40) DEFAULT NULL,
  `user_secondary_phone` varchar(40) DEFAULT NULL,
  `user_secondary_mail` varchar(40) DEFAULT NULL,
  `user_company_id` varchar(40) DEFAULT NULL,
  `user_url` varchar(255) NOT NULL,
  `user_street` varchar(255) DEFAULT NULL,
  `user_city` varchar(40) DEFAULT NULL,
  `postal_code` int(50) DEFAULT NULL,
  `user_occupation` varchar(40) DEFAULT NULL,
  `marital_status` varchar(40) DEFAULT NULL,
  `isverified` varchar(60) NOT NULL,
  `show_number` varchar(50) DEFAULT '1' COMMENT '1->yes , 0->no',
  `send_sms` varchar(50) DEFAULT '1' COMMENT '1->yes , 0->no',
  `allowed_food` int(2) NOT NULL COMMENT '0->no,1->yes',
  `allowed_pet` int(2) NOT NULL COMMENT '0->no,1->yes',
  `allowed_smoke` int(2) NOT NULL COMMENT '0->no,1->yes',
  `allowed_chat` int(2) NOT NULL COMMENT '0->no,1->yes',
  `allowed_music` int(2) NOT NULL COMMENT '0->no,1->yes',
  `user_gender` varchar(40) DEFAULT NULL,
  `user_country` varchar(40) DEFAULT NULL,
  `user_dob` varchar(50) NOT NULL,
  `communication_mobile` int(2) NOT NULL DEFAULT '0' COMMENT '0-->primary , 2-->secondary ',
  `communication_email` int(2) NOT NULL DEFAULT '0' COMMENT '0-->primary , 2-->secondary ',
  `login_type` int(10) NOT NULL COMMENT '0-->normal ,1-->facebook',
  `isactive` int(2) NOT NULL,
  `user_admin_status` int(11) NOT NULL DEFAULT '0',
  `user_created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_lost_login` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `tbl_company_tbl_users` (`user_company_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query


insert  into `tbl_country`(`country_id`,`country_name`,`country_code`,`is_active`,`created_date`) values (1,'India','IN',1,NULL),(2,'Malaysia','MAL',1,NULL),(3,'united state','us',1,NULL);

-- new query

CREATE TABLE IF NOT EXISTS `tbl_vechicle_types` (
  `vechicle_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `vechicle_type_name` varchar(40) DEFAULT NULL,
  `vechicle_image` varchar(64) NOT NULL,
  `category_id` int(14) NOT NULL,
  `vechicle_createdate` varchar(40) DEFAULT NULL,
  `isactive` int(2) NOT NULL,
  PRIMARY KEY (`vechicle_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `tbl_vehicle` (
  `vechicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vechicle_type_id` int(11) DEFAULT NULL,
  `vechicle_number` varchar(40) DEFAULT NULL,
  `vechicle_logo` varchar(50) NOT NULL,
  `vechiclecomfort` varchar(255) NOT NULL,
  `user_id` int(12) NOT NULL,
  `vechicle_createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`vechicle_id`),
  KEY `tbl_vechicle_types_tbl_vehicle` (`vechicle_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `tbl_widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `widget_name` varchar(255) NOT NULL,
  `widget_link` text NOT NULL,
  `widget_script` text NOT NULL,
  `widget_flag` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- new query

CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;



-- new query

INSERT INTO `tbl_logo` (`id`, `name`) VALUES
(1, 'user1_logo_1442642482.png');

-- new query

CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_giver_id` int(16) NOT NULL,
  `rating_receiver_id` int(16) DEFAULT NULL,
  `rating` int(16) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- new query

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `menu_title` varchar(128) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `route_id` int(128) NOT NULL,
  `content` longtext NOT NULL,
  `sequence` int(11) NOT NULL DEFAULT '0',
  `seo_title` text NOT NULL,
  `meta` text NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `new_window` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`,`content`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- new query

INSERT INTO `pages` (`id`, `parent_id`, `title`, `menu_title`, `slug`, `route_id`, `content`, `sequence`, `seo_title`, `meta`, `url`, `new_window`) VALUES
(1, 0, 'Blog', 'Blog', 'blog', 1, '<p>&lt;h1&gt;Blogs&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt; Create your blogs here for&nbsp; Carpooling&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&nbsp;</p>', 0, '', '', NULL, 0),
(2, 0, 'Company_directory', 'Company_directory', 'company-directory', 2, '<p>&lt;h1&gt;Company directory&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt; Please refer the company details here.&lt;/p&gt;&lt;br&gt;</p>', 0, '', '', NULL, 0),
(3, 0, 'Contact', 'Contact', 'contact', 3, '<p>&lt;h1&gt;Contact&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;h2&gt;Please contact carpooling site .&lt;/h2&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt; Contact number : XXXXXXXXXXX&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt;&nbsp; E-Mail : XXX@gmail.com&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt; Help line: 123123123&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&nbsp;</p>', 0, '', '', NULL, 0),
(4, 0, 'find_a_candidate', 'find_a_candidate', 'find_a_candidate', 4, '<p>&lt;h1&gt;Find a candidate&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt;Find a candidate here in carpooilng. &lt;/p&gt;</p>', 0, '', '', NULL, 0),
(5, 0, 'help_us', 'help_us', 'help_us', 5, '<p>&lt;h1&gt;Help us&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How do I register with Carpooling?&lt;/h3&gt;&lt;br&gt;<br />\n1. Find &lsquo;Register&rsquo; option and click on it.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. You may either simply login with your Facebook or Google + ID, or create a user name and password.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. To create a user id and password, fill in the shown details in the form, such as First name, Last name, Email ID, Mobile number, and Password, and click on &lsquo;Register&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. You will receive an activation email in your registered email id.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Use the link in the email to activate and come to Login page.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How do I login to Carpooling?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Find &lsquo;Login&rsquo; option and click on it.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Either login with your Facebook or Google + login id and password, or the User id and Password you created for joining the Carpooling. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Click on Sign in to login. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to edit my profile?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. After logging in, you will see your name on the right hand side.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Click on the dropdown adjacent to your name, and find the option &lsquo;Profile&rsquo; to click on it.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. You may provide your mobile number, email id, alternate email id, first name, last name, date of birth, and &lsquo;About you&rsquo;, and also upload a photo of yours, and click &lsquo;Save&rsquo;. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to add a new vehicle?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. After logging in, you will see your name on the right hand side.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Click on the dropdown adjacent to your name, and find the option &rsquo;My Vehicles&rsquo; to click on it.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. You will be navigated to the page, where you will see the list of &lsquo;My Cars&rsquo; and an option &lsquo;Add a new car&rsquo;. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Click on the option &lsquo;Add a new car&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Provide details - Brand, Vehicle Number, Car type, and Comfort level, and &lsquo;Save&rsquo;. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n6. You will find your car being added in the list &lsquo;My Cars&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to Post a trip for an added car?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Find &lsquo;Post a trip&rsquo; and click on it.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. A form will open, where you will provide details such as, the vehicle, departure point, arrival point, route, frequency, trip type, departure time, number of available seats, phone number, and any comments. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Once you fill up the form, click &lsquo;Post&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. You will be navigated to &lsquo;My trips&rsquo; where you will see your posted trip being added to the list of &lsquo;My Trips&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to add a route?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>While posting a trip, after entering the departure point and arrival point, enter a point in the field &lsquo;Route&rsquo;, and click on the option &lsquo;Add Route&rsquo;. For example, if the trip is from Brussels, Belgium to Zurich, Switzerland, and if the car is travelling via Luxembourg, France, then, in the route field, enter Luxembourg and click on the option &lsquo;Add Route&rsquo;. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to view the trips I have posted?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>You can view both &lsquo;Upcoming trips&rsquo; as well as &lsquo;Past trips&rsquo;.<br />\nUpcoming trips will show the list of trips which are posted for the future dates from the current date.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\nPast trips are the list of trips which were posted during the past dates from the current date. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>1. Click on &lsquo;Upcoming trips&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. From the list, click on a particular trip for which you want to view the details. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. You will be able to see the details such as departure point, arrival point, and trip legs.<br />\nTrip legs are nothing but, those points, which come across a particular route.<br />\nFor example,<br />\nIf the Departure point is Brussels, Belgium and Arrival point is Zurich, Switzerland. The route is via Luxembourg, France, then the trip legs would be,<br />\nBrussels, Belgium to Luxembourg, France.<br />\nLuxembourg, France to Zurich, Switzerland. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Here, you may edit time, rate, and number of seats available, for each trip leg.&nbsp; &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Click on &lsquo;Edit trip&rsquo; to save the changes. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n6. Click on &lsquo;Delete the trip&rsquo; to delete the trip.&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;Get Enquiry (for car riders to enquire about a trip.)&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. When the traveller who sees a trip, clicks on &lsquo;Enquiry&rsquo; option.&nbsp; &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. The contact information such as User name, Email id, and Mobile number, gets shared between the person who has posted the trip, and the person who has viewed the trip and enquired about the trip. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;Forgot Password&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. In the login page, enter your email id. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Click on &lsquo;Forgot Password&rsquo; option. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. You will be navigated to a page where you should provide your email id. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. You will receive an OTP (One Time Password) to your email id.<br />\n&nbsp;&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Go to Login page, enter your email id and the OTP and click sign in.&nbsp; &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;Set a new password&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Click on &lsquo;My Settings&rsquo;&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Click on &lsquo;Change Password&rsquo;&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Provide your old password or OTP, new password, and confirm password. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Click on &lsquo;Save&rsquo; and your password changes.&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;Subscribe to Newsletter&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>Your site visitors can subscribe to your newsletters to regularly hear about your updates. They can receive these updates on their email id. When a site visitor clicks on &lsquo;Subscribe to Newsletter&rsquo; and enters email id and submits. The email id gets stored in your Admin Control Panel. You can use the email ids which gets stored in your admin control panel for sending newsletters (updates).&nbsp; &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to add a new currency?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Go to &lsquo;Master&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Select &lsquo;Currency&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Click on &lsquo;Add Currency&rsquo; which you will find on right hand side.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Provide Currency Name and Currency code. E.g. US Dollars and USD.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Click on &lsquo;Save&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n6. Go to &lsquo;All Currencies&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n7. You will see that the Currency added by you in the list, along with the code.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n8. Go to &lsquo;Welcome Carpooling Script on the right hand side.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n9. Click on &lsquo;Edit Settings&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n10. You may select the name of the Currency name under &lsquo;Currency Name&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n11. You will see that the Currency code automatically gets entered.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n12. Click &lsquo;Save&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n13. On the home page, when the user finds a ride posted by you, the user will be able to see the ride posted by you, with the cost, shown in the currency you have added.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to add a new language?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Login and Go to Admin Panel.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Go to Masters.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Select the option &lsquo;Language&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Create a new language by providing &lsquo;Language name&rsquo; and &lsquo;Language prefix&rsquo;. For example, for language French, prefix is FR.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Click &lsquo;Submit&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n6. In the list of &lsquo;All languages&rsquo; you will see the language you added, along with the prefix.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n7. Go to &lsquo;Welcome Admin (your name), on the right hand side.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n8. Go to &lsquo;Edit Settings&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n9. Go to language dropdown.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n10. Select the language you had added, and click &lsquo;Submit&rsquo;<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n11. In the root folder, the language folder gets created.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n12. Go to the language folder, and edit the language. For example, change &ldquo;My trips&rdquo; to &lsquo;&rsquo;Mis Viajes&rsquo;&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>', 0, '', '', NULL, 0);

-- new query

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `route` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- new query

INSERT INTO `routes` (`id`, `slug`, `route`) VALUES
(1, 'blog', 'pages/page/1'),
(2, 'company-directory', 'pages/page/2'),
(3, 'contact', 'pages/page/3'),
(4, 'find_a_candidate', 'pages/page/4'),
(5, 'help_us', 'pages/page/5');
