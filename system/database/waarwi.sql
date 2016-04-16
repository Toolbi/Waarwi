-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 16 Avril 2016 à 23:20
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `waarwi3`
--

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `parent_id`, `title`, `menu_title`, `slug`, `route_id`, `content`, `sequence`, `seo_title`, `meta`, `url`, `new_window`) VALUES
(1, 0, 'Blog', 'Blog', 'blog', 1, '<p>&lt;h1&gt;Blogs&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt; Create your blogs here for&nbsp; Carpooling&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&nbsp;</p>', 0, '', '', NULL, 0),
(2, 0, 'Company_directory', 'Company_directory', 'company-directory', 2, '<p>&lt;h1&gt;Company directory&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt; Please refer the company details here.&lt;/p&gt;&lt;br&gt;</p>', 0, '', '', NULL, 0),
(3, 0, 'Contact', 'Contact', 'contact', 3, '<p>&lt;h1&gt;Contact&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;h2&gt;Please contact carpooling site .&lt;/h2&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt; Contact number : XXXXXXXXXXX&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt;&nbsp; E-Mail : XXX@gmail.com&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt; Help line: 123123123&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&nbsp;</p>', 0, '', '', NULL, 0),
(4, 0, 'find_a_candidate', 'find_a_candidate', 'find_a_candidate', 4, '<p>&lt;h1&gt;Find a candidate&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;p&gt;Find a candidate here in carpooilng. &lt;/p&gt;</p>', 0, '', '', NULL, 0),
(5, 0, 'help_us', 'help_us', 'help_us', 5, '<p>&lt;h1&gt;Help us&lt;/h1&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How do I register with Carpooling?&lt;/h3&gt;&lt;br&gt;<br />\n1. Find &lsquo;Register&rsquo; option and click on it.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. You may either simply login with your Facebook or Google + ID, or create a user name and password.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. To create a user id and password, fill in the shown details in the form, such as First name, Last name, Email ID, Mobile number, and Password, and click on &lsquo;Register&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. You will receive an activation email in your registered email id.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Use the link in the email to activate and come to Login page.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How do I login to Carpooling?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Find &lsquo;Login&rsquo; option and click on it.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Either login with your Facebook or Google + login id and password, or the User id and Password you created for joining the Carpooling. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Click on Sign in to login. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to edit my profile?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. After logging in, you will see your name on the right hand side.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Click on the dropdown adjacent to your name, and find the option &lsquo;Profile&rsquo; to click on it.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. You may provide your mobile number, email id, alternate email id, first name, last name, date of birth, and &lsquo;About you&rsquo;, and also upload a photo of yours, and click &lsquo;Save&rsquo;. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to add a new vehicle?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. After logging in, you will see your name on the right hand side.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Click on the dropdown adjacent to your name, and find the option &rsquo;My Vehicles&rsquo; to click on it.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. You will be navigated to the page, where you will see the list of &lsquo;My Cars&rsquo; and an option &lsquo;Add a new car&rsquo;. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Click on the option &lsquo;Add a new car&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Provide details - Brand, Vehicle Number, Car type, and Comfort level, and &lsquo;Save&rsquo;. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n6. You will find your car being added in the list &lsquo;My Cars&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to Post a trip for an added car?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Find &lsquo;Post a trip&rsquo; and click on it.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. A form will open, where you will provide details such as, the vehicle, departure point, arrival point, route, frequency, trip type, departure time, number of available seats, phone number, and any comments. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Once you fill up the form, click &lsquo;Post&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. You will be navigated to &lsquo;My trips&rsquo; where you will see your posted trip being added to the list of &lsquo;My Trips&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to add a route?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>While posting a trip, after entering the departure point and arrival point, enter a point in the field &lsquo;Route&rsquo;, and click on the option &lsquo;Add Route&rsquo;. For example, if the trip is from Brussels, Belgium to Zurich, Switzerland, and if the car is travelling via Luxembourg, France, then, in the route field, enter Luxembourg and click on the option &lsquo;Add Route&rsquo;. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to view the trips I have posted?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>You can view both &lsquo;Upcoming trips&rsquo; as well as &lsquo;Past trips&rsquo;.<br />\nUpcoming trips will show the list of trips which are posted for the future dates from the current date.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\nPast trips are the list of trips which were posted during the past dates from the current date. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>1. Click on &lsquo;Upcoming trips&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. From the list, click on a particular trip for which you want to view the details. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. You will be able to see the details such as departure point, arrival point, and trip legs.<br />\nTrip legs are nothing but, those points, which come across a particular route.<br />\nFor example,<br />\nIf the Departure point is Brussels, Belgium and Arrival point is Zurich, Switzerland. The route is via Luxembourg, France, then the trip legs would be,<br />\nBrussels, Belgium to Luxembourg, France.<br />\nLuxembourg, France to Zurich, Switzerland. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Here, you may edit time, rate, and number of seats available, for each trip leg.&nbsp; &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Click on &lsquo;Edit trip&rsquo; to save the changes. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n6. Click on &lsquo;Delete the trip&rsquo; to delete the trip.&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;Get Enquiry (for car riders to enquire about a trip.)&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. When the traveller who sees a trip, clicks on &lsquo;Enquiry&rsquo; option.&nbsp; &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. The contact information such as User name, Email id, and Mobile number, gets shared between the person who has posted the trip, and the person who has viewed the trip and enquired about the trip. &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;Forgot Password&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. In the login page, enter your email id. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Click on &lsquo;Forgot Password&rsquo; option. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. You will be navigated to a page where you should provide your email id. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. You will receive an OTP (One Time Password) to your email id.<br />\n&nbsp;&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Go to Login page, enter your email id and the OTP and click sign in.&nbsp; &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;Set a new password&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Click on &lsquo;My Settings&rsquo;&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Click on &lsquo;Change Password&rsquo;&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Provide your old password or OTP, new password, and confirm password. &lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Click on &lsquo;Save&rsquo; and your password changes.&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;Subscribe to Newsletter&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>Your site visitors can subscribe to your newsletters to regularly hear about your updates. They can receive these updates on their email id. When a site visitor clicks on &lsquo;Subscribe to Newsletter&rsquo; and enters email id and submits. The email id gets stored in your Admin Control Panel. You can use the email ids which gets stored in your admin control panel for sending newsletters (updates).&nbsp; &lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to add a new currency?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Go to &lsquo;Master&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Select &lsquo;Currency&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Click on &lsquo;Add Currency&rsquo; which you will find on right hand side.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Provide Currency Name and Currency code. E.g. US Dollars and USD.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Click on &lsquo;Save&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n6. Go to &lsquo;All Currencies&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n7. You will see that the Currency added by you in the list, along with the code.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n8. Go to &lsquo;Welcome Carpooling Script on the right hand side.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n9. Click on &lsquo;Edit Settings&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n10. You may select the name of the Currency name under &lsquo;Currency Name&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n11. You will see that the Currency code automatically gets entered.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n12. Click &lsquo;Save&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n13. On the home page, when the user finds a ride posted by you, the user will be able to see the ride posted by you, with the cost, shown in the currency you have added.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>\n\n<p>&lt;h3&gt;How to add a new language?&lt;/h3&gt;&lt;br&gt;</p>\n\n<p>1. Login and Go to Admin Panel.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n2. Go to Masters.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n3. Select the option &lsquo;Language&rsquo;.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n4. Create a new language by providing &lsquo;Language name&rsquo; and &lsquo;Language prefix&rsquo;. For example, for language French, prefix is FR.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n5. Click &lsquo;Submit&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n6. In the list of &lsquo;All languages&rsquo; you will see the language you added, along with the prefix.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n7. Go to &lsquo;Welcome Admin (your name), on the right hand side.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n8. Go to &lsquo;Edit Settings&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n9. Go to language dropdown.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n10. Select the language you had added, and click &lsquo;Submit&rsquo;<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n11. In the root folder, the language folder gets created.<br />\n&lt;p&gt;&lt;/p&gt;&lt;br&gt;<br />\n12. Go to the language folder, and edit the language. For example, change &ldquo;My trips&rdquo; to &lsquo;&rsquo;Mis Viajes&rsquo;&rsquo;.&lt;p&gt;&lt;/p&gt;&lt;br&gt;</p>', 0, '', '', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `route` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `routes`
--

INSERT INTO `routes` (`id`, `slug`, `route`) VALUES
(1, 'blog', 'pages/page/1'),
(2, 'company-directory', 'pages/page/2'),
(3, 'contact', 'pages/page/3'),
(4, 'find_a_candidate', 'pages/page/4'),
(5, 'help_us', 'pages/page/5');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(120) DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('a629dc61a37faa8d0166ca8b577679f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758161, 'a:1:{s:9:"user_data";s:0:"";}'),
('b0f350b88f220cb26ff913fc0edcf020', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758161, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";N;s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1458756849;}}'),
('bb14083cd553f38059aabf0f1e5061af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758161, ''),
('8986894493422f3d0d92d754c2c0cdc4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758508, ''),
('24dbf9f7814aa6047796f09f399fd321', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758508, ''),
('873c11264aae68aad94e696a34907ba3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758508, ''),
('37b8dd92fe5d85115cb47e6813b8cdbf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758577, 'a:1:{s:9:"user_data";s:0:"";}'),
('ddcef54def807e393c6816957554dff2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758577, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";N;s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1458759236;}}'),
('b555520dbc7f852241aa3d0d079ff36f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458758577, ''),
('2aa053e70e3309ef826b786787a35795', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458930725, 'a:1:{s:17:"flash:old:message";s:29:"Your Profile has been changed";}'),
('dc4efd209e471d6d607ef69fb57260d6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458930725, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1458931524;}}'),
('3bcf0927b1ffcbe18b49b30a443407e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458930725, ''),
('55c9ce6d2f3dafe8633b339e7054f909', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1458943258, 'a:1:{s:11:"journeyDate";s:10:"27/03/2016";}'),
('91f0b346e12cc456216bfd7afb7e1cdf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1458943258, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1458941833;}}'),
('3fef4f7ea0932eba1d3da82d76d78738', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1458943258, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:22:"falloufall87@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"3";s:7:"trip_id";a:0:{}s:6:"expire";i:1458943858;}}'),
('2b50f184c7b7c5f49fb0f3382e7cc6b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1459016470, 'a:2:{s:9:"user_data";s:0:"";s:11:"journeyDate";s:10:"27/03/2016";}'),
('ddf04377780e5dde240eca60cd002935', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1459016470, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";b:0;}}'),
('d3c3f7ada6530b8b35d71e3db16a5445', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1459016470, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:20:"fallfallo@hotmail.fr";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"3";s:7:"trip_id";a:0:{}s:6:"expire";i:1459016567;}}'),
('a12261dae64a04fa649b5133488637ab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', 1459015501, 'a:1:{s:9:"user_data";s:0:"";}'),
('ef07411b18fbc2845f98bd2eeae3bc00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', 1459015501, ''),
('70cc7846a921367e92ef67b4193406de', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', 1459015511, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:22:"falloufall87@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"2";s:7:"trip_id";b:0;s:6:"expire";i:1459016121;}}'),
('77d4f216b7820a0315d236e4778ad7a7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459166226, ''),
('80ff3c6190f02a2837a14ccfeaa3f0f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459168664, ''),
('831f8bb14dabaa7bc342e67c8f591c0e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459166226, ''),
('d0f53c0876a6bc25ef31c50a88c1630d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459168664, ''),
('7195d9534dfca4a25bc757ef54b1518b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459166226, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1459117690;}}'),
('b5d128e0c8b1e5bae7410323ef3a4655', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459168664, ''),
('effe6ba7a0ddd647a29d8805528e25b6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459180413, 'a:1:{s:11:"journeyDate";s:10:"29/03/2016";}'),
('ea3a08bfa5ffeda0f90e7032225a3de4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459180413, ''),
('f61ffd2f627bea857a324da6dd4eb603', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459180413, 'a:1:{s:7:"carpool";a:5:{s:10:"user_email";s:22:"falloufall87@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"2";s:7:"trip_id";b:0;s:6:"expire";i:1459181210;}}'),
('deeacf033fdb6ada20569019284ea62a', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459180660, ''),
('c172b88edd2bcb028cae6d420ecec4a2', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459180660, ''),
('137238690f72407b648bfb25b52b8c4f', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459180660, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:22:"falloufall87@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"2";s:7:"trip_id";b:0;s:6:"expire";i:1459181296;}}'),
('b420d5dac8582a77930718c50d094325', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459180791, ''),
('de7160cb693f01cb7c776735db3e781b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459180791, ''),
('e56eb8c6f9266203f41e14259d02dbba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459180791, ''),
('2cb14d65a03b45540e288f0c46fb4ef6', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459180881, ''),
('5ead4d8e06bf776ea2a9a14a8d580b68', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459180881, ''),
('889b0f31c7bc05d474c79fbe081953bb', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459180881, ''),
('3ea212a8025bc1de9a7ee7ce96f1b5cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459181704, ''),
('fc082725dc769587955a9a23c9bb4219', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459181704, ''),
('0272475b7cebd4244886b47663b4d5f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459181704, ''),
('202f47ef6f6641946fb46112b2a4237a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185435, ''),
('30fced94c8d0a8e7b3b5dcdb96095ece', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185435, 'a:1:{s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1459183520;}}'),
('948858eb850eaaf24ca7d1274e19572d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185435, ''),
('74e54ff045763139fb34ac476565ee63', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185810, ''),
('2d6130905951516f70523fbb9781e508', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185810, ''),
('42faff53216a0c26ba37156a801bc37c', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185810, ''),
('ca8e9c0b456f2b1e7d0f06af3e98fff2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185837, ''),
('21a449ad719029ec7cbc8594ae394215', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185837, ''),
('0daaa55d0fdac3efbd17d817ab44415c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185837, ''),
('a2672acad77806d13f09e4cf32f60f77', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185871, ''),
('ecaf6b9d0aa7b62d8ed001b3d115d91b', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185871, ''),
('2e34660872e5ac7dacf60527b7489a81', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185871, ''),
('6b7419fdac955b02e46e794b64b4c7dd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185906, ''),
('c737f237facdf8061e858d6c95cde109', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185906, ''),
('7f26620f79fc327f59af20c645462f77', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459185906, ''),
('497a56c6dc5e056ae5f773c526225eee', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185954, ''),
('ba527fd7231829ced51718eba25eca21', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185954, ''),
('7a6b52e0a0c8c5be7c39146e273d5992', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459185954, ''),
('a8af2ce335fdf85654eb78f0da779046', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459186327, ''),
('7fe3a9cf622b906a6344c519c55bdbbb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459186327, ''),
('f7b52cc3c89390b7d4752c4a04aff96a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459186327, ''),
('6664375b59ec72c835f459342866ba29', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459186499, ''),
('bbb43340ec0e4e9cd30d9028520b642f', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459186499, ''),
('d8e965de775b193e901cba1e5c9e2ba0', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459186499, ''),
('ff347a2be22767db1a29c443a8ede40d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459190646, ''),
('0a2fa1edfbed72caa257cb4799262c68', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459190646, ''),
('da781b6c6964b48847e48149425b84eb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459190646, ''),
('3d9debaa4e0c7c9641bf2c6143adbbca', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459190830, ''),
('a58b22bd9f9dde3392a3ec665840cfba', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459190830, ''),
('248cb9a3f50eeab62c6bada62ee4b5e5', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459190830, ''),
('12fb968ef14da89fc3f1dab860410112', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459191845, ''),
('9b4b3db0a94aa10f58722b79dd317dc2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459191845, ''),
('d38fe727daeb57bdef4965b60964313d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459191845, ''),
('52c6a79c567f46356ddf8125b980d5ee', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459192104, ''),
('28d077e40928242633dafdb4c438de68', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459192104, ''),
('4dbd52f4814c40246e8ad849ad26bdb8', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459192104, ''),
('9738e05a56f4828403ec17d46646ed5c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459251872, ''),
('aee4fc2b869b8daf361418257e21bfd2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459281999, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1459269533;}}'),
('5eb642ac84e0861a87c570c0506042c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0.1) Gecko/20100101 Firefox/9.0.1', 1459282991, ''),
('924983cb52a7117f580c3499551d1f2d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459281998, ''),
('ecae70df00905797d828d40fa449e691', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0.1) Gecko/20100101 Firefox/9.0.1', 1459282991, ''),
('c5de91936c83b7f70321701c137c2076', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459282070, ''),
('980e817a0c6566718d10d11e64997971', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0.1) Gecko/20100101 Firefox/9.0.1', 1459282991, ''),
('784940a845f279e76e9cac75204c0ddf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459281999, ''),
('9e95baf50ad67c0d8aa3278f2ec86d4e', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459282070, ''),
('a56b2bdc3ae52e2d0c8065e9cc6f152c', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459282070, ''),
('dbfd104304261422dde69e2365764fac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459355597, ''),
('6b3dacf3377a3b18c4ec7533c133dd36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459374513, 'a:1:{s:9:"user_data";s:0:"";}'),
('883dfd4133656b6b3ddc184da189794d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459355600, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1459356241;}}'),
('fb25d3ea06b3ae393ea996ba8ec8b236', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459355683, 'a:1:{s:9:"user_data";s:0:"";}'),
('3488b3d2f2a1c96f36218aee48a8f6e2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459355597, ''),
('27a83030b1bed2aaeab44473e0b0f550', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459355684, ''),
('b1224b0bb462aaf84452e469976796c6', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459708782, ''),
('336f83a9cf357910ec1b8b9185627827', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459355684, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1459356288;}}'),
('6765280ccdf9d0827d82143901d58ed1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459374513, ''),
('27b3a9358f08745769cce172631d6e04', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459708424, ''),
('65a001696ef2078dc7cd9bfd11f773dd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1459374645, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1459375248;}}'),
('0219f6d12299fdc5552bec3eb761837e', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459708782, ''),
('8c75ba90496750f60d298696fe728d65', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459708782, ''),
('32b20b2585d06e24c64409ecd1d3f474', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459708424, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:22:"falloufall87@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"2";s:7:"trip_id";b:0;s:6:"expire";i:1459709224;}}'),
('acaf1d41ea6c27c7e10bd8aa0d5c772f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459708424, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";b:0;}}'),
('da42e5476e8a5bd0a4ab8726eb75118c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459765966, ''),
('cc7052f83ddc2bba6277cbff84dbea91', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459765966, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1459717647;}}'),
('ef7b53e877ac71463a06af70b1e3d348', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459766488, ''),
('a6448f331101e7a65e8f87c7fcccdb61', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459766759, ''),
('10454e22a634ad1698592449795ce021', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459766760, ''),
('d6dd2071d13f920f7c2fa99196aab84c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459766488, ''),
('c123cf8ce828a2fab04d79cb20af7e33', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459766488, 'a:1:{s:7:"carpool";a:5:{s:10:"user_email";s:21:"contact@khadimdev.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"6";s:7:"trip_id";a:0:{}s:6:"expire";i:1459767094;}}'),
('ad05ff5904d04979f69f2569c5677507', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459766760, ''),
('d2488ea605a862ada699088794538d31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459780805, ''),
('cdee889af312d734ab5718104750d7cf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459780805, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1459768092;}}'),
('caccec84b5d2fae88e54c1f085b5b571', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1459780805, 'a:1:{s:7:"carpool";a:5:{s:10:"user_email";s:21:"contact@khadimdev.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"6";s:7:"trip_id";a:0:{}s:6:"expire";i:1459781669;}}'),
('d7c6d6bd1199190374fe022f307efa00', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459781089, ''),
('8479f1cd6f254a80fc1abba763fb6ae7', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459781090, ''),
('ed30f068dd6a4be3540f496a2f1e6bcd', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1459781090, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:21:"contact@khadimdev.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"6";s:7:"trip_id";a:0:{}s:6:"expire";i:1459781709;}}'),
('583ad44ccde61a435be5c7c1731a6632', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460132791, ''),
('96bbfe3c49edc32a2501d8e64e8015ab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460132791, ''),
('7d59ecffbbb996cb3d25caa4960762b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460377387, ''),
('87efe7f97d0f6756fc9d596df0c41161', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1460377661, ''),
('4a5e8f437933b8e838bba0eea1de0278', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460377387, 'a:1:{s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1460375261;}}'),
('ac63789c5e2ca7a29ce7b695fcc64eec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460377387, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:22:"falloufall87@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"2";s:7:"trip_id";b:0;s:6:"expire";i:1460378237;}}'),
('352c826b5aa740d26b5aa3b05d18e1ae', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1460377661, ''),
('60f7894a28c8fd9f9e327ac6f78ebf13', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile', 1460377661, 'a:2:{s:9:"user_data";s:0:"";s:18:"flash:old:redirect";s:7:"profile";}'),
('e574d76386aedc5e12bcaffbdc4b6e7c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460486543, ''),
('aace9a603cb8aab796467d173fc0e199', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460410459, ''),
('076f5a0f536ede65e41fd94ac973f9de', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460544874, ''),
('b9d7e249f56edae50aab3bb2dfea495d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460733816, 'a:1:{s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1460716343;}}'),
('53484898577c9e5126fe87fdac72e19a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460733816, ''),
('d116ca5e34226d40f8e74c57f6ce9347', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460486716, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:21:"contact@khadimdev.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"6";s:7:"trip_id";a:0:{}s:6:"expire";i:1460487335;}}'),
('c9410a9de7bbd2dbb25c68ef0cf1221d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36', 1460486543, 'a:1:{s:5:"admin";a:4:{s:2:"id";s:1:"1";s:4:"name";s:23:"KhadimFallou MbackeFall";s:5:"email";s:19:"yobaalema@gmail.com";s:6:"expire";i:1460485061;}}'),
('8854dc43a6a16fea8f314a1b6894c0f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460738372, 'a:1:{s:9:"user_data";s:0:"";}'),
('ee4509efe2ea8f7fe1d722e2f6a44283', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460550766, 'a:1:{s:9:"user_data";s:0:"";}'),
('2dbe537289c5e16da127bc82a9ace7f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460563786, 'a:2:{s:9:"user_data";s:0:"";s:18:"flash:new:redirect";s:26:"addtrip/enquiryaction/true";}'),
('3bc1106039a7261027e3cc118cda2eaf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460544874, ''),
('ae433c0af425b81210e7c99424e283ad', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460550766, ''),
('ef18d211e0e0aa02bfbb3d1ad7192665', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460545410, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:22:"falloufall87@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"2";s:7:"trip_id";a:0:{}s:6:"expire";i:1460546010;}}'),
('69a104045c155991e972e9e5adaa5bd7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460738372, ''),
('05ac58c2e93b1f6e8b544f9fb678ae86', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460545412, ''),
('e19cd21b8165f3403c4a1ac17bf77348', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460545412, ''),
('55ff079a4bc03ebef1f7a9abe48e9a8e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460545830, ''),
('f0e2662ec4cdcdcdccd6af5081bbfcb0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460545830, ''),
('de9b4c825824ea9757aa478a6556e8bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460562486, ''),
('ccf267ec4eb981c5e57a55a5744c1cce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460562486, ''),
('e904b756469ab111477b51edefa03a6b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460552118, ''),
('d23ac9439d3c6075280e9cd36072c85b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460552118, ''),
('55e40ce9a8c235126d8231305118b12e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460552118, 'a:2:{s:9:"user_data";s:0:"";s:18:"flash:old:redirect";s:26:"addtrip/enquiryaction/true";}'),
('def79604611d104804af3b7ce1eb867b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460840298, ''),
('f7cba0ad9dd6a30d064856dc87716360', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460744098, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:15:"demba@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"8";s:7:"trip_id";a:0:{}s:6:"expire";i:1460744698;}}'),
('51912f13d5307c232e78e6dc6b4231f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460744098, ''),
('bca8feba9da28c6fdeed51b0beeb6c1c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460840298, 'a:1:{s:9:"user_data";s:0:"";}'),
('3779c25c7c01f7e43577f604558f8b45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460744098, 'a:1:{s:9:"user_data";s:0:"";}'),
('9b3194d4db4cf5ef8c3ac09347795837', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460733816, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:15:"demba@gmail.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"8";s:7:"trip_id";a:0:{}s:6:"expire";i:1460734416;}}'),
('93bb021902e8baa32b1cf05570746ead', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', 1460738372, 'a:2:{s:9:"user_data";s:0:"";s:7:"carpool";a:5:{s:10:"user_email";s:21:"contact@khadimdev.com";s:6:"access";s:6:"travel";s:7:"user_id";s:1:"6";s:7:"trip_id";b:0;s:6:"expire";i:1460738984;}}'),
('1cb820e03f10ec6694ceeb82c8dfe51e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 1460840506, '');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `setting_key` varchar(255) NOT NULL,
  `setting` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`id`, `code`, `setting_key`, `setting`) VALUES
(1, 'payment_modules', 'cod', '0'),
(2, 'cod', 'enabled', '0'),
(3, 'shipping_modules', 'flatrate', '0'),
(4, 'flatrate', 'rate', ''),
(5, 'flatrate', 'enabled', '0');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_address`
--

CREATE TABLE IF NOT EXISTS `tbl_address` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `trip_id` int(150) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `weight` int(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_admin`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_email`, `admin_password`, `admin_name`, `first_name`, `last_name`, `company_name`, `company_email`, `company_mobile`, `admin_img`, `access`, `admin_createddate`) VALUES
(1, 'yobaalema@gmail.com', '291f2182dbe1fa03832efa95b4452f28ca1b601f', 'KhadimFallou MbackeFall', NULL, NULL, NULL, NULL, NULL, 'admin1_cover_1459537689.png', 'Admin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_amenities`
--

CREATE TABLE IF NOT EXISTS `tbl_amenities` (
  `amenities_id` int(11) NOT NULL AUTO_INCREMENT,
  `amenities_name` varchar(40) DEFAULT NULL,
  `created_on` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`amenities_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(15) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(56) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(2) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `created_date`, `is_active`) VALUES
(19, 'Ford', '2015-01-09 04:21:50', 1),
(18, 'Ferrari', '2015-01-09 04:21:37', 1),
(17, 'Datsun', '2015-01-09 04:21:29', 1),
(16, 'Chevrolet', '2015-01-09 04:21:19', 1),
(15, 'BMW', '2015-01-09 04:21:10', 1),
(13, 'Fiat', '2015-01-09 04:20:38', 1),
(14, 'Bentley', '2015-01-09 04:21:02', 1),
(20, 'Hindustan Motors', '2015-01-09 04:21:59', 1),
(21, 'Honda', '2015-01-09 04:22:07', 1),
(22, 'Hyundai', '2015-01-09 04:22:15', 1),
(23, 'Isuzu', '2015-01-09 04:22:26', 1),
(24, 'Jaguar', '2015-01-09 04:22:34', 1),
(25, 'Mahindra', '2015-01-09 04:22:50', 1),
(26, 'Maruti Suzuki', '2015-01-09 04:22:59', 1),
(27, 'Mercedes-Benz', '2015-01-09 04:23:08', 1),
(28, 'Mini', '2015-01-09 04:23:16', 1),
(29, 'Nissan', '2015-01-09 04:23:26', 1),
(30, 'Renault', '2015-01-09 04:23:39', 1),
(31, 'Skoda', '2015-01-09 04:23:49', 1),
(32, 'Tata', '2015-01-09 04:24:14', 1),
(33, 'Toyota', '2015-01-09 04:24:23', 1),
(34, 'Volkswagen', '2015-01-09 04:24:32', 1),
(35, 'Volvo', '2015-01-09 04:24:41', 1),
(36, 'Mitsubishi', '2015-01-09 05:17:37', 1),
(37, 'Tempo Travel', '2015-01-18 17:22:19', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `country_id` int(6) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(120) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `currency` varchar(100) NOT NULL,
  `is_active` int(11) DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`, `country_code`, `currency`, `is_active`, `created_date`) VALUES
(5, 'Mali', 'MAL', '', 1, '2016-04-01 21:12:36'),
(4, 'Sénégal', 'SEN', '', 1, '2016-03-26 17:18:39');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_currency`
--

CREATE TABLE IF NOT EXISTS `tbl_currency` (
  `currency_id` int(6) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(120) DEFAULT NULL,
  `currency_symbol` varchar(15) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbl_currency`
--

INSERT INTO `tbl_currency` (`currency_id`, `currency_name`, `currency_symbol`, `created_date`) VALUES
(1, 'Franc CFA', 'CFA', '2016-03-26 17:29:09');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_email_template`
--

CREATE TABLE IF NOT EXISTS `tbl_email_template` (
  `tplid` int(11) NOT NULL AUTO_INCREMENT,
  `tplshortname` varchar(250) NOT NULL,
  `tplsubject` varchar(250) NOT NULL,
  `tplmessage` text NOT NULL,
  `tplmailid` varchar(100) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tplid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `tbl_email_template`
--

INSERT INTO `tbl_email_template` (`tplid`, `tplshortname`, `tplsubject`, `tplmessage`, `tplmailid`, `isactive`) VALUES
(3, 'Activate your {COMPANY_NAME} account', 'Activate your {COMPANY_NAME}account', '<p>Hello <strong>{NAME}</strong></p>\n\n<p>Thank you for registering with {COMPANY_NAME}</p>\n\n<p>Before we can complete your registration, we need to verify your e-mail address. Please click on the link below to complete your registration.</p>\n\n<p><a href="{SITE_PATH}user/access/{code}" target="_blank">{SITE_PATH}user/access/{code}</a></p>\n\n<p>If you have problems following the link, please copy and paste it into your browser to complete your registration.</p>\n\n<p>A request to create account was received from your {COMPANY_NAME} Account - {EMAIL} from the IP - {IP}</p>\n\n<p>Enjoy!<br />\n<strong>The {COMPANY_NAME} Team</strong><br />\n<br />\n<br />\nIf you have not initiated this request, send mail to {ADMIN_EMAIL}<br />\nIf you have any query please send mail to {ADMIN_EMAIL}<br />\nThis is an automated email, please don&#39;t reply.</p>', NULL, 0),
(10, 'Thanks for Contact Us', 'Thanks for Contact Us', '<p>Dear Admin,<br />\r\n<br />\r\nName: {Name}<br />\r\nEmail: {email}<br />\r\nPhone: {phone}<br />\r\nMessage:<br />\r\n<br />\r\n{message}<br />\r\n<br />\r\nRegards,<br />\r\ncarpoolingscript.com Team</p>', NULL, 0),
(11, 'Feedback', 'Feedback', '<p>Dear Admin,<br />\r\n<br />\r\nName: {Name}<br />\r\nEmail: {email}<br />\r\nPhone: {phone}<br />\r\nFeedback:<br />\r\n<br />\r\n{message}<br />\r\n<br />\r\nPage: {page}<br />\r\nRating: {rating}<br />\r\nRegards,<br />\r\ncarpoolingscript.com Team</p>', NULL, 0),
(12, 'Activate your {COMPANY_NAME} account', 'Activate your {COMPANY_NAME} account', '<p>Hello <strong>{NAME}</strong></p>\n\n<p>Thank you for registering with {COMPANY_NAME}</p>\n\n<p>Your Password is <strong>{PASSWORD}</strong></p>\n\n<p>A request to create account was received from your {COMPANY_NAME} Account - {EMAIL}</p>\n\n<p>Enjoy!<br />\n<strong>The {COMPANY_NAME} Team</strong><br />\n<br />\n<br />\nIf you have not initiated this request, send mail to {ADMIN_EMAIL}<br />\nIf you have any query please send mail to {ADMIN_EMAIL}<br />\nThis is an automated email, please don&#39;t reply.</p>', NULL, 0),
(26, '{COMPANY_NAME}:Password changed', '{COMPANY_NAME}:Reset password-{EMAIL}', '<p>A request to reset password was received from your Carpooling Account - {EMAIL}</p>\n\n<p>Your password has been reset to <strong> {PASSWORD} </strong></p>\n\n<p>Enjoy!<br />\n<strong>The Carpooling Script Team</strong><br />\n<br />\n<br />\nIf you have not initiated this request, send mail to care@carpoolingscript.com<br />\nIf you have any query please send mail to care@carpoolingscript.com<br />\nThis is an automated email, please don&#39;t reply.</p>', NULL, 0),
(2, 'Thank you for subscribe', 'Thank you for subscribe', '<p> Thank you for subscribe </p>', NULL, 0),
(28, '{COMPANY_NAME}:Thank you for your enquiry with the ({OWNER_NAME})', '{COMPANY_NAME}:Thank you for your enquiry with the ({OWNER_NAME})', '<p>Hello <strong>{NAME}</strong></p>\r\n\r\n<p>Just now a rider enquired for the availability of a seat in your car. Kindly login to your dashboard for accepting or rejecting the request.</p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The {COMPANY_NAME} Team</strong><br />\r\n<br />\r\n&nbsp;</p>', NULL, 0),
(27, '{COMPANY_NAME}:You just received an enquiry for your ({VEHICLE_NUMBER})', '{COMPANY_NAME}:You just received an enquiry for your ({VEHICLE_NUMBER})', '<p>Hello <strong>{NAME}</strong></p>\r\n\r\n<p>Just now a rider enquired for the availability of a seat in your car. Kindly login to your dashboard for accepting or rejecting the request. Kindly find the details of the rider below.</p>\r\n\r\n<p>Traveller_name: <strong>{NAME}</strong></p>\r\n\r\n<p>Passanger_name: <strong>{PNAME}</strong></p>\r\n\r\n<p>Passanger_email: <strong>{PEMAIL}</strong></p>\r\n\r\n<p>Passanger_mobile: <strong>{PMOBILE}</strong></p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The</strong> <strong> {COMPANY_NAME} Team</strong><br />\r\n<br />\r\n&nbsp;</p>', NULL, 0),
(29, 'Activate your {SITENMAE} account', 'Activate your {SITENAME} account', '<p>Hello <strong>{NAME}</strong></p>\r\n\r\n<p>Thank you for registering with <strong>{SITENAME}</strong></p>\r\n\r\n<p>USER NAME: <strong>{EMAIL}</strong></p>\r\n\r\n<p>PASSWORD: <strong>{PASSWORD}</strong></p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The</strong> <strong>{SITENAME} Team</strong><br />\r\n<br /></p>', NULL, 0),
(30, '{COMPANY_NAME}:You just received an enquiry Acceptance', '{COMPANY_NAME}:You just received an enquiry Acceptance', 'Dear {NAME},\r\n\r\nCongratulations! Your ride enquiry as been accepted by the Car Owner. Thank you for using our Carpooling service. Kindly find your trip details and car details. Happy Riding and we will see you again.\r\n\r\n<p>Traveller name: <strong>{TNAME}</strong></p>\r\n\r\n<p>Traveller email: <strong>{TEMAIL}</strong></p>\r\n\r\n<p>Traveller mobile: <strong>{TMOBILE}</strong></p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The</strong> <strong> {COMPANY_NAME} Team</strong><br />\r\n<br />\r\n&nbsp;</p>', NULL, 0),
(31, '{COMPANY_NAME}:You just received an enquiry rejection', '{COMPANY_NAME}:You just received an enquiry rejection', 'Dear {NAME},\r\n\r\nOops! We are very sorry to inform you that the Car Owner has rejected your ride enquiry. Kindly find the link below to search and find more trips. Wish you a good luck this time to find a ride. \r\n\r\n<p><a href="{LINK}" target="_blank">More Rides</a></p>\r\n\r\n<p>Enjoy!<br />\r\n<strong>The</strong> <strong> {COMPANY_NAME} Team</strong><br />\r\n<br />\r\n&nbsp;</p>', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_enquires`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Contenu de la table `tbl_enquires`
--

INSERT INTO `tbl_enquires` (`enquiry_id`, `enquiry_passanger_id`, `enquiry_trip_id`, `enquire_travel_id`, `enquiry_trip_date`, `enquiry_trip_status`, `enquiry_date_time`) VALUES
(84, '7', '274', '6', '2016-04-16', 1, '2016-04-16 11:11:54'),
(83, '3', '274', '6', '2016-04-16', 1, '2016-04-15 18:04:40'),
(81, '2', '274', '6', '2016-04-16', 0, '2016-04-15 16:04:40'),
(80, '8', '274', '6', '2016-04-16', 1, '2016-04-15 11:58:45');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_feedback`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_language`
--

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `language_id` int(6) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(120) DEFAULT NULL,
  `language_code` varchar(15) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tbl_language`
--

INSERT INTO `tbl_language` (`language_id`, `language_name`, `language_code`, `created_date`) VALUES
(1, 'french', 'fr', '2016-03-23 19:03:59'),
(2, 'english', 'en', '2016-03-24 11:41:14');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_logo`
--

CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `name`) VALUES
(1, 'user1_logo_1460286767.png');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_radius`
--

CREATE TABLE IF NOT EXISTS `tbl_radius` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `distance_from` int(150) NOT NULL,
  `distance_to` int(150) NOT NULL,
  `radius` int(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tbl_radius`
--

INSERT INTO `tbl_radius` (`id`, `distance_from`, `distance_to`, `radius`) VALUES
(1, 11, 50, 5),
(2, 51, 100, 10),
(3, 101, 1000, 30),
(4, 0, 5, 1),
(5, 6, 10, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_rating`
--

CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_giver_id` int(16) NOT NULL,
  `rating_receiver_id` int(16) DEFAULT NULL,
  `rating` int(16) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_subscribe`
--

CREATE TABLE IF NOT EXISTS `tbl_subscribe` (
  `subscribe_id` int(150) NOT NULL AUTO_INCREMENT,
  `subscribe_email` varchar(255) NOT NULL,
  `subscribe_ip` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`subscribe_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_testimonials`
--

CREATE TABLE IF NOT EXISTS `tbl_testimonials` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `isactive` int(2) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `name`, `image`, `description`, `isactive`, `created_date`) VALUES
(6, 'carpoolingscript', 'user1_testimonials_1428056433.jpg', 'Carpooling is great, I have never again travelled alone to my city on weekends. And it''s much cheaper way to travel !', 0, '2015-04-03 20:50:39'),
(7, 'carpool', 'user1_testimonials_1428654758.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ille, ut dixi, vitiose. Non laboro, inquit, de nomine. Duo Reges', 0, '2015-04-10 19:02:43'),
(8, 'carpool', 'user1_testimonials_1428654875.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ille, ut dixi, vitiose. Non laboro, inquit, de nomine. Duo Reges', 0, '2015-04-10 19:04:45');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_trips`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=275 ;

--
-- Contenu de la table `tbl_trips`
--

INSERT INTO `tbl_trips` (`trip_id`, `trip_driver_id`, `trip_vehicle_id`, `trip_from_latlan`, `trip_to_latlan`, `source`, `destination`, `route`, `route_full_data`, `trip_routes_lat_lan`, `trip_routes`, `trip_return`, `trip_depature_time`, `trip_return_time`, `trip_journey_hours`, `trip_amenities`, `trip_frequncy`, `trip_avilable_seat`, `passenger_type`, `trip_rate_details`, `contact_person_name`, `contact_person_number`, `trip_comments`, `trip_user_id`, `trip_casual_date`, `trip_created_date`, `trip_status`, `trip_otp_status`) VALUES
(274, NULL, '231', '~14.7645042,-17.366028599999936~', '~15.6141768,-16.22867999999994~', 'Dakar, Senegal', 'Louga, Senegal', 'Kebemer', '', '~14.7645042,-17.366028599999936~,~15.3763381,-16.446476599999983~,~15.6141768,-16.22867999999994~', 'Dakar, Senegal~Kebemer, Louga, Senegal~Louga, Senegal', 'no', '01:00:00', '02:56:00', NULL, NULL, '', '3', '0', NULL, NULL, '0638226417', 'Je rentre à Louga le week end pour voir la famille.', '6', '2016/04/16', '2016-04-15 10:24:34', 1, 0),
(272, NULL, '229', '~14.8665572,-15.899495600000023~', '~14.7645042,-17.366028599999936~', 'Touba, Diourbel, Senegal', 'Dakar, Senegal', 'Thies', '', '~14.8665572,-15.899495600000023~,~14.7910052,-16.935860400000024~,~14.7645042,-17.366028599999936~', 'Touba, Diourbel, Senegal~Thies, Senegal~Dakar, Senegal', 'no', '11:15:00', '01:00:00', NULL, NULL, '', '1', '0', NULL, NULL, '0638226417', 'bsdjksbd', '1', '2016/04/14', '2016-04-13 15:43:38', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_t_login_logs`
--

CREATE TABLE IF NOT EXISTS `tbl_t_login_logs` (
  `login_log_id` double DEFAULT NULL,
  `login_id` double DEFAULT NULL,
  `login_ip` varchar(675) DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_t_login_logs`
--

INSERT INTO `tbl_t_login_logs` (`login_log_id`, `login_id`, `login_ip`, `login_time`) VALUES
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 3, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 1, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 4, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 6, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 2, '127.0.0.1', NULL),
(NULL, 8, '127.0.0.1', NULL),
(NULL, 7, '127.0.0.1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_t_trip_legs`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=839 ;

--
-- Contenu de la table `tbl_t_trip_legs`
--

INSERT INTO `tbl_t_trip_legs` (`trip_led_id`, `source_leg`, `source_latitude`, `source_longitude`, `destination_leg`, `destination_latitude`, `destination_longitude`, `expected_time`, `trip_return`, `route_rate`, `trip_id`, `created_time`) VALUES
(838, 'Kebemer, Louga, Senegal', '15.3763381', '-16.446476599999983', 'Louga, Senegal', '15.6141768', '-16.22867999999994', '2:30 am', 0, 0, 274, '2016-04-15 10:24:34'),
(837, 'Dakar, Senegal', '14.7645042', '-17.366028599999936', 'Louga, Senegal', '15.6141768', '-16.22867999999994', '9:15 am', 0, 500, 274, '2016-04-15 10:24:34'),
(836, 'Dakar, Senegal', '14.7645042', '-17.366028599999936', 'Kebemer, Louga, Senegal', '15.3763381', '-16.446476599999983', '9:00 am', 0, 1000, 274, '2016-04-15 10:24:34'),
(835, 'Thies, Senegal', '14.7910052', '-16.935860400000024', 'Dakar, Senegal', '14.7645042', '-17.366028599999936', '11:24 am', 0, 0, 273, '2016-04-13 20:44:12'),
(834, 'Touba, Diourbel, Senegal', '14.8665572', '-15.899495600000023', 'Dakar, Senegal', '14.7645042', '-17.366028599999936', '10:00 ', 0, 0, 273, '2016-04-13 20:44:12'),
(832, 'Thies, Senegal', '14.7910052', '-16.935860400000024', 'Dakar, Senegal', '14.7645042', '-17.366028599999936', '12:39 pm', 0, 1000, 272, '2016-04-13 15:43:38'),
(833, 'Touba, Diourbel, Senegal', '14.8665572', '-15.899495600000023', 'Thies, Senegal', '14.7910052', '-16.935860400000024', '10:00 ', 0, 0, 273, '2016-04-13 20:44:12'),
(831, 'Touba, Diourbel, Senegal', '14.8665572', '-15.899495600000023', 'Dakar, Senegal', '14.7645042', '-17.366028599999936', '11:15 ', 0, 2500, 272, '2016-04-13 15:43:38'),
(830, 'Touba, Diourbel, Senegal', '14.8665572', '-15.899495600000023', 'Thies, Senegal', '14.7910052', '-16.935860400000024', '11:15 ', 0, 1000, 272, '2016-04-13 15:43:38');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_email`, `user_password`, `user_type`, `user_company_name`, `user_first_name`, `user_last_name`, `user_about_us`, `user_profile_img`, `user_mobile`, `user_secondary_phone`, `user_secondary_mail`, `user_company_id`, `user_url`, `user_street`, `user_city`, `postal_code`, `user_occupation`, `marital_status`, `isverified`, `show_number`, `send_sms`, `allowed_food`, `allowed_pet`, `allowed_smoke`, `allowed_chat`, `allowed_music`, `user_gender`, `user_country`, `user_dob`, `communication_mobile`, `communication_email`, `login_type`, `isactive`, `user_admin_status`, `user_created_date`, `user_lost_login`) VALUES
(8, 'demba@gmail.com', '9fad81caabbd30778873b660f5b5ded01c67388a', '0', NULL, 'Demba Amar', 'Hann', '', '', '063332152', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', '1', '1', 0, 0, 0, 0, 0, NULL, NULL, '', 0, 0, 0, 1, 1, '2016-04-15 10:21:53', '2016-04-16 13:09:12'),
(2, 'falloufall87@gmail.com', '7ebde5f6ff5fb02b123ad42698e1a4e2132bd258', '0', NULL, 'Kalidou', 'Ndao', 'Je m''appelle Kalidou, j''aime bien voyager  de temps en temps. dzjdzd', 'user2_profile_1459710648.jpg', '0638226417', NULL, 'kal@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '', '1', '1', 1, 1, 1, 1, 1, '0', NULL, '1989-01-01', 0, 1, 0, 1, 1, '2016-03-23 19:30:28', '2016-04-16 13:07:34'),
(3, 'fallfallo@hotmail.fr', '7ebde5f6ff5fb02b123ad42698e1a4e2132bd258', '0', NULL, 'Falilou', 'Fall', 'Ku beug am mbay', 'user3_profile_1459015848.jpg', '0781786703', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, '3774c08ddc69a4184ce9865b8ea9e7ea69070f08', '1', '1', 0, 0, 0, 0, 0, '0', NULL, '1988-01-01', 0, 0, 0, 1, 1, '2016-03-26 16:36:45', '2016-03-26 19:06:56'),
(6, 'contact@khadimdev.com', '9606e19dc2ea173ac9cdabde96aad09d73d8bcd0', '0', NULL, 'Abdou Karim', 'Thioye', 'Khadim Mbacké', 'user6_profile_1460669667.png', '0638226417', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, '32e141e74aa53d773dead5f468f2dd52bd1743b6', '1', '1', 1, 0, 0, 1, 0, '0', NULL, '1989-01-01', 0, 0, 0, 1, 1, '2016-04-03 20:17:41', '2016-04-15 23:45:34'),
(7, 'khadimbacke@gmail.com', '59f167aaec9eb8789feb7f0a1e53b96803652874', '0', NULL, 'Khadim', 'Mbacké', '', '', '0638226417', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', '1', '1', 0, 0, 0, 0, 0, NULL, NULL, '', 0, 0, 0, 1, 1, '2016-04-15 10:15:37', '2016-04-16 13:11:49');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_vechicle_types`
--

CREATE TABLE IF NOT EXISTS `tbl_vechicle_types` (
  `vechicle_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `vechicle_type_name` varchar(40) DEFAULT NULL,
  `vechicle_image` varchar(64) NOT NULL,
  `category_id` int(14) NOT NULL,
  `vechicle_createdate` varchar(40) DEFAULT NULL,
  `isactive` int(2) NOT NULL,
  PRIMARY KEY (`vechicle_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Contenu de la table `tbl_vechicle_types`
--

INSERT INTO `tbl_vechicle_types` (`vechicle_type_id`, `vechicle_type_name`, `vechicle_image`, `category_id`, `vechicle_createdate`, `isactive`) VALUES
(29, 'Bentley Continental GT', '_FvnIcApkqDhU5N7b.jpg', 14, NULL, 0),
(28, 'Bentley Continental Flying Spur', '_Qumr2QgNJ2HvjrEI.jpg', 14, NULL, 0),
(27, 'Fiat Punto Evo', '_uoRfInUaFKfuHApI.jpg', 13, NULL, 0),
(26, 'Fiat Linea Classic', '_ihxkr5PpeYMabDtd.jpg', 13, NULL, 0),
(25, 'Fiat Linea', '_2BlQWhdbUygGikJC.jpg', 13, NULL, 0),
(24, 'Fiat Avventura', '_wyMH1Y9aLJQZAlCr.jpg', 13, NULL, 0),
(30, 'Volvo S60', '_11PK1IqLl7EGhRma.jpg', 35, NULL, 0),
(31, 'Volvo S80', '_KcUeeDa6gvIgc6pV.jpg', 35, NULL, 0),
(32, 'Bentley Mulsanne', '_eL4imSjUJLrb7yev.jpg', 14, NULL, 0),
(33, 'Volvo V40 Cross Country', '_ugs0tUF11Zh48mTR.jpg', 35, NULL, 1),
(34, 'BMW Series', '_CRC0gqSDEBE9oj9g.jpg', 15, NULL, 1),
(35, 'Volvo XC60', '_ATatDmxUKVgphqpb.jpg', 35, NULL, 1),
(36, 'Volvo XC90', '_XsrvxsHtuESXZ18B.jpg', 35, NULL, 1),
(37, 'BMW X1', '_f4n9ZiyhyJCkbXdg.jpg', 15, NULL, 1),
(38, 'Volkswagen Cross Polo', '_Qwt7sbxXJugIa24C.jpg', 34, NULL, 0),
(39, 'Chevrolet Tavera Neo 3', '_Gi6WE8slIdpR70BK.jpg', 16, NULL, 0),
(40, 'Chevrolet Spark', '_tvYauNVHldlBWkmS.jpg', 16, NULL, 0),
(41, 'Jetta', '_YlDDDOwa07CJwTdG.jpg', 34, NULL, 0),
(42, 'Chevrolet Sail Hatchback', '_TVqXBs1gBKtNOmy8.jpg', 16, NULL, 0),
(43, 'Sail', '_U8V5XRaJn4I8PSxb.jpg', 16, NULL, 0),
(44, 'Chevrolet Beat', '_mEoHhv72SKFeZYIq.jpg', 16, NULL, 0),
(45, 'Captiva', '_BbaTIBWOlYwtop9R.jpg', 16, NULL, 0),
(46, 'New Innova', '_nJKzz8WcJiTt2x3D.jpg', 33, NULL, 0),
(47, 'Chevrolet Enjoy', '_RrayD77MOLFVcYf3.jpg', 16, NULL, 0),
(48, 'Camry', '_fZVcBdWPePU4se0V.jpg', 33, NULL, 0),
(49, 'Datsun Go', '_C1BddYte5kjuBnXl.jpg', 17, NULL, 0),
(50, 'Camry Hybrid', '_mGPuBy2XYZ4qc97y.jpg', 33, NULL, 0),
(51, 'Corolla Altis', '_TPP5KKVblCuohfKI.jpg', 33, NULL, 0),
(52, 'Ferrari', '_Myx5YNP37GW7CQm9.jpg', 18, NULL, 0),
(53, 'Etios', '_hEy2eziJXf7ka8w3.jpg', 33, NULL, 0),
(54, 'Etios Cross', '_xMLrQc6VY6MkhRe2.jpg', 33, NULL, 0),
(55, 'Ford EcoSport', '_vkkKn7Ph80WMpA04.jpg', 19, NULL, 0),
(56, 'Etios Liva', '_M28I78l7F2s6eMZ1.jpg', 33, NULL, 0),
(57, 'Ford Endeavour', '_53Qg2QQOeoGeozCA.jpg', 19, NULL, 0),
(58, 'Fortuner', '_aGXIAmcBXskEnEXj.jpg', 33, NULL, 0),
(59, 'Ford Fiesta', '_xzWCE3mcGGGnbHoV.jpg', 19, NULL, 0),
(60, 'Land Cruiser', '_wVsbxA4k2iTb0lsa.jpg', 33, NULL, 0),
(61, 'Ford Fiesta Classic', '_rNxyD3nzmuZlfXKF.jpg', 19, NULL, 0),
(62, 'Land Cruiser Prado', '_i1lAVsh0g7zpm2GR.jpg', 33, NULL, 0),
(63, 'Prius', '_FoQYZsizOp98HO9t.jpg', 33, NULL, 0),
(64, 'Ford Figo', '_AMgtn4FK6Y9QhrGO.jpg', 19, NULL, 0),
(65, 'Aria', '_6aSBaZkPU69xA5zz.jpg', 32, NULL, 0),
(66, 'Indica eV2', '_6TKgREa1YauwcK4d.jpg', 32, NULL, 0),
(67, 'Honda All New City', '_4XfsZKxvqY2NeaWX.jpg', 21, NULL, 0),
(68, 'Indigo eCS', '_174etwe6KDyoBE4s.jpg', 32, NULL, 0),
(69, 'Honda Amaze', '_MhrD0yBgHTL6qXKE.jpg', 21, NULL, 0),
(70, 'Manza', '_ihVJjodqgFgecM1A.jpg', 32, NULL, 0),
(71, 'Movus', '_yXPhI3MK54LgLivw.jpg', 32, NULL, 0),
(72, 'Honda Brio', '_rE7fYEfNng7CmjJP.jpg', 21, NULL, 0),
(73, 'Nano', '_fbJdW4pU2Y5E2UyQ.jpg', 32, NULL, 0),
(74, 'Honda CR-V', '_bObUvyWb4WRICyBB.jpg', 21, NULL, 0),
(75, 'Safari Dicor', '_PKqljrlKGhnqsnoZ.jpg', 32, NULL, 0),
(76, 'Honda Mobilio', '_HXBI3cSQR3w3wKsJ.jpg', 21, NULL, 0),
(77, 'Safari Storme', '_Dzo4I6Nn01IDp8RT.jpg', 32, NULL, 0),
(78, 'Sumo Gold', '_yGrr2sxmOXuvx4SS.jpg', 32, NULL, 0),
(79, 'Venture', '_iEbQTRRtxsItnSVP.jpg', 32, NULL, 0),
(80, 'Vista', '_0Ffa0mn5R1xIibZV.jpg', 32, NULL, 0),
(81, 'Hyundai Elite i20', '_Pv2RgoGBsaqMxFMD.jpg', 22, NULL, 0),
(82, 'Xenon XT', '_inPsPyoy41bRSBwB.jpg', 32, NULL, 0),
(83, 'Hyundai EON', '_d6bu674D2uM5Ca4G.jpg', 22, NULL, 0),
(84, 'Zest', '_b6xZmUalsDPfN6yH.jpg', 32, NULL, 0),
(85, 'Hyundai i10', '_MydaVT9P5Y2Jv6p6.jpg', 22, NULL, 0),
(86, 'Hyundai i20', '_6xVEA6ZiUr7gd1ZO.jpg', 22, NULL, 0),
(87, 'Fabia', '_7cPRgOF2dCdjVUvd.jpg', 31, NULL, 0),
(88, 'Hyundai Xcent', '_Zw6pih7f17rUo51D.jpg', 22, NULL, 0),
(89, 'Octavia', '_ZuYwYKw2xpkaARcN.jpg', 31, NULL, 0),
(90, 'Hyundai Sonata', '_bVcsplL3qD6WxZ5k.jpg', 22, NULL, 0),
(91, 'Rapid', '_1iiEZDJ7RyuWeCy9.jpg', 31, NULL, 0),
(92, 'Hyundai Santa Fe', '_dx8aHVh8y9ywqLOr.jpg', 22, NULL, 0),
(93, 'Superb', '_y8S39a3qixIyoE7c.jpg', 31, NULL, 0),
(94, 'Hyundai Neo Fluidic Elantra', '_6oQHVXR1djDftADy.jpg', 22, NULL, 0),
(95, 'Yeti', '_Vy8c13jgSvE1rmtz.jpg', 31, NULL, 0),
(96, 'Duster', '_Fqjd2urm1VDh1REr.jpg', 30, NULL, 0),
(97, 'Isuzu MU-7', '_0Fkea9syXLEMr7ov.jpg', 23, NULL, 0),
(98, 'Duster Adventure', '_7qg3w0KhTPQuHrLn.jpg', 30, NULL, 0),
(99, 'Fluence', '_rqhPaNlwgZiuiGiv.jpg', 30, NULL, 0),
(100, 'Koleos', '_CL351R8O17zWBvTo.jpg', 30, NULL, 0),
(101, 'Jaguar XF', '_TkfOR29EC1TcovsH.jpg', 24, NULL, 0),
(102, 'Pulse', '_5oeOrWjeib7XzsZW.jpg', 30, NULL, 0),
(103, 'Scala', '_sEKrOoWuL0DJZwxl.jpg', 30, NULL, 0),
(104, 'Evalia', '_ayyDq9o5AnNdKJxM.jpg', 29, NULL, 0),
(105, 'Micra', '_WnjBKrpWMg2mVhy5.jpg', 29, NULL, 0),
(106, 'Micra Active', '_jClS0IO9dgznWEde.jpg', 29, NULL, 0),
(107, 'Sunny', '_btv5NQUlECgE99Eh.jpg', 29, NULL, 0),
(108, 'Terrano', '_WTD4fUy9iyozgukU.jpg', 29, NULL, 0),
(109, 'Mirage', '_nQXOSJnm7HKBj2VQ.jpg', 36, NULL, 0),
(110, 'Pajero Sport', '_fWnZ43GykeeeMlac.jpg', 36, NULL, 0),
(111, 'Cooper', '_AEiZa1nLODJaBrUf.jpg', 28, NULL, 0),
(112, 'Cooper Convertible', '_OTXbXCgjO0z3yF6f.jpg', 28, NULL, 0),
(113, 'Cooper Countryman', '_ps15gkk8vCAi8kwP.jpg', 28, NULL, 0),
(114, 'Benz A-Class', '_xX5CJJRn0ntagNO4.jpg', 27, NULL, 0),
(115, 'Benz B-Class', '_yo1DatiuyDHzglsT.jpg', 27, NULL, 0),
(116, 'Benz C-Class', '_tHbOTOtkWZYyuJiK.jpg', 27, NULL, 0),
(117, 'Suzuki ALTO 800', '_bqv1Zxyn7nCldvGI.jpg', 26, NULL, 0),
(118, 'Mahindra Bolero', '_Vw1UrR3eQbL6i71u.jpg', 25, NULL, 0),
(119, 'Suzuki Alto K10', '_73Z2k8CXJt03q3Wm.jpg', 26, NULL, 0),
(120, 'Mahindra e2o', '_g45EJFed2smCMl64.jpg', 25, NULL, 0),
(121, 'Mahindra Xylo', '_nZE2HCr3QuNBPezj.jpg', 25, NULL, 0),
(122, 'Suzuki Celerio', '_tqTjxoVmIiSJHbpT.jpg', 26, NULL, 0),
(123, 'Mahindra XUV500', '_VnmvyfRKycnwgwIE.jpg', 25, NULL, 0),
(124, 'Suzuki Ciaz', '_7mxP6V07jeEHHbcN.jpg', 26, NULL, 0),
(125, 'Suzuki Eeco', '_ON2hCTf7fIWs7wMu.jpg', 26, NULL, 0),
(126, 'Mahindra Verito', '_648P92en1Vq1a8Fi.jpg', 25, NULL, 0),
(127, 'Suzuki Ertiga', '_mM6xCMAOonXg1CpB.jpg', 26, NULL, 0),
(128, 'Mahindra Scorpio', '_IGsbGD8hCLqLGPt7.jpg', 25, NULL, 0),
(129, 'Suzuki Grand Vitara', '_Xt5lBhvggvcixY6e.jpg', 26, NULL, 0),
(130, 'Mahindra Quanto', '_bAMAdloKgHXNs6yT.jpg', 25, NULL, 0),
(131, 'Suzuki Gypsy', '_Iq6wMJbgct6jFy97.jpg', 26, NULL, 0),
(132, 'Maxximo Mini Van', '_3nL1AoOxThWb3eGP.jpg', 25, NULL, 0),
(133, 'Suzuki Omni', '_sw2888cvkzRxDerA.jpg', 26, NULL, 0),
(134, 'Suzuki Ritz', '_V0OwcKSW1qIkz7bx.jpg', 26, NULL, 0),
(135, 'Suzuki Stingray', '_shfIakTh1TBwoAnP.jpg', 26, NULL, 0),
(136, 'Suzuki Swift', '_cuuK81VJ9ZFeJ6Di.jpg', 26, NULL, 0),
(137, 'Suzuki Swift DZire', '_nap6eVhT3wf1p3gE.jpg', 26, NULL, 1),
(138, 'Suzuki WagonR', '_z0gOJxXKzDz2lIgX.jpg', 26, NULL, 1),
(139, 'Winger', '_E5FgPmpxgQreiT6n.jpg', 32, NULL, 1),
(140, 'Tempo Force', '_y84yYPTFaMd374iG.jpg', 37, NULL, 1),
(142, '6 Alpina', '0', 15, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_vehicle`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=232 ;

--
-- Contenu de la table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`vechicle_id`, `vechicle_type_id`, `vechicle_number`, `vechicle_logo`, `vechiclecomfort`, `user_id`, `vechicle_createdate`) VALUES
(92, 85, 'dl4c ag 4435', '0', '', 159, '2015-01-21 08:08:36'),
(90, 34, '1234', '0', '', 155, '2015-01-20 23:45:19'),
(91, 86, 'WB02AE4294', '1abe5cd53691b57dd96ceac594a09767.jpg', '', 150, '2015-01-20 23:49:35'),
(89, 85, '1907', '0', '', 153, '2015-01-20 23:05:40'),
(88, 117, 'KA02MA5292', '0', '', 152, '2015-01-20 22:33:08'),
(87, 138, 'MH 46 X 5398', '0', '', 151, '2015-01-20 21:16:59'),
(86, 41, 'MR6063', '0', '', 147, '2015-01-20 18:56:32'),
(85, 81, '7550', '89dc54ba424c1c0bf45c669b72e144c0.jpg', '', 145, '2015-01-20 16:00:13'),
(75, 138, 'HR51 AG 9639', '0', '', 117, '2015-01-18 05:45:33'),
(76, 138, 'MH46-X-1369', '0', '', 122, '2015-01-19 02:56:50'),
(77, 121, 'MH04ED4026', '0', '', 131, '2015-01-19 18:23:12'),
(78, 138, 'DL2CAN5614', '0', '', 135, '2015-01-19 20:32:44'),
(79, 117, 'MH04GJ4255', '0', '', 136, '2015-01-19 22:49:29'),
(80, 44, 'TN18 Y 1486', '0', '', 138, '2015-01-20 02:32:56'),
(81, 127, 'mh14kh2422', '0', '', 142, '2015-01-20 04:22:41'),
(82, 37, '12345', '0', '', 143, '2015-01-20 05:22:07'),
(83, 61, 'KA41 P8749', '0', '', 144, '2015-01-20 14:12:38'),
(73, 69, 'KA 04 MP 3342', '0', '', 102, '2015-01-13 04:09:06'),
(74, 53, 'KA01MH2514', '0', '', 116, '2015-01-18 04:32:37'),
(72, 137, 'MH 46 X 9503', '0', '', 101, '2015-01-13 04:04:26'),
(71, 66, 'UP165713', '0', '', 91, '2015-01-12 16:48:47'),
(70, 138, 'DL9CV0714', '0', '', 91, '2015-01-12 16:48:00'),
(68, 117, 'KA 02 MA 5292', '0', '', 84, '2015-01-12 03:27:58'),
(69, 122, 'MH46 Z 5395', '0', '', 89, '2015-01-12 16:02:43'),
(66, 134, 'HR51BA3755', '0', '', 85, '2015-01-12 03:27:20'),
(65, 138, 'HR51AW3752', '0', '', 85, '2015-01-12 03:07:20'),
(64, 122, 'MF-03-BS-2356', '0', '', 80, '2015-01-11 18:07:17'),
(63, 138, 'MH12', '0', '', 82, '2015-01-11 14:30:48'),
(62, 46, 'TN10 AK8471', '0', '', 78, '2015-01-11 14:28:09'),
(61, 79, 'TN 09 123456', '0', '', 81, '2015-01-11 07:41:41'),
(94, 138, 'AP10AZ1464', '0', '', 162, '2015-01-21 15:44:59'),
(95, 136, 'TN05AU0853', '0', '', 165, '2015-01-21 18:05:22'),
(96, 136, 'KA05MP3738', '0', '', 168, '2015-01-21 21:13:18'),
(97, 55, 'dl12cb3133', '0', '', 172, '2015-01-22 17:18:50'),
(98, 121, '1030', '0', '', 174, '2015-01-22 19:04:05'),
(100, 136, 'KA51M8633', '0', '', 182, '2015-01-24 03:16:06'),
(101, 119, 'KA 53MB 9379', '0', '', 183, '2015-01-24 03:38:25'),
(102, 81, 'DL10CS4823', '2a2538e3781261536148f10d40c72426.jpg', '', 184, '2015-01-24 04:31:57'),
(103, 73, 'AP09CL7986', '0', '', 185, '2015-01-24 14:52:54'),
(104, 70, 'ap10be8648', '0', '', 185, '2015-01-24 14:55:01'),
(105, 80, 'AP13TV1411', '0', '', 185, '2015-01-24 14:57:00'),
(106, 136, 'MH 04 CJ 7640', '0', '', 188, '2015-01-24 23:13:27'),
(107, 66, 'DL3CAX5457', '0', '', 189, '2015-01-25 14:33:27'),
(108, 125, 'DL4CA0736', '0', '', 190, '2015-01-25 16:38:36'),
(109, 138, '3843', '0', '', 194, '2015-01-26 18:32:59'),
(110, 88, 'dl3cay5923', '0', '', 196, '2015-01-27 00:45:59'),
(111, 66, 'HR 20 W 4570', '0', '', 198, '2015-01-27 05:36:57'),
(112, 137, 'HR26W9567', '0', '', 202, '2015-01-27 16:05:24'),
(113, 40, 'Withheld', '0', '', 210, '2015-01-28 00:08:37'),
(114, 64, 'mh 12 hm 1828', '0', '', 211, '2015-01-28 03:48:17'),
(115, 83, 'WB26R9386', '0', '', 215, '2015-01-28 15:25:49'),
(116, 69, 'TN10 AK8471', '0', '', 225, '2015-01-30 03:55:09'),
(117, 34, 'TN 25 3335', '0', '', 224, '2015-01-30 18:10:16'),
(120, 137, 'MH12JZ1720', '0', '', 237, '2015-02-01 20:20:56'),
(119, 117, 'MH 04 GJ 3598', '0', '', 229, '2015-01-30 20:37:49'),
(121, 88, '1387', '0', '', 246, '2015-02-03 13:45:48'),
(122, 43, 'MH 01 VA 9908', '0', '', 247, '2015-02-03 14:38:57'),
(123, 80, '6071', '0', '', 250, '2015-02-03 15:59:25'),
(124, 80, '6071', '0', '', 250, '2015-02-03 15:59:25'),
(125, 59, 'MH43AJ 6046', '0', '', 257, '2015-02-03 19:46:07'),
(126, 125, 'HR29AH6254', '0', '', 270, '2015-02-05 17:46:39'),
(127, 138, 'MH43AN6921', '0', '', 271, '2015-02-05 18:24:04'),
(128, 123, 'UP16AV4287', '0', '', 280, '2015-02-06 15:29:09'),
(129, 127, 'KA-05-MP-8486', '6d938ae15e540094f71ff694ea0f1745.jpg', '', 279, '2015-02-06 15:39:13'),
(130, 138, 'mh02', '0', '', 283, '2015-02-06 16:29:40'),
(131, 134, 'TN 66 D 2639', '0', '', 286, '2015-02-06 19:13:02'),
(132, 66, 'TN 10 8188', '0', '', 269, '2015-02-06 20:45:01'),
(133, 39, 'TN20BE1428', '0', '', 289, '2015-02-06 22:31:17'),
(134, 140, 'TN20BE2332', '0', '', 289, '2015-02-06 22:32:43'),
(135, 81, 'KA19ME5936', '0', '', 290, '2015-02-06 23:08:14'),
(136, 73, 'TN 37 d 6777', '0', '', 293, '2015-02-07 03:04:19'),
(137, 59, 'TN10 AK8471', '0', '', 294, '2015-02-07 04:10:58'),
(138, 69, 'TN10 AK8471', '0', '', 294, '2015-02-07 04:23:08'),
(139, 117, 'KA53MA2075', '0', '', 296, '2015-02-07 06:48:50'),
(140, 88, 'Ak8471', '0', '', 299, '2015-02-08 16:30:02'),
(141, 117, 'HR51T 5372', '0', '', 304, '2015-02-09 04:49:07'),
(142, 117, 'HR51AT4938', '0', '', 304, '2015-02-09 04:50:40'),
(143, 138, 'DL2FEM0028', '0', '', 310, '2015-02-10 14:04:38'),
(144, 64, 'DL4CAF 9530', '0', '', 164, '2015-02-11 15:59:15'),
(146, 84, '4292', '0', '', 317, '2015-02-11 16:21:10'),
(147, 64, 'KA03M1354', '0', '', 219, '2015-02-11 17:24:38'),
(148, 47, 'hr 45 u5434', '0', '', 322, '2015-02-12 14:17:50'),
(149, 138, 'MH02CW2674', '0', '', 323, '2015-02-12 16:48:50'),
(150, 136, 'Dl3CCA4025', 'd212c41bd43cb327a451f6edcf482e77.jpg', '', 324, '2015-02-12 17:01:30'),
(151, 26, 'MH02DN2774', '0', '', 326, '2015-02-12 21:44:22'),
(152, 122, 'TN09BY8271', '0', '', 314, '2015-02-13 01:07:52'),
(153, 47, 'hr 41 h5643', '0', '', 322, '2015-02-13 01:18:07'),
(154, 137, 'MH 11 BH 6638', '0', '', 265, '2015-02-13 01:29:56'),
(155, 138, 'MH03BS3172', '0', '', 330, '2015-02-13 03:41:18'),
(156, 94, 'MH02XC9854', '0', '', 277, '2015-02-13 05:03:14'),
(157, 55, 'TN32AP2264', '0', '', 331, '2015-02-13 05:57:59'),
(158, 136, 'ap13tu8813', '0', '', 332, '2015-02-13 14:50:06'),
(159, 136, 'UP16Aq5928', '0', '', 334, '2015-02-13 16:19:19'),
(160, 86, 'DL 8CAA 2997', '0', '', 236, '2015-02-13 16:46:46'),
(161, 138, 'UP16U2954', '0', '', 200, '2015-02-13 20:50:08'),
(162, 85, 'KA-8211', '0', '', 231, '2015-02-13 23:33:41'),
(163, 55, '2856', '0', '', 336, '2015-02-13 23:43:28'),
(164, 52, '6979', '0', '', 336, '2015-02-14 00:14:26'),
(165, 49, 'DL 7C T 3352', '0', '', 339, '2015-02-14 01:44:11'),
(166, 67, 'KA03 MU2719', '0', '', 341, '2015-02-14 18:26:04'),
(167, 72, 'ka-02 MH 1325', '0', '', 343, '2015-02-14 21:11:31'),
(168, 47, '100', '0', '', 320, '2015-02-15 00:51:59'),
(169, 138, 'MH01-BK-355', '0', '', 345, '2015-02-15 20:04:34'),
(170, 138, '8588', '0', '', 347, '2015-02-16 02:02:36'),
(171, 137, 'TN10 AB 5833', '0', '', 350, '2015-02-16 16:47:53'),
(172, 73, '2555', '0', '', 351, '2015-02-16 18:13:08'),
(173, 134, '9985', '0', '', 352, '2015-02-16 19:01:06'),
(174, 128, 'DL3CAS3342', '0', '', 354, '2015-02-16 22:26:52'),
(175, 46, 'NI001', '0', '', 299, '2015-02-17 02:28:37'),
(176, 83, 'NI001', '0', '', 355, '2015-02-17 03:43:45'),
(177, 38, 'MH 12 2594', '0', '', 357, '2015-02-18 01:55:13'),
(178, 69, '3543', '0', '', 358, '2015-02-18 03:40:21'),
(179, 59, 'KA 04 MF 7978', '0', '', 359, '2015-02-18 13:41:46'),
(180, 119, '0078', '0', '', 360, '2015-02-18 16:24:15'),
(181, 67, '0048', '0', '', 360, '2015-02-18 16:33:39'),
(182, 52, 'TN 45 8526', 'user_vehicle_1427466168.jpg', '', 224, '2015-03-27 13:22:55'),
(183, 52, 'TN 45 8523', 'user_vehicle_1427463404.jpg', '', 224, '2015-04-14 10:08:35'),
(185, 64, 'TN AL 0001', '0', '', 224, '2015-04-17 03:25:59'),
(186, 102, 'TN 49 0007', 'user_vehicle_1429272137.jpg', '', 365, '2015-04-17 09:58:20'),
(187, 105, 'TN 32 0001', 'user_vehicle_1429272105.jpg', '', 365, '2015-04-17 10:01:53'),
(188, 99, 'TN 69 0027', 'user_vehicle_1429272426.jpg', '', 365, '2015-04-17 10:07:42'),
(189, 74, 'AL WZ 1111', 'user_vehicle_1429276573.jpg', '', 366, '2015-04-17 11:16:19'),
(190, 52, 'S 555', 'user_vehicle_1432813385.jpeg', '4', 379, '2015-05-28 09:43:10'),
(191, 37, 'S 666', 'user_vehicle_1432817732.jpg', '4', 379, '2015-05-28 10:55:37'),
(192, 28, 'S 545', 'user_vehicle_1432819997.jpeg', '4', 379, '2015-05-28 11:33:22'),
(193, 47, 'S 767', 'user_vehicle_1432820278.jpg', '4', 379, '2015-05-28 11:38:06'),
(194, 101, 'JS 555', 'user_vehicle_1433936900.jpg', '4', 385, '2015-06-10 09:48:33'),
(195, 39, '3432432432423', '0', '2', 387, '2015-06-13 09:35:44'),
(196, 52, '345678', '0', '4', 389, '2015-06-18 04:15:05'),
(197, 40, 'adfasdf', '0', '4', 392, '2015-06-25 18:48:51'),
(199, 34, '7877', '0', '3', 362, '2015-07-27 17:12:33'),
(200, 37, 'BMW 1234', 'user_vehicle_1438064764.jpg', '4', 401, '2015-07-28 04:26:35'),
(201, 101, 'GKV 1234', 'user_vehicle_1438064990.jpg', '', 401, '2015-07-28 04:29:55'),
(202, 52, 'gkv 6789', 'user_vehicle_1438065354.jpg', '4', 401, '2015-07-28 04:35:58'),
(203, 110, 'gkv555', 'user_vehicle_1438077124.jpg', '4', 402, '2015-07-28 07:52:22'),
(204, 97, 'gkv666', 'user_vehicle_1438077175.jpg', '4', 402, '2015-07-28 07:53:22'),
(205, 114, 'gkv444', 'user_vehicle_1438077346.jpg', '4', 402, '2015-07-28 07:55:50'),
(206, 42, 'gkv 111', 'user_vehicle_1438079243.jpg', '4', 403, '2015-07-28 08:27:28'),
(207, 49, 'gkv 333', 'user_vehicle_1438079401.jpg', '4', 403, '2015-07-28 08:30:07'),
(208, 29, 'gkv 007', 'user_vehicle_1438079575.jpg', '4', 403, '2015-07-28 08:32:59'),
(209, 69, 'AP28CH4616', '0', '3', 407, '2015-08-09 07:31:01'),
(210, 34, '1', 'user_vehicle_1439878332.jpg', '2', 409, '2015-08-18 04:12:20'),
(211, 101, '1', 'user_vehicle_1439878375.jpg', '2', 409, '2015-08-18 04:13:10'),
(212, 46, 'A1A 2563', '0', '3', 413, '2015-08-18 06:20:58'),
(213, 34, '55626262', '0', '1', 421, '2015-08-18 10:58:18'),
(214, 34, '5141125', '0', '2', 426, '2015-08-18 13:37:02'),
(215, 39, 'iu8765', '0', '1', 428, '2015-08-18 15:18:57'),
(216, 40, 'AZ MN 12346', 'user_vehicle_1439975875.jpg', '1', 441, '2015-08-19 07:18:08'),
(217, 25, '11kk1111', '0', '2', 446, '2015-08-19 11:24:29'),
(218, 34, 'gj1338877', '0', '4', 447, '2015-08-19 11:46:20'),
(219, 40, '8424434', '0', '4', 449, '2015-08-19 12:42:10'),
(220, 76, '23321', '0', '2', 426, '2015-08-19 21:55:28'),
(221, 34, '1', '0', '3', 456, '2015-08-20 10:23:11'),
(222, 76, '2232/jlk', 'user_vehicle_1440081417.png', '3', 461, '2015-08-20 12:36:17'),
(223, 37, '10', 'user_vehicle_1440096270.jpg', '4', 463, '2015-08-20 16:44:34'),
(224, 105, '53453453', '0', '4', 464, '2015-08-20 19:59:59'),
(225, 45, 'WDW332', '0', '3', 465, '2015-08-21 01:41:58'),
(226, 25, 'bz-19-c-9987', '0', '', 442, '2015-08-21 07:37:34'),
(227, 59, 'CN 22222', '0', '1', 441, '2015-08-21 07:43:10'),
(228, 37, 'sdfad', 'user_vehicle_1440344104.png', '1', 476, '2015-08-23 13:35:14'),
(229, 34, '0658252', '0', '2', 1, '2016-03-23 19:13:09'),
(230, 34, 'DK-2574-AZ', '0', '3', 2, '2016-04-03 20:09:51'),
(231, 34, 'DK-2574-AA', '0', '3', 6, '2016-04-05 19:17:17');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_widgets`
--

CREATE TABLE IF NOT EXISTS `tbl_widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `widget_name` varchar(255) NOT NULL,
  `widget_link` text NOT NULL,
  `widget_script` text NOT NULL,
  `widget_flag` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
